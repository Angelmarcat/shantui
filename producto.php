<?php
$products = [
    'se220lc' => [
        'model' => 'SE220LC',
        'description' => 'Excavadora mediana',
        'weight' => '22800',
        'power' => '112/1950',
        'capacity' => '1.05',
        'background' => 'assets/img/detalle-producto/Shantui-SE220LC-banner-Vehiculo.webp',
        'image' => 'assets/img/detalle-producto/Shantui-SE220LC-banner.webp',
    ],
];
$slug = strtolower(trim((string) ($_GET['modelo'] ?? 'se220lc')));
$product = $products[$slug] ?? null;
if ($product === null) {
    http_response_code(404);
}
$pageTitle = $product ? $product['model'] . ' | Shantui' : 'Producto no encontrado | Shantui';
$pageStylesheet = 'assets/css/producto.css';
require __DIR__ . '/template-parts/head.php';
require __DIR__ . '/template-parts/header.php';
?>
<main>
    <?php if ($product): ?>
        <section id="hero-producto" class="detail-hero" aria-labelledby="detail-product-title" style="background-image: url('<?= htmlspecialchars($product['background'], ENT_QUOTES, 'UTF-8') ?>')">
            <div class="container">
                <div class="row align-items-center detail-hero__row">
                    <div class="col-12 col-md-6 detail-hero__content">
                        <p class="detail-hero__category"><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8') ?></p>
                        <h1 id="detail-product-title"><?= htmlspecialchars($product['model'], ENT_QUOTES, 'UTF-8') ?></h1>
                        <ul class="detail-hero__specs">
                            <li><strong>Peso operativo (Kg)</strong><span><?= htmlspecialchars($product['weight'], ENT_QUOTES, 'UTF-8') ?></span></li>
                            <li><strong>Potencia del motor (kW/rpm)</strong><span><?= htmlspecialchars($product['power'], ENT_QUOTES, 'UTF-8') ?></span></li>
                            <li><strong>Capacidad del cucharón (m³)</strong><span><?= htmlspecialchars($product['capacity'], ENT_QUOTES, 'UTF-8') ?></span></li>
                        </ul>
                        <div class="detail-hero__actions">
                            <a href="contacto.php"><img src="assets/img/detalle-producto/Shantui-Icono-consulta.webp" alt="" width="14" height="14">Consulta</a>
                            <button type="button" disabled title="Ficha técnica aún no disponible"><img src="assets/img/detalle-producto/Shantui-Icono-descarga.webp" alt="" width="14" height="14">Descarga de datos</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 detail-hero__media">
                        <img src="<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>" alt="Excavadora Shantui <?= htmlspecialchars($product['model'], ENT_QUOTES, 'UTF-8') ?>" width="643" height="809" fetchpriority="high">
                    </div>
                </div>
            </div>
        </section>
        <div class="detail-hero__extension" aria-hidden="true"><span></span></div>
        <section id="caracteristicas" class="product-features" aria-labelledby="product-features-title">
            <div class="container">
                <h2 id="product-features-title">Características</h2>
                <div class="product-features__content">
                    <article class="product-features__item">
                        <h3>Adaptabilidad en multicondición de trabajo.</h3>
                        <p>Piezas estructurales de diseño reforzado, alta fiabilidad. La pluma de múltiples especificaciones, palo de cucharón, cucharón y otros accesorios se pueden combinar fácilmente para adaptarse a diversas condiciones de trabajo.</p>
                    </article>
                    <article class="product-features__item">
                        <h3>Facilidad de mantenimiento y comodidad de operación.</h3>
                        <p>El capó del motor se abre hacia atrás, fácil de abrir un gran ángulo, conveniente para el mantenimiento y reparación. El elemento filtrante de combustible está situado de forma centralizado en la puerta derecha para facilitar el mantenimiento. La inyección de refrigerante y la sustitución del filtro de aire están al alcance de la mano.</p>
                    </article>
                    <article class="product-features__item">
                        <h3>Puntos de venta de la configuración.</h3>
                        <p>Motor exclusivo de gran cilindrada, emparejado con el sistema hidráulico de alta gama, ajuste preciso, control porcentual del acelerador, fácil de lograr una adaptación precisa de cada acción, control suave y más ahorro de energía.</p>
                    </article>
                </div>
            </div>
        </section>
        <section id="parametros" class="product-parameters" aria-labelledby="product-parameters-title">
            <div class="container">
                <h2 id="product-parameters-title">Parámetro</h2>
                <div class="product-parameters__table-wrap">
                    <table class="product-parameters__table">
                        <thead><tr><th scope="col">Nombre del parámetro</th><th scope="col"><?= htmlspecialchars($product['model'], ENT_QUOTES, 'UTF-8') ?></th></tr></thead>
                        <tbody>
                            <tr><th scope="row">Peso operativo (Kg)</th><td>22800</td></tr>
                            <tr><th scope="row">Potencia del motor (kW/rpm)</th><td>112/1950</td></tr>
                            <tr><th scope="row">Capacidad del cucharón (m³)</th><td>1.05</td></tr>
                            <tr><th scope="row">Dimensiones externas</th><td>9615*3180*3045</td></tr>
                            <tr><th scope="row">Fuerza de excavación del palo de cucharón (kN)</th><td>92.5</td></tr>
                            <tr><th scope="row">Fuerza de excavación del cucharón (kN)</th><td>127</td></tr>
                            <tr><th scope="row">Velocidad de rotación (r/min)</th><td>0–10.2</td></tr>
                            <tr><th scope="row">Velocidad de desplazamiento (km/h)</th><td>3.2/4.7</td></tr>
                            <tr><th scope="row">Altura de excavación máxima (mm)</th><td>10075</td></tr>
                            <tr><th scope="row">Distancia de excavación máxima (mm)</th><td>9865</td></tr>
                            <tr><th scope="row">Profundidad de excavación máxima (mm)</th><td>6515</td></tr>
                            <tr><th scope="row">Emisiones (Marcado según normas internacionales)</th><td>Eu stage II</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section id="cotiza" class="product-quote" aria-labelledby="product-quote-title">
            <div class="container">
                <div class="row justify-content-end align-items-center product-quote__row">
                    <div class="col-12 col-md-6 product-quote__content">
                        <h2 id="product-quote-title">¿Estás listo para<br> llevar tu proyecto<br> al siguiente nivel?</h2>
                        <a class="product-quote__button" href="contacto.php">Cotiza con nosotros.</a>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="container py-5">
            <h1>Producto no encontrado</h1>
            <a href="productos.php">Volver a productos</a>
        </section>
    <?php endif; ?>
</main>
<?php require __DIR__ . '/template-parts/footer.php'; ?>
