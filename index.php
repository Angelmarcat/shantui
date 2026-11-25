<?php
$pageTitle = 'Inicio | Shantui';
$pageStylesheet = 'assets/css/home.css';
require __DIR__ . '/template-parts/head.php';
?>

<?php require __DIR__ . '/template-parts/header.php'; ?>

<main>
    <!-- section hero start -->
    <section id="inicio" class="hero-section py-5">
        <div class="container">
            <h1>Bienvenido a Shantui</h1>
            <p>Este es un texto de ejemplo para la sección principal de la página.</p>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Servicio 1</h3>
                        <p>Descripción del servicio 1.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Servicio 2</h3>
                        <p>Descripción del servicio 2.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Servicio 3</h3>
                        <p>Descripción del servicio 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section hero end -->
</main>

<?php require __DIR__ . '/template-parts/footer.php'; ?>