const { spawn } = require('node:child_process');
const net = require('node:net');
const path = require('node:path');

const laragonTarget = 'http://shantui.test';
const projectRoot = path.resolve(__dirname, '..');
let browserSync;
let phpServer;
let shuttingDown = false;

function delay(milliseconds) {
    return new Promise((resolve) => setTimeout(resolve, milliseconds));
}

function isPortOpen(host, port, timeout = 500) {
    return new Promise((resolve) => {
        const socket = net.createConnection({ host, port });
        let settled = false;

        function finish(isOpen) {
            if (settled) {
                return;
            }

            settled = true;
            socket.destroy();
            resolve(isOpen);
        }

        socket.once('connect', () => finish(true));
        socket.once('error', () => finish(false));
        socket.setTimeout(timeout, () => finish(false));
    });
}

async function findAvailablePort(startPort, endPort) {
    for (let port = startPort; port <= endPort; port += 1) {
        if (!(await isPortOpen('127.0.0.1', port))) {
            return port;
        }
    }

    throw new Error(`No hay puertos disponibles entre ${startPort} y ${endPort}.`);
}

async function waitForPort(host, port, processRef, description) {
    const deadline = Date.now() + 10000;

    while (Date.now() < deadline) {
        if (processRef.exitCode !== null || processRef.signalCode !== null) {
            throw new Error(`${description} se cerró antes de quedar disponible.`);
        }

        if (await isPortOpen(host, port)) {
            return;
        }

        await delay(250);
    }

    throw new Error(`${description} no quedó disponible a tiempo.`);
}

async function prepareLocalSite() {
    if (await isPortOpen('shantui.test', 80)) {
        console.log(`Origen local: ${laragonTarget} (Laragon)`);
        return laragonTarget;
    }

    const phpPort = await findAvailablePort(8080, 8099);
    const phpTarget = `http://127.0.0.1:${phpPort}`;

    phpServer = spawn(
        'php',
        ['-S', `127.0.0.1:${phpPort}`, '-t', projectRoot],
        { cwd: projectRoot, stdio: 'inherit', windowsHide: true }
    );

    phpServer.once('error', (error) => {
        if (!shuttingDown) {
            console.error(`No se pudo iniciar PHP: ${error.message}`);
        }
    });

    phpServer.once('exit', (code, signal) => {
        if (!shuttingDown) {
            console.error(`PHP terminó inesperadamente (código ${code}, señal ${signal}).`);
            process.exitCode = code || 1;
            void shutdown();
        }
    });

    await waitForPort('127.0.0.1', phpPort, phpServer, 'El servidor PHP');
    console.log(`Origen local: ${phpTarget} (PHP integrado)`);
    return phpTarget;
}

async function shutdown() {
    if (shuttingDown) {
        return;
    }

    shuttingDown = true;

    if (browserSync) {
        browserSync.exit();
    }

    if (phpServer && phpServer.exitCode === null && phpServer.signalCode === null) {
        phpServer.kill();
    }
}

process.once('SIGINT', () => {
    void shutdown().finally(() => process.exit());
});

process.once('SIGTERM', () => {
    void shutdown().finally(() => process.exit());
});

async function start() {
    const localSiteUrl = await prepareLocalSite();
    const browserSyncPort = await findAvailablePort(3000, 3099);

    process.env.LOCAL_SITE_URL = localSiteUrl;
    process.env.BROWSER_SYNC_PORT = String(browserSyncPort);

    browserSync = require('browser-sync').create();
    const config = require('../bs-config.cjs');

    await new Promise((resolve, reject) => {
        browserSync.init(config, (error) => {
            if (error) {
                reject(error);
                return;
            }

            resolve();
        });
    });

    console.log(`BrowserSync local: http://127.0.0.1:${browserSyncPort}`);
    console.log('Sin ngrok. Presiona Ctrl+C para detener el entorno local.');
}

start().catch((error) => {
    console.error(error.message);
    process.exitCode = 1;
    void shutdown();
});
