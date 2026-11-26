<?php
$pageTitle = 'Contacto | Shantui';
$pageStylesheet = 'assets/css/contacto.css';
require __DIR__ . '/template-parts/head.php';
?>

<?php require __DIR__ . '/template-parts/header.php'; ?>

<main class="contact-page">
    <section id="contacto" class="contact-hero" aria-labelledby="contact-page-title">
        <div class="container contact-hero__content">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1 id="contact-page-title">Contacto</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="rellena-el-formulario" class="contact-form-section" aria-labelledby="contact-form-title">
        <div class="container">
            <h2 id="contact-form-title">Rellena el formulario:</h2>

            <div class="row g-5 align-items-center">
                <div class="col-12 col-lg-6">
                    <form class="contact-form" action="#rellena-el-formulario" method="post">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <label for="contact-name">Nombre</label>
                                <input id="contact-name" name="nombre" type="text" autocomplete="given-name" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="contact-lastname">Apellidos</label>
                                <input id="contact-lastname" name="apellidos" type="text" autocomplete="family-name" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="contact-email">Correo electrónico</label>
                                <input id="contact-email" name="correo" type="email" autocomplete="email" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="contact-phone">Teléfono</label>
                                <input id="contact-phone" name="telefono" type="tel" autocomplete="tel" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="contact-company">Nombre de tu empresa</label>
                                <input id="contact-company" name="empresa" type="text" autocomplete="organization">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="contact-category">Selecciona la categoría de unidades</label>
                                <select id="contact-category" name="categoria" required>
                                    <option value="" selected disabled>Selecciona una opción</option>
                                    <option value="excavadoras">Excavadoras</option>
                                    <option value="cargadores">Cargadores</option>
                                    <option value="topadoras">Topadoras</option>
                                    <option value="maquinaria-vial">Maquinaria vial</option>
                                    <option value="otra">Otra categoría</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="contact-message">Mensaje</label>
                                <textarea id="contact-message" name="mensaje" rows="6" required></textarea>
                            </div>
                            <fieldset class="col-12 contact-form__preferences">
                                <legend>Medio de contacto preferido</legend>
                                <label><input type="checkbox" name="medio[]" value="whatsapp"> WhatsApp</label>
                                <label><input type="checkbox" name="medio[]" value="llamada"> Llamada telefónica</label>
                                <label><input type="checkbox" name="medio[]" value="correo"> Correo electrónico</label>
                            </fieldset>
                            <div class="col-12 contact-form__actions">
                                <button type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="contact-details">
                        <img class="contact-details__vehicle" src="assets/img/contacto/Shantui-Contacto-Vehiculo.webp" alt="Cargador frontal Shantui L68O-X5">

                        <div class="contact-details__body">
                            <h3>Contáctanos a:</h3>
                            <ul class="contact-details__list">
                                <li>
                                    <img src="assets/img/contacto/Shantui-Contacto-icono-whatsapp.webp" alt="" aria-hidden="true">
                                    <a href="tel:+522223833528">222 383 3528</a>
                                </li>
                                <li>
                                    <img src="assets/img/contacto/Shantui-Contacto-icono-mail.webp" alt="" aria-hidden="true">
                                    <a href="mailto:venta@shantuipuebla.com">venta@shantuipuebla.com</a>
                                </li>
                                <li>
                                    <img src="assets/img/contacto/Shantui-Contacto-icono-facebook.webp" alt="" aria-hidden="true">
                                    <span>Shantui Puebla</span>
                                </li>
                                <li>
                                    <img src="assets/img/contacto/Shantui-Contacto-icono-Instagram.webp" alt="" aria-hidden="true">
                                    <span>@ShantuiPuebla</span>
                                </li>
                                <li>
                                    <img src="assets/img/contacto/Shantui-Contacto-icono-linkedin.webp" alt="" aria-hidden="true">
                                    <span>Shantui Puebla</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nuestras-calificaciones" class="ratings-section" aria-labelledby="ratings-title">
        <div class="container">
            <h2 id="ratings-title">Nuestras calificaciones</h2>
        </div>

        <div class="ratings-track" tabindex="0" aria-label="Reseñas de clientes. Desplázate horizontalmente para ver más.">
            <figure class="ratings-card">
                <img
                    src="assets/img/contacto/Shantui-Contacto-Recomendaciondegoogle-3.webp"
                    alt="Reseña de cinco estrellas de Evencio Ortega: Muy buena la atención y también te explican a detalle cómo operar correctamente tus herramientas de corte."
                    draggable="false"
                >
            </figure>
            <figure class="ratings-card ratings-card--featured" data-featured-rating>
                <img
                    src="assets/img/contacto/Shantui-Contacto-Recomendaciondegoogle-1.webp"
                    alt="Reseña de cinco estrellas de Salomón Sánchez: Maquinaria mexicana de buena calidad a un precio justo. Excelente atención de los ingenieros."
                    draggable="false"
                >
            </figure>
            <figure class="ratings-card">
                <img
                    src="assets/img/contacto/Shantui-Contacto-Recomendaciondegoogle-2.webp"
                    alt="Reseña de cinco estrellas de Verónica Ávila: Una fábrica de primera, buena atención por parte de los dueños y personal."
                    draggable="false"
                >
            </figure>
        </div>
    </section>

    <section id="visita-nuestro-showroom" class="showroom-section" aria-labelledby="showroom-title">
        <div class="container">
            <h2 id="showroom-title">Visita nuestro Showroom</h2>

            <div class="row showroom-section__details">
                <div class="col-12 col-md-6">
                    <div class="showroom-section__item">
                        <strong>Dirección:</strong>
                        <address>San Antonio Cacalotepec, San Bernardino Tlaxcalancingo, Puebla, C. P. 72820</address>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="showroom-section__item">
                        <strong>Horario:</strong>
                        <p>Lunes a Viernes de 8:00 am - 6:00pm</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mapa-showroom" class="google-map" aria-label="Ubicación del showroom Shantui Puebla">
        <iframe
            src="https://www.google.com/maps?q=San%20Antonio%20Cacalotepec%2C%20San%20Bernardino%20Tlaxcalancingo%2C%20Puebla%2C%20C.P.%2072820%2C%20M%C3%A9xico&amp;output=embed"
            title="Mapa de ubicación del showroom Shantui Puebla"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>

<script>
    window.addEventListener('load', function () {
        const track = document.querySelector('.ratings-track');
        const featuredRating = document.querySelector('[data-featured-rating]');

        if (!track || !featuredRating) {
            return;
        }

        const originalCards = Array.from(track.querySelectorAll('.ratings-card'));

        originalCards.forEach(function (card, index) {
            card.dataset.ratingIndex = index;
        });

        function createCloneGroup() {
            const fragment = document.createDocumentFragment();

            originalCards.forEach(function (card) {
                const clone = card.cloneNode(true);
                clone.removeAttribute('data-featured-rating');
                clone.dataset.ratingClone = 'true';
                clone.setAttribute('aria-hidden', 'true');

                const image = clone.querySelector('img');
                if (image) {
                    image.alt = '';
                }

                fragment.appendChild(clone);
            });

            return fragment;
        }

        track.prepend(createCloneGroup());
        track.append(createCloneGroup());

        const cards = Array.from(track.querySelectorAll('.ratings-card'));
        let isDragging = false;
        let isLoopJump = false;
        let dragStartX = 0;
        let dragStartScroll = 0;
        let dragStartCard = null;
        let scrollTimer;
        const dragThreshold = 12;

        function centeredPosition(card) {
            return card.offsetLeft - ((track.clientWidth - card.offsetWidth) / 2);
        }

        function nearestCard() {
            const trackCenter = track.scrollLeft + (track.clientWidth / 2);

            return cards.reduce(function (closest, card) {
                const cardCenter = card.offsetLeft + (card.offsetWidth / 2);
                const closestCenter = closest.offsetLeft + (closest.offsetWidth / 2);

                return Math.abs(cardCenter - trackCenter) < Math.abs(closestCenter - trackCenter)
                    ? card
                    : closest;
            });
        }

        function normalizeLoopPosition(card) {
            if (!card.dataset.ratingClone) {
                return card;
            }

            const originalCard = originalCards[Number(card.dataset.ratingIndex)];
            isLoopJump = true;
            track.classList.add('is-loop-jumping');
            track.scrollLeft = centeredPosition(originalCard);
            window.requestAnimationFrame(function () {
                window.requestAnimationFrame(function () {
                    track.classList.remove('is-loop-jumping');
                    isLoopJump = false;
                });
            });

            return originalCard;
        }

        function centerNearestCard(behavior = 'smooth') {
            const closestCard = nearestCard();
            const target = centeredPosition(closestCard);

            if (Math.abs(track.scrollLeft - target) > 1) {
                track.scrollTo({ left: target, behavior: behavior });
                return;
            }

            normalizeLoopPosition(closestCard);
        }

        track.scrollLeft = centeredPosition(featuredRating);

        track.addEventListener('pointerdown', function (event) {
            if (event.pointerType !== 'mouse' || event.button !== 0) {
                return;
            }

            isDragging = true;
            dragStartX = event.clientX;
            dragStartScroll = track.scrollLeft;
            dragStartCard = nearestCard();
            track.classList.add('is-dragging');
            track.setPointerCapture(event.pointerId);
        });

        track.addEventListener('pointermove', function (event) {
            if (!isDragging) {
                return;
            }

            event.preventDefault();
            track.scrollLeft = dragStartScroll - (event.clientX - dragStartX);
        });

        function finishDragging(event) {
            if (!isDragging) {
                return;
            }

            isDragging = false;
            track.classList.remove('is-dragging');

            if (track.hasPointerCapture(event.pointerId)) {
                track.releasePointerCapture(event.pointerId);
            }

            const dragDistance = event.clientX - dragStartX;
            const startIndex = cards.indexOf(dragStartCard);
            let targetCard = dragStartCard;

            if (Math.abs(dragDistance) >= dragThreshold) {
                targetCard = dragDistance < 0
                    ? cards[Math.min(startIndex + 1, cards.length - 1)]
                    : cards[Math.max(startIndex - 1, 0)];
            }

            track.scrollTo({ left: centeredPosition(targetCard), behavior: 'smooth' });
            dragStartCard = null;
        }

        track.addEventListener('pointerup', finishDragging);
        track.addEventListener('pointercancel', finishDragging);

        track.addEventListener('scroll', function () {
            if (isDragging || isLoopJump) {
                return;
            }

            window.clearTimeout(scrollTimer);
            scrollTimer = window.setTimeout(function () {
                centerNearestCard();
            }, 140);
        }, { passive: true });
    });
</script>

<?php require __DIR__ . '/template-parts/footer.php'; ?>
