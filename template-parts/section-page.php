<?php require __DIR__ . '/head.php'; ?>
<?php require __DIR__ . '/header.php'; ?>

<main>
    <section class="container py-5">
        <h1><?= htmlspecialchars($sectionTitle, ENT_QUOTES, 'UTF-8') ?></h1>
        <p><?= htmlspecialchars($sectionDescription, ENT_QUOTES, 'UTF-8') ?></p>
    </section>
</main>

<?php require __DIR__ . '/footer.php'; ?>
