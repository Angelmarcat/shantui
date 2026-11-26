<?php
$pageTitle = 'Soluciones | Shantui';
$pageStylesheet = 'assets/css/soluciones.css';
require __DIR__ . '/template-parts/head.php';
?>

<?php require __DIR__ . '/template-parts/header.php'; ?>

<main class="solutions-page">
    <section id="solucion" class="solutions-hero" aria-labelledby="solutions-page-title">
        <div class="container solutions-hero__content">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1 id="solutions-page-title">Solución</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="solucion-mineria" class="mining-solution" aria-labelledby="mining-solution-title">
        <div class="container mining-solution__container">
            <div class="mining-solution__panel">
                <div class="mining-solution__content">
                    <h2 id="mining-solution-title">Minería</h2>

                    <div class="mining-solution__categories" aria-label="Equipos para minería">
                        <span>Camión minero</span>
                        <span>Excavadora</span>
                        <span>Cargador frontal</span>
                        <span>Bulldozer</span>
                    </div>

                    <a class="mining-solution__link" href="#" aria-label="Leer más sobre soluciones para minería">
                        <img src="assets/img/soluciones/Shantui-soluciones-icono.webp" alt="" aria-hidden="true">
                        <span>Leer más</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="solucion-construccion-y-sector-forestal" class="dual-solutions" aria-label="Soluciones para construcción y sector forestal">
        <div class="container dual-solutions__container">
            <div class="row g-0 dual-solutions__grid">
                <article class="col-12 col-lg-6 road-solution" aria-labelledby="road-solution-title">
                    <div class="road-solution__content">
                        <h2 id="road-solution-title">Construcción y mantenimiento<br>de caminos</h2>

                        <div class="dual-solutions__categories" aria-label="Equipos para construcción y mantenimiento de caminos">
                            <span>Hormigoneras</span>
                            <span>Máquina fresadora</span>
                            <span>Máquina pavimentadora</span>
                            <span>Bulldozer</span>
                            <span>Motoniveladora</span>
                            <span>Rodillo compactador</span>
                            <span>Excavadora</span>
                        </div>

                        <a class="dual-solutions__link" href="#" aria-label="Leer más sobre construcción y mantenimiento de caminos">
                            <img src="assets/img/soluciones/Shantui-soluciones-icono.webp" alt="" aria-hidden="true">
                            <span>Leer más</span>
                        </a>
                    </div>
                </article>

                <article class="col-12 col-lg-6 forest-solution" aria-labelledby="forest-solution-title">
                    <div class="forest-solution__content">
                        <h2 id="forest-solution-title">Sector forestal</h2>

                        <div class="dual-solutions__categories" aria-label="Equipos para el sector forestal">
                            <span>Motoniveladora</span>
                            <span>Bulldozer</span>
                        </div>

                        <a class="dual-solutions__link" href="#" aria-label="Leer más sobre soluciones para el sector forestal">
                            <img src="assets/img/soluciones/Shantui-soluciones-icono.webp" alt="" aria-hidden="true">
                            <span>Leer más</span>
                        </a>
                    </div>

                    <img
                        class="forest-solution__image"
                        src="assets/img/soluciones/Shantui-soluciones-sectorforestal.webp"
                        alt="Motoniveladora Shantui trabajando en un camino forestal"
                    >
                </article>
            </div>
        </div>
    </section>

    <section id="otros-servicios" class="other-services" aria-label="Otros servicios y soluciones">
        <div class="container">
            <div class="row g-4 g-xl-5">
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="service-card">
                        <img class="service-card__image" src="assets/img/soluciones/Shantui-soluciones-construccion-tierras-agricolas.webp" alt="Cargador Shantui trabajando en tierras agrícolas">
                        <div class="service-card__content">
                            <h2>Construcción de tierras agrícolas</h2>
                            <div class="service-card__categories"><span>Excavadora</span><span>Cargador frontal</span></div>
                            <a class="service-card__link" href="#" aria-label="Leer más sobre construcción de tierras agrícolas"><img src="assets/img/soluciones/Shantui-soluciones-icono.webp" alt="" aria-hidden="true"><span>Leer más</span></a>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <article class="service-card">
                        <img class="service-card__image" src="assets/img/soluciones/Shantui-soluciones-obra-conservacion-agua.webp" alt="Maquinaria Shantui en una obra de conservación de agua">
                        <div class="service-card__content">
                            <h2>Obra de conservación de agua</h2>
                            <div class="service-card__categories"><span>Cargador frontal</span><span>Excavadora</span><span>Bulldozer</span></div>
                            <a class="service-card__link" href="#" aria-label="Leer más sobre obra de conservación de agua"><img src="assets/img/soluciones/Shantui-soluciones-icono.webp" alt="" aria-hidden="true"><span>Leer más</span></a>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <article class="service-card">
                        <img class="service-card__image" src="assets/img/soluciones/Shantui-soluciones-construccion-municipal.webp" alt="Máquina fresadora Shantui en una obra municipal">
                        <div class="service-card__content">
                            <h2>Construcción municipal</h2>
                            <div class="service-card__categories"><span>Máquina fresadora</span><span>Excavadora</span><span>Bulldozer</span><span>Cargador frontal</span><span>Máquina pavimentadora</span><span>Rodillo compactador</span></div>
                            <a class="service-card__link" href="#" aria-label="Leer más sobre construcción municipal"><img src="assets/img/soluciones/Shantui-soluciones-icono.webp" alt="" aria-hidden="true"><span>Leer más</span></a>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <article class="service-card">
                        <img class="service-card__image" src="assets/img/soluciones/Shantui-soluciones-jardineria.webp" alt="Maquinaria Shantui trabajando en jardinería">
                        <div class="service-card__content">
                            <h2>Jardinería</h2>
                            <div class="service-card__categories"><span>Cargador frontal</span><span>Rodillo compactador</span><span>Excavadora</span></div>
                            <a class="service-card__link" href="#" aria-label="Leer más sobre jardinería"><img src="assets/img/soluciones/Shantui-soluciones-icono.webp" alt="" aria-hidden="true"><span>Leer más</span></a>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <article class="service-card">
                        <img class="service-card__image" src="assets/img/soluciones/Shantui-soluciones-saneamiento-ambiental.webp" alt="Excavadora Shantui en trabajos de saneamiento ambiental">
                        <div class="service-card__content">
                            <h2>Saneamiento ambiental</h2>
                            <div class="service-card__categories"><span>Cargador frontal</span><span>Excavadora</span><span>Bulldozer</span><span>Rodillo compactador</span></div>
                            <a class="service-card__link" href="#" aria-label="Leer más sobre saneamiento ambiental"><img src="assets/img/soluciones/Shantui-soluciones-icono.webp" alt="" aria-hidden="true"><span>Leer más</span></a>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <article class="service-card">
                        <img class="service-card__image" src="assets/img/soluciones/Shantui-soluciones-construccion-tuberias.webp" alt="Excavadoras Shantui instalando tuberías">
                        <div class="service-card__content">
                            <h2>Construcción de tuberías</h2>
                            <div class="service-card__categories"><span>Tiendetubos</span><span>Excavadora</span></div>
                            <a class="service-card__link" href="#" aria-label="Leer más sobre construcción de tuberías"><img src="assets/img/soluciones/Shantui-soluciones-icono.webp" alt="" aria-hidden="true"><span>Leer más</span></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/template-parts/footer.php'; ?>
