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
</main>

<?php require __DIR__ . '/template-parts/footer.php'; ?>
