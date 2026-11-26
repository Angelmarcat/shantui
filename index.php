<?php
$pageTitle = 'Inicio | Shantui';
$pageStylesheet = 'assets/css/home.css';
require __DIR__ . '/template-parts/head.php';
?>

<?php require __DIR__ . '/template-parts/header.php'; ?>

<main class="home-page">
    <!-- section hero start -->
    <section id="inicio" class="hero-section">
        <div class="container hero-section__content">
            <div class="row">
                <div class="col-12 col-md-9 offset-0 offset-md-2 ">
                    <h1>LET'S MAKE <br />CONSTRUCTION EASIER</h1>
                </div>
            </div>
        </div>

        <nav class="hero-services" aria-label="Accesos rápidos de Shantui">
            <div class="container">
                <div class="hero-services__panel">
                    <a class="hero-services__link" href="productos.php">
                        <img
                            class="hero-services__icon"
                            src="assets/img/home/iconos/Shantui-home-icono-telefono.webp"
                            alt=""
                            aria-hidden="true"
                        >
                        <span>Gama completa de productos Shantui</span>
                    </a>
                    <a class="hero-services__link" href="soluciones.php">
                        <img
                            class="hero-services__icon"
                            src="assets/img/home/iconos/Shantui-home-icono-Vehiculo.webp"
                            alt=""
                            aria-hidden="true"
                        >
                        <span>Shantui presta servicios</span>
                    </a>
                    <a class="hero-services__link" href="contacto.php">
                        <img
                            class="hero-services__icon"
                            src="assets/img/home/iconos/Shantui-home-icono-audifonos.webp"
                            alt=""
                            aria-hidden="true"
                        >
                        <span>Contacto Shantui</span>
                    </a>
                </div>
            </div>
        </nav>
    </section>
    <!-- section hero end -->

    <!-- section product categories start -->
    <section id="productos-shantui" class="product-categories" aria-labelledby="product-categories-title">
        <div class="container">
            <h2 id="product-categories-title" class="visually-hidden">Categorías de productos Shantui</h2>
            <div class="row g-0 justify-content-between product-categories__grid">
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-Excavadora.webp" alt="" width="80" height="48">
                        <span>Excavadora</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-Cargadorfrontal.webp" alt="" width="80" height="48">
                        <span>Cargador frontal</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-bulldiozer.webp" alt="" width="80" height="48">
                        <span>Bulldozer</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-RodilloCompactador.webp" alt="" width="80" height="48">
                        <span>Rodillo compactador</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-Motoniveladora.webp" alt="" width="80" height="48">
                        <span>Motoniveladora</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-NuevaEnergia.webp" alt="" width="80" height="48">
                        <span>Nueva energía</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-MaquinaPavimentadora.webp" alt="" width="80" height="48">
                        <span>Máquina pavimentadora</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-maquinafresadora.webp" alt="" width="80" height="48">
                        <span>Máquina fresadora</span>
                    </div>
                </div>

                <div class="col-12 product-categories__divider" aria-hidden="true"></div>

                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-Camionminero.webp" alt="" width="80" height="48" loading="lazy">
                        <span>Camión minero</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-montacargas.webp" alt="" width="80" height="48" loading="lazy">
                        <span>Montacargas</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-hormigoneras.webp" alt="" width="80" height="48" loading="lazy">
                        <span>Hormigoneras</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-cargadorfrontaldeorugas.webp" alt="" width="80" height="48" loading="lazy">
                        <span>Cargador frontal<br>de orugas</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-tiendetubos.webp" alt="" width="80" height="48" loading="lazy">
                        <span>Tiendetubos</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-VehiculoRepuestos.webp" alt="" width="80" height="48" loading="lazy">
                        <span>Repuestos</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item">
                    <div class="product-categories__card">
                        <img src="assets/img/home/productos/Shantui-home-icono-recicladora.webp" alt="" width="80" height="48" loading="lazy">
                        <span>Máquinas recicladoras<br>en frío</span>
                    </div>
                </div>
                <div class="col-auto product-categories__item product-categories__item--spacer" aria-hidden="true">
                    <div class="product-categories__card"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section product categories end -->

    <!-- section mining truck start -->
    <section id="camion-minero" class="mining-truck" aria-labelledby="mining-truck-title">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <article class="mining-truck__card">
                        <h2 id="mining-truck-title" class="mining-truck__title">
                            CAMIÓN MINERO
                            <span><span class="mining-truck__model-prefix">SK95A-</span>C6</span>
                        </h2>
                        <dl class="mining-truck__specifications">
                            <div class="mining-truck__specification">
                                <dt>Modelo de motor</dt>
                                <dd>Weichai WP13G530E310</dd>
                            </div>
                            <div class="mining-truck__specification">
                                <dt>Capacidad de carga</dt>
                                <dd>95 T</dd>
                            </div>
                            <div class="mining-truck__specification">
                                <dt>Tanque de combustible</dt>
                                <dd>600 Lt</dd>
                            </div>
                        </dl>
                        <a class="mining-truck__more" href="productos.php" aria-label="Leer más sobre el camión minero SK95A-C6">
                            <span class="mining-truck__more-icon" aria-hidden="true">
                                <img src="assets/img/home/iconos/Shantui-home-iconoleermas.webp" alt="" width="50" height="50">
                            </span>
                            <span class="mining-truck__more-label">LEER MÁS</span>
                        </a>
                    </article>
                </div>
            </div>
        </div>
        <div class="mining-truck__visual">
            <img
                class="mining-truck__background"
                src="assets/img/home/camion/Shantui-home-foto-fondo.webp"
                alt=""
                aria-hidden="true"
                loading="lazy"
                decoding="async"
            >
            <img
                class="mining-truck__vehicle"
                src="assets/img/home/camion/Shantui-home-foto,camion.webp"
                alt="Camión minero Shantui SK95A-C6"
                width="1147"
                height="847"
                loading="lazy"
                decoding="async"
            >
        </div>
    </section>
    <!-- section mining truck end -->

    <!-- section construction solutions start -->
    <section id="facilitemos-la-construccion" class="construction-solutions" aria-labelledby="construction-solutions-title">
        <div class="container">
            <header class="construction-solutions__header">
                <h2 id="construction-solutions-title">FACILITEMOS LA CONSTRUCCIÓN</h2>
                <p>Le proporcionamos un modelo de beneficios disruptivo, que incluye una cartera de productos y un servicio de apoyo óptimos y las mejores soluciones para la construcción.</p>
            </header>

            <div class="row construction-solutions__columns">
                <div class="col-12 col-md-4">
                    <ul class="construction-solutions__list">
                        <li class="construction-solutions__item">
                            <span>Minería</span>
                            <img src="assets/img/home/facilitemos/Shantui-home-icono-Mineria.webp" alt="" width="42" height="36">
                        </li>
                        <li class="construction-solutions__item">
                            <span>Construcción y mantenimiento de caminos</span>
                            <img src="assets/img/home/facilitemos/Shantui-home-icono-construccion.webp" alt="" width="42" height="36">
                        </li>
                        <li class="construction-solutions__item">
                            <span>Sector forestal</span>
                            <img src="assets/img/home/facilitemos/Shantui-home-icono-Vehiculo-sectorforestal.webp" alt="" width="42" height="36">
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4">
                    <ul class="construction-solutions__list">
                        <li class="construction-solutions__item">
                            <span>Construcción de tierras agrícolas</span>
                            <img src="assets/img/home/facilitemos/Shantui-home-icono-Tierrasagricolas.webp" alt="" width="42" height="36">
                        </li>
                        <li class="construction-solutions__item">
                            <span>Obra de conservación de agua</span>
                            <img src="assets/img/home/facilitemos/Shantui-home-icono-ObraDeagua.webp" alt="" width="42" height="36">
                        </li>
                        <li class="construction-solutions__item">
                            <span>Construcción municipal</span>
                            <img src="assets/img/home/facilitemos/Shantui-home-icono-municipal.webp" alt="" width="42" height="36">
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4">
                    <ul class="construction-solutions__list">
                        <li class="construction-solutions__item">
                            <span>Jardinería</span>
                            <img src="assets/img/home/facilitemos/Shantui-home-icono-jardineria.webp" alt="" width="42" height="36">
                        </li>
                        <li class="construction-solutions__item">
                            <span>Saneamiento ambiental</span>
                            <img src="assets/img/home/facilitemos/Shantui-home-icono-Vehiculosaneamiento.webp" alt="" width="42" height="36">
                        </li>
                        <li class="construction-solutions__item">
                            <span>Construcción de tuberías</span>
                            <img src="assets/img/home/facilitemos/Shantui-home-icono-Leermas.webp" alt="" width="42" height="36">
                        </li>
                    </ul>
                </div>
            </div>

            <div class="construction-solutions__action">
                <a href="soluciones.php" class="construction-solutions__more">
                    <img src="assets/img/home/iconos/Shantui-home-iconoleermas.webp" alt="" width="74" height="74" loading="lazy">
                    <span>LEER MÁS</span>
                </a>
            </div>
        </div>
    </section>
    <!-- section construction solutions end -->

    <!-- section about Shantui start -->
    <section id="acerca-de-shantui" class="about-shantui" aria-labelledby="about-shantui-title">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-6">
                    <div class="about-shantui__content">
                        <h2 id="about-shantui-title">Acerca de Shantui</h2>
                        <p class="about-shantui__description">Shantui se fundó en 1952. Podemos ofrecerle una gama completa de soluciones de productos de maquinaria de construcción, más de 10 tipos de máquinas y piezas de repuesto.</p>

                        <div class="about-shantui__stats" aria-label="Presencia global de Shantui">
                            <div class="about-shantui__stat">
                                <strong>170</strong>
                                <span>Países y regiones</span>
                            </div>
                            <div class="about-shantui__stat">
                                <strong>120</strong>
                                <span>Distribuidores</span>
                            </div>
                            <div class="about-shantui__stat">
                                <strong>Top 50</strong>
                                <span>Fabricante mundial<br>de maquinaria de<br>construcción</span>
                            </div>
                        </div>

                        <a class="about-shantui__more" href="nosotros.php">
                            <img src="assets/img/home/iconos/Shantui-home-iconoleermas.webp" alt="" width="60" height="60">
                            <span>LEER MÁS</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section about Shantui end -->
</main>

<?php require __DIR__ . '/template-parts/footer.php'; ?>
