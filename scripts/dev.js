const { spawn } = require('node:child_process');

const ngrok = spawn('ngrok', ['http', '3000'], { stdio: 'inherit' });
let browserSync;
let ngrokError;
let shuttingDown = false;

ngrok.on('error', (error) => {
    ngrokError = error;
});

ngrok.on('exit', (code, signal) => {
    if (!shuttingDown) {
        console.error(`ngrok terminó inesperadamente (código ${code}, señal ${signal}).`);
        process.exitCode = code || 1;
        if (browserSync) {
            browserSync.exit();
        }
    }
});

function delay(milliseconds) {
    return new Promise((resolve) => setTimeout(resolve, milliseconds));
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
            const response = await fetch('http://127.0.0.1:4040/api/tunnels');
            if (response.ok) {
                const data = await response.json();
                const tunnel = data.tunnels.find((item) =>
                    item.proto === 'https' && item.config.addr.endsWith(':3000')
                );
                if (tunnel) {
                    return tunnel.public_url.replace(/\/$/, '');
                }
            }
        } catch (error) {
            lastError = error;
        }

        await delay(500);
    }

    const reason = lastError ? ` Último error: ${lastError.message}` : '';
    throw new Error(`No se obtuvo una URL HTTPS de ngrok para el puerto 3000.${reason}`);
}

function shutdown() {
    if (shuttingDown) {
        return;
    }
    shuttingDown = true;

    if (browserSync) {
        browserSync.exit();
    }
    if (ngrok.exitCode === null && ngrok.signalCode === null) {
        ngrok.kill();
    }
}

process.once('SIGINT', shutdown);
process.once('SIGTERM', shutdown);

async function start() {
    process.env.NGROK_URL = await getNgrokUrl();
    console.log(`NGROK_URL=${process.env.NGROK_URL}`);

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
}

start().catch((error) => {
    console.error(error.message);
    process.exitCode = 1;
    shutdown();
});
