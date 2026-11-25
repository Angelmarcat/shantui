module.exports = {
    proxy: 'http://shantui.test',
    port: 3000,
    open: false,
    ui: false,
    injectChanges: false,
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
