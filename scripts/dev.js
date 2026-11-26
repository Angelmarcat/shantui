const { spawn } = require('node:child_process');
const net = require('node:net');
const path = require('node:path');

const ngrokApiUrl = 'http://127.0.0.1:4040/api/tunnels';
const laragonTarget = 'http://shantui.test';
const phpTarget = 'http://127.0.0.1:8080';
const projectRoot = path.resolve(__dirname, '..');
let browserSyncPort;
let localTarget;
let apiTunnelName;
let ngrok;
let browserSync;
let phpServer;
let ngrokError;
let ownsNgrok = false;
let ownsApiTunnel = false;
let shuttingDown = false;

function startNgrok() {
    ngrok = spawn('ngrok', ['http', localTarget], { stdio: 'inherit' });
    ownsNgrok = true;

    ngrok.on('error', (error) => {
        ngrokError = error;
    });

    ngrok.on('exit', (code, signal) => {
        if (!shuttingDown) {
            console.error(`ngrok terminó inesperadamente (código ${code}, señal ${signal}).`);
            process.exitCode = code || 1;
            void shutdown();
        }
    });
}

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

async function selectBrowserSyncPort(startPort = 3000, endPort = 3099) {
    for (let port = startPort; port <= endPort; port += 1) {
        if (!(await isPortOpen('127.0.0.1', port))) {
            browserSyncPort = port;
            localTarget = `http://127.0.0.1:${port}`;
            apiTunnelName = `shantui-browser-sync-${port}`;
            process.env.BROWSER_SYNC_PORT = String(port);
            return;
        }
    }

    throw new Error(`No hay puertos disponibles para BrowserSync entre ${startPort} y ${endPort}.`);
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
        process.env.LOCAL_SITE_URL = laragonTarget;
        console.log(`Sitio local: ${laragonTarget} (Laragon)`);
        return;
    }

    if (await isPortOpen('127.0.0.1', 8080)) {
        throw new Error(
            'El puerto 8080 ya está ocupado. Libéralo o inicia Laragon antes de ejecutar npm run dev.'
        );
    }

    phpServer = spawn(
        'php',
        ['-S', '127.0.0.1:8080', '-t', projectRoot],
        { cwd: projectRoot, stdio: 'inherit' }
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

    await waitForPort('127.0.0.1', 8080, phpServer, 'El servidor PHP');
    process.env.LOCAL_SITE_URL = phpTarget;
    console.log(`Sitio local: ${phpTarget} (PHP integrado)`);
}

async function getNgrokTunnels() {
    const response = await fetch(ngrokApiUrl);
    if (!response.ok) {
        throw new Error(`La API local de ngrok respondió HTTP ${response.status}.`);
    }

    const data = await response.json();
    return data.tunnels;
}

async function createNgrokTunnel() {
    const response = await fetch(ngrokApiUrl, {
        method: 'POST',
        headers: { 'content-type': 'application/json' },
        body: JSON.stringify({
            name: apiTunnelName,
            addr: localTarget,
            proto: 'http',
        }),
    });

    if (!response.ok) {
        const details = await response.text();
        throw new Error(
            `No se pudo crear el túnel de Shantui (HTTP ${response.status}): ${details}`
        );
    }

    ownsApiTunnel = true;
    return response.json();
}

async function deleteNgrokTunnel() {
    if (!ownsApiTunnel) {
        return;
    }

    const response = await fetch(`${ngrokApiUrl}/${encodeURIComponent(apiTunnelName)}`, {
        method: 'DELETE',
    });

    if (!response.ok && response.status !== 404) {
        console.error(`No se pudo retirar el túnel de Shantui (HTTP ${response.status}).`);
    }
    ownsApiTunnel = false;
}

function normalizeTarget(target) {
    return target.replace('http://localhost:', 'http://127.0.0.1:').replace(/\/$/, '');
}

async function getNgrokUrl() {
    const deadline = Date.now() + 30000;
    let lastError;

    while (Date.now() < deadline) {
        if (ngrokError) {
            throw new Error(`No se pudo iniciar ngrok: ${ngrokError.message}`);
        }
        if (ngrok.exitCode !== null || ngrok.signalCode !== null) {
            throw new Error('ngrok se cerró antes de crear el túnel.');
        }

        try {
            const tunnels = await getNgrokTunnels();
            const tunnel = tunnels && tunnels.find((item) =>
                item.proto === 'https' && normalizeTarget(item.config.addr) === localTarget
            );
            if (tunnel) {
                return tunnel.public_url.replace(/\/$/, '');
            }
        } catch (error) {
            lastError = error;
        }

        await delay(500);
    }

    const reason = lastError ? ` Último error: ${lastError.message}` : '';
    throw new Error(
        `No se obtuvo una URL HTTPS de ngrok para el puerto ${browserSyncPort}.${reason}`
    );
}

async function shutdown() {
    if (shuttingDown) {
        return;
    }
    shuttingDown = true;

    if (browserSync) {
        browserSync.exit();
    }
    try {
        await deleteNgrokTunnel();
    } catch (error) {
        console.error(`No se pudo retirar el túnel de Shantui: ${error.message}`);
    }
    if (ownsNgrok && ngrok && ngrok.exitCode === null && ngrok.signalCode === null) {
        ngrok.kill();
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
    await prepareLocalSite();
    await selectBrowserSyncPort();
    console.log(`Puerto de BrowserSync: ${browserSyncPort}`);

    let activeTunnels;
    try {
        activeTunnels = await getNgrokTunnels();
    } catch (error) {
        if (!(error instanceof TypeError)) {
            throw error;
        }
    }

    const existingProjectTunnel = activeTunnels && activeTunnels.find((item) =>
        item.proto === 'https' && normalizeTarget(item.config.addr) === localTarget
    );

    if (existingProjectTunnel) {
        process.env.NGROK_URL = existingProjectTunnel.public_url.replace(/\/$/, '');
    } else {
        if (activeTunnels) {
            const tunnel = await createNgrokTunnel();
            process.env.NGROK_URL = tunnel.public_url.replace(/\/$/, '');
        } else {
            startNgrok();
            process.env.NGROK_URL = await getNgrokUrl();
        }
    }

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

    console.log(`URL pública: ${process.env.NGROK_URL}`);
    console.log('Presiona Ctrl+C para cerrar BrowserSync y retirar este túnel.');
}

start().catch((error) => {
    console.error(error.message);
    process.exitCode = 1;
    void shutdown();
});
