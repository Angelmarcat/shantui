<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Shantui', ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="theme-color" content="#eb6608">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css?v=<?= filemtime(__DIR__ . '/../assets/css/style.css') ?>" rel="stylesheet">
    <link href="assets/css/navbar.css?v=<?= filemtime(__DIR__ . '/../assets/css/navbar.css') ?>" rel="stylesheet">
    <link href="assets/css/footer.css?v=<?= filemtime(__DIR__ . '/../assets/css/footer.css') ?>" rel="stylesheet">
    <?php if (isset($pageStylesheet)): ?>
        <link href="<?= htmlspecialchars($pageStylesheet, ENT_QUOTES, 'UTF-8') ?>?v=<?= filemtime(__DIR__ . '/../' . $pageStylesheet) ?>" rel="stylesheet">
    <?php endif; ?>
</head>
<body>
