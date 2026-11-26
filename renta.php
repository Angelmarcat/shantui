<?php
$pageTitle = 'Renta | Shantui';
$pageStylesheet = 'assets/css/renta.css';
require __DIR__ . '/template-parts/head.php';
?>

<?php require __DIR__ . '/template-parts/header.php'; ?>

<main class="rental-page">
    <section id="renta" class="rental-hero" aria-labelledby="rental-page-title">
        <div class="container rental-hero__content">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1 id="rental-page-title">Renta</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="destacados" class="rental-featured" aria-labelledby="featured-title">
        <div class="container">
            <h2 id="featured-title">Destacados</h2>

            <article class="row g-0 rental-featured__card">
                <div class="col-12 col-md-6 rental-featured__media">
                    <img
                        src="assets/img/renta/Shantui-Renta-GruaGroveRT-754.webp"
                        alt="Grúa todoterreno Grove RT-745 levantando una estructura de concreto"
                    >
                </div>

                <div class="col-12 col-md-6 rental-featured__column">
                    <div class="rental-featured__content">
                        <img
                            class="rental-featured__logo"
                            src="assets/img/renta/Shantui-Renta-Logo-Shantui-1.webp"
                            alt="Shantui"
                        >

                        <div class="rental-featured__body">
                            <span class="rental-featured__status">Disponible</span>
                            <h3>Grúa todoterreno<br>45 ton Grove RT-745</h3>
                            <p>Grúa todoterreno de 45 toneladas Grove RT-745 4x4x4 con sistema antibloqueo doble, indicador de momento de carga, motor diésel Cummins de 6 cilindros y potencia de 177 hp. Cuenta con pluma telescópica, bloque de gancho de 3 poleas y neumáticos 26.5-25.</p>

                            <a class="rental-featured__link" href="#" aria-label="Leer más sobre la grúa todoterreno Grove RT-745">
                                <img src="assets/img/renta/Shantui-Renta-iconodeleermas.webp" alt="" aria-hidden="true">
                                <span>Leer más</span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section id="productos-y-categorias" class="rental-catalog" aria-label="Productos y categorías de renta">
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-12 col-lg-9 order-2 order-lg-1">
                    <nav class="rental-catalog__filters" aria-label="Categorías de productos en renta">
                        <a class="is-active" href="#productos-y-categorias">Todo</a>
                        <a href="#productos-y-categorias">Shantui</a>
                        <span aria-hidden="true">|</span>
                        <a href="#productos-y-categorias">Actividades de la marca</a>
                    </nav>

                    <div class="rental-catalog__products">
                        <article class="row g-0 rental-product">
                            <div class="col-12 col-md-6 rental-product__media">
                                <img src="assets/img/renta/Shantui-Renta-GruaGroveRT-754.webp" alt="Grúa todoterreno Grove RT-745">
                            </div>
                            <div class="col-12 col-md-6 rental-product__content">
                                <img class="rental-product__logo" src="assets/img/renta/Shantui-Renta-Logo-Shantui-1.webp" alt="Shantui">
                                <span class="rental-product__status">Disponible</span>
                                <h2>Grúa todoterreno<br>45 ton Grove RT-745</h2>
                                <p>Grúa todoterreno de 45 toneladas Grove RT-745 4x4x4 con sistema antibloqueo doble, indicador de momento de carga, motor diésel Cummins de 6 cilindros y potencia de 177 hp.</p>
                                <a class="rental-product__link" href="#" aria-label="Leer más sobre la grúa Grove RT-745">
                                    <img src="assets/img/renta/Shantui-Renta-iconodeleermas.webp" alt="" aria-hidden="true">
                                    <span>Leer más</span>
                                </a>
                            </div>
                        </article>

                        <article class="row g-0 rental-product">
                            <div class="col-12 col-md-6 rental-product__media">
                                <img src="assets/img/renta/Shantui-Renta-GruaGroveRT500C.webp" alt="Grúa Grove RT500C en una zona de construcción">
                            </div>
                            <div class="col-12 col-md-6 rental-product__content">
                                <img class="rental-product__logo" src="assets/img/renta/Shantui-Renta-Logo-Shantui-1.webp" alt="Shantui">
                                <span class="rental-product__status">Disponible</span>
                                <h2>Grúa Grove RT500C</h2>
                                <p>Grúa Grove RT500C con capacidad máxima de 25 toneladas, pluma de 28 a 70 pies, pluma fija de 23 pies y motor Cummins 6BT 5.9L.</p>
                                <a class="rental-product__link" href="#" aria-label="Leer más sobre la grúa Grove RT500C">
                                    <img src="assets/img/renta/Shantui-Renta-iconodeleermas.webp" alt="" aria-hidden="true">
                                    <span>Leer más</span>
                                </a>
                            </div>
                        </article>

                        <article class="row g-0 rental-product">
                            <div class="col-12 col-md-6 rental-product__media">
                                <img src="assets/img/renta/Shantui-Renta-BobcatS650.webp" alt="Minicargador Bobcat S650 en una obra de construcción">
                            </div>
                            <div class="col-12 col-md-6 rental-product__content">
                                <img class="rental-product__logo" src="assets/img/renta/Shantui-Renta-Logo-Bobcat.webp" alt="Bobcat">
                                <span class="rental-product__status">Disponible</span>
                                <h2>Minicargador Bobcat S650</h2>
                                <p>Ofrece un rendimiento de máquina comprobado con características prácticas y un precio acorde, distribución óptima del peso para giros y derrapes, tiempos de ciclo rápidos, capacidad de servicio con acceso completo, versatilidad superior de accesorios y cabina presurizada.</p>
                                <a class="rental-product__link" href="#" aria-label="Leer más sobre el minicargador Bobcat S650">
                                    <img src="assets/img/renta/Shantui-Renta-iconodeleermas.webp" alt="" aria-hidden="true">
                                    <span>Leer más</span>
                                </a>
                            </div>
                        </article>

                        <article class="row g-0 rental-product">
                            <div class="col-12 col-md-6 rental-product__media">
                                <img src="assets/img/renta/Shantui-Renta-VibrocompactadorSD100DC.webp" alt="Vibrocompactador Volvo SD100DC trabajando sobre tierra">
                            </div>
                            <div class="col-12 col-md-6 rental-product__content">
                                <img class="rental-product__logo" src="assets/img/renta/Shantui-Renta-Logo-Volvo.webp" alt="Volvo">
                                <span class="rental-product__status">Disponible</span>
                                <h2>Vibrocompactador Volvo SD100DC</h2>
                                <p>Peso de 10 toneladas, longitud de transporte de 5.6 m, anchura de transporte de 2.31 m, altura de transporte de 3.1 m, velocidad de 12.2 km/h, frecuencia de 30 Hz y motor con rendimiento de 93.2 kW.</p>
                                <a class="rental-product__link" href="#" aria-label="Leer más sobre el vibrocompactador Volvo SD100DC">
                                    <img src="assets/img/renta/Shantui-Renta-iconodeleermas.webp" alt="" aria-hidden="true">
                                    <span>Leer más</span>
                                </a>
                            </div>
                        </article>

                        <article class="row g-0 rental-product">
                            <div class="col-12 col-md-6 rental-product__media">
                                <img src="assets/img/renta/Shantui-Renta-CompactadorCB64.webp" alt="Compactador doble Caterpillar CB64 en operación">
                            </div>
                            <div class="col-12 col-md-6 rental-product__content">
                                <img class="rental-product__logo" src="assets/img/renta/Shantui-Renta-Logo-Caterpillar.webp" alt="Caterpillar">
                                <span class="rental-product__status">Disponible</span>
                                <h2>Compactador doble Caterpillar CB64</h2>
                                <p>Peso de 10 toneladas, longitud de transporte de 5.6 m, anchura de transporte de 2.31 m, altura de transporte de 3.1 m, velocidad de 12.2 km/h, frecuencia de 30 Hz y fuerza centrífuga de 245 kN.</p>
                                <a class="rental-product__link" href="#" aria-label="Leer más sobre el compactador Caterpillar CB64">
                                    <img src="assets/img/renta/Shantui-Renta-iconodeleermas.webp" alt="" aria-hidden="true">
                                    <span>Leer más</span>
                                </a>
                            </div>
                        </article>
                    </div>

                    <p class="rental-catalog__empty" role="status" aria-live="polite" hidden>No se encontraron productos con esa búsqueda.</p>

                    <nav class="rental-pagination" aria-label="Paginación de productos">
                        <a class="rental-pagination__arrow" href="#productos-y-categorias" aria-label="Página anterior">
                            <img src="assets/img/renta/Shantui-Renta-FlechaIzquierda.webp" alt="" aria-hidden="true">
                        </a>
                        <a class="is-active" href="#productos-y-categorias" aria-current="page">1</a>
                        <a href="#productos-y-categorias">2</a>
                        <a href="#productos-y-categorias">3</a>
                        <a href="#productos-y-categorias">4</a>
                        <a href="#productos-y-categorias">5</a>
                        <a href="#productos-y-categorias">6</a>
                        <a class="rental-pagination__arrow" href="#productos-y-categorias" aria-label="Página siguiente">
                            <img src="assets/img/renta/Shantui-Renta-FlechaDerecha.webp" alt="" aria-hidden="true">
                        </a>
                    </nav>
                </div>

                <aside class="col-12 col-lg-3 order-1 order-lg-2 rental-catalog__sidebar" aria-label="Herramientas del catálogo">
                    <form class="rental-search" role="search" action="#productos-y-categorias" method="get">
                        <label class="visually-hidden" for="rental-search-input">Buscar productos en renta</label>
                        <input id="rental-search-input" name="buscar" type="search" placeholder="Introducir palabra clave">
                        <button type="submit" aria-label="Buscar">
                            <img src="assets/img/renta/Shantui-Renta-icono-busqueda.webp" alt="" aria-hidden="true">
                        </button>
                    </form>

                    <section class="rental-sidebar-box" aria-labelledby="keywords-title">
                        <h2 id="keywords-title">Recomendación de palabras clave</h2>
                        <div class="rental-sidebar-box__body rental-keywords">
                            <a href="#productos-y-categorias">Shantui</a>
                            <a href="#productos-y-categorias">Excavadora</a>
                            <a href="#productos-y-categorias">Topadora</a>
                            <a href="#productos-y-categorias">Rodillo compactador</a>
                            <a href="#productos-y-categorias">Motoniveladora</a>
                            <a href="#productos-y-categorias">Nueva energía</a>
                        </div>
                    </section>

                    <section class="rental-sidebar-box" aria-labelledby="subscription-title">
                        <h2 id="subscription-title">Suscripción a Rentas</h2>
                        <div class="rental-sidebar-box__body">
                            <p>Conoce disponibilidad de nuestras unidades registrando tu correo.</p>
                            <form class="rental-subscription" action="#productos-y-categorias" method="post">
                                <label class="visually-hidden" for="rental-subscription-email">Correo electrónico</label>
                                <input id="rental-subscription-email" name="correo" type="email" placeholder="Introduzca su correo electrónico" required>
                                <button type="submit">Suscribirse</button>
                            </form>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchForm = document.querySelector('.rental-search');
        const searchInput = document.querySelector('#rental-search-input');
        const products = Array.from(document.querySelectorAll('.rental-product'));
        const emptyMessage = document.querySelector('.rental-catalog__empty');
        const pagination = document.querySelector('.rental-pagination');
        const keywordLinks = document.querySelectorAll('.rental-keywords a');

        if (!searchForm || !searchInput || !products.length || !emptyMessage || !pagination) {
            return;
        }

        function normalizeText(value) {
            return value
                .toLocaleLowerCase('es')
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .trim();
        }

        function searchableText(product) {
            const imageDescriptions = Array.from(product.querySelectorAll('img[alt]'))
                .map(function (image) { return image.alt; })
                .join(' ');

            return normalizeText(product.textContent + ' ' + imageDescriptions);
        }

        function filterProducts() {
            const query = normalizeText(searchInput.value);
            let visibleProducts = 0;

            products.forEach(function (product) {
                const isVisible = !query || searchableText(product).includes(query);
                product.hidden = !isVisible;
                visibleProducts += isVisible ? 1 : 0;
            });

            emptyMessage.hidden = visibleProducts !== 0;
            emptyMessage.textContent = visibleProducts === 0
                ? 'No se encontraron productos con esa búsqueda.'
                : visibleProducts + (visibleProducts === 1 ? ' producto encontrado.' : ' productos encontrados.');
            pagination.hidden = Boolean(query);
        }

        searchForm.addEventListener('submit', function (event) {
            event.preventDefault();
            filterProducts();
        });

        searchInput.addEventListener('input', function () {
            if (!searchInput.value.trim()) {
                filterProducts();
            }
        });

        keywordLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                searchInput.value = link.textContent.trim();
                filterProducts();
            });
        });
    });
</script>

<?php require __DIR__ . '/template-parts/footer.php'; ?>
