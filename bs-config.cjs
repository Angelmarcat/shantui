module.exports = {
    proxy: process.env.LOCAL_SITE_URL || 'http://shantui.test',
    listen: '127.0.0.1',
    port: Number(process.env.BROWSER_SYNC_PORT) || 3000,
    open: false,
    ui: false,
    injectChanges: true,
    script: {
        domain: process.env.NGROK_URL,
    },
    socket: {
        domain: process.env.NGROK_URL,
    },
    files: [
        '**/*.php',
        '**/*.css',
        '**/*.js',
        'assets/img/**/*',
    ],
    watchEvents: ['add', 'change', 'unlink', 'addDir', 'unlinkDir'],
    watchOptions: {
        ignored: '**/node_modules/**',
    },
};
