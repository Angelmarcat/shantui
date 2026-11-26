<?php
$pageTitle = 'Productos | Shantui';
$pageStylesheet = 'assets/css/productos.css';
require __DIR__ . '/template-parts/head.php';
?>

<?php require __DIR__ . '/template-parts/header.php'; ?>

<main class="products-page">
    <section id="productos" class="products-hero" aria-labelledby="products-page-title">
        <div class="container">
            <div class="row align-items-center products-hero__row">
                <div class="col-12 col-lg-4 products-hero__content">
                    <h1 id="products-page-title">Productos</h1>
                </div>
                <div class="col-12 col-lg-8 products-hero__media">
                    <img
                        src="assets/img/productos/Shantui-excavadora-vehiculo-superior.webp"
                        alt="Excavadora Shantui de orugas"
                        width="1268"
                        height="597"
                        fetchpriority="high"
                    >
                </div>
            </div>
        </div>
    </section>
    <section id="categorias-productos" class="catalog-categories" aria-labelledby="catalog-categories-title">
        <div class="container">
            <?php
            $productCategories = [
                ['Excavadora', 'Excavadora'],
                ['Cargador frontal', 'Cargadorfrontal'],
                ['Bulldozer', 'bulldiozer'],
                ['Rodillo compactador', 'RodilloCompactador'],
                ['Motoniveladora', 'Motoniveladora'],
                ['Nueva energía', 'NuevaEnergia'],
                ['Máquina pavimentadora', 'MaquinaPavimentadora'],
                ['Máquina fresadora', 'maquinafresadora'],
                ['Camión minero', 'Camionminero'],
                ['Montacargas', 'montacargas'],
                ['Hormigoneras', 'hormigoneras'],
                ['Cargador frontal de orugas', 'cargadorfrontaldeorugas'],
                ['Tiendetubos', 'tiendetubos'],
                ['Repuestos', 'VehiculoRepuestos'],
                ['Máquinas recicladoras en frío', 'recicladora'],
            ];
            ?>
            <h2 id="catalog-categories-title" class="catalog-categories__title">Selecciona la unidad que estás buscando</h2>
            <div class="catalog-categories__selector">
                <button class="catalog-categories__arrow" type="button" aria-label="Ver categorías anteriores" aria-controls="catalog-categories-list" data-direction="-1">
                    <img src="assets/img/productos/Shantui-excavadora-FlechaIZquierda.webp" alt="" width="17" height="17">
                </button>
                <ul id="catalog-categories-list" class="list-unstyled catalog-categories__grid" tabindex="0" aria-label="Categorías de productos">
                <?php foreach ($productCategories as [$categoryName, $categoryIcon]): ?>
                    <li class="col-auto catalog-categories__item">
                        <img
                            src="assets/img/home/productos/Shantui-home-icono-<?= htmlspecialchars($categoryIcon, ENT_QUOTES, 'UTF-8') ?>.webp"
                            alt=""
                            width="80"
                            height="48"
                            loading="lazy"
                        >
                        <span class="catalog-categories__accent" aria-hidden="true"></span>
                        <span><?= htmlspecialchars($categoryName, ENT_QUOTES, 'UTF-8') ?></span>
                    </li>
                <?php endforeach; ?>
                </ul>
                <button class="catalog-categories__arrow" type="button" aria-label="Ver más categorías" aria-controls="catalog-categories-list" data-direction="1">
                    <img src="assets/img/productos/Shantui-excavadora-FlechaDerecha.webp" alt="" width="17" height="17">
                </button>
            </div>
        </div>
    </section>
    <section id="peso" class="product-filters" aria-labelledby="product-filters-title">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-lg-4">
                    <form class="product-filters__panel">
                        <h2 id="product-filters-title">Filtrar</h2>
                        <fieldset class="product-filters__group">
                            <legend>Peso operativo (Kg)</legend>
                            <label><input type="checkbox" name="peso[]" value="0-10000" data-filter="weight"> <span>0–9999 (2)</span></label>
                            <label><input type="checkbox" name="peso[]" value="10000-30000" data-filter="weight"> <span>10000–29999 (1)</span></label>
                            <label><input type="checkbox" name="peso[]" value="30000-40000" data-filter="weight"> <span>30000–39999 (2)</span></label>
                        </fieldset>
                        <fieldset class="product-filters__group">
                            <legend>Potencia del motor (kW)</legend>
                            <label><input type="checkbox" name="potencia[]" value="0-50" data-filter="power"> <span>0–49 (2)</span></label>
                            <label><input type="checkbox" name="potencia[]" value="50-200" data-filter="power"> <span>50–199 (1)</span></label>
                            <label><input type="checkbox" name="potencia[]" value="200-300" data-filter="power"> <span>200–299 (2)</span></label>
                        </fieldset>
                        <fieldset class="product-filters__group">
                            <legend>Capacidad del cucharón (m³)</legend>
                            <label><input type="checkbox" name="capacidad[]" value="0-0.5" data-filter="capacity"> <span>0–0.49 (2)</span></label>
                            <label><input type="checkbox" name="capacidad[]" value="0.5-1.5" data-filter="capacity"> <span>0.5–1.49 (1)</span></label>
                            <label><input type="checkbox" name="capacidad[]" value="1.5-2" data-filter="capacity"> <span>1.5–1.99 (2)</span></label>
                        </fieldset>
                        <button class="product-filters__reset" type="reset">Restablecer <img src="assets/img/renta/Shantui-Renta-FlechaDerecha.webp" alt="" width="17" height="8"></button>
                    </form>
                </div>
                <div class="col-12 col-lg-8 product-filters__list">
                    <p class="product-filters__results" role="status" aria-live="polite"></p>
                    <article class="product-card" aria-labelledby="product-se335lc-title" data-weight="34500" data-power-min="241" data-power-max="247" data-capacity="1.6">
                        <div class="product-card__content">
                            <h2 id="product-se335lc-title">SE335LC</h2>
                            <p class="product-card__description">33-ton class excavator</p>
                            <p>Peso operativo (Kg): 34500</p>
                            <p>Potencia del motor (kW/rpm): 241/2000—247/2000</p>
                            <p>Capacidad del cucharón (m³): 1.6</p>
                        </div>
                        <div class="product-card__media">
                            <img src="assets/img/productos/Shantui-excavadora-vehiculo-SE335LC.webp" alt="Excavadora Shantui SE335LC" width="243" height="354" loading="lazy">
                        </div>
                    </article>
                    <?php
                    $additionalExcavators = [
                        ['SE220LC', '22-ton class excavator', '22800', '112/1950', '1.05', 'Shantui-excavadora-vehiculo-SE220LC.webp'],
                        ['SE60', '6-ton class excavator', '5960', '36/2000~36.8/2200', '0.22', 'Shantui-excavadora-vehiculos-SE60.webp'],
                        ['SE36RC', '3.5-ton class excavator', '3800', '18.2/2200', '0.12', 'Shantui-excavadora-vehiculos-SE36RC.webp'],
                        ['SE390LCW', '38-ton class excavator', '38700', '220/2000', '1.95', 'Shantui-excavadora-vehiculo-SE390LCW.webp'],
                    ];
                    ?>
                    <?php foreach ($additionalExcavators as [$model, $description, $weight, $power, $capacity, $image]): ?>
                        <?php $powerValues = match ($model) { 'SE60' => [36, 36.8], 'SE36RC' => [18.2, 18.2], 'SE220LC' => [112, 112], 'SE390LCW' => [220, 220] }; ?>
                        <article class="product-card product-card--wide-image" aria-label="<?= htmlspecialchars($model, ENT_QUOTES, 'UTF-8') ?>" data-weight="<?= $weight ?>" data-power-min="<?= $powerValues[0] ?>" data-power-max="<?= $powerValues[1] ?>" data-capacity="<?= $capacity ?>">
                            <div class="product-card__content">
                                <h2><?php if ($model === 'SE220LC'): ?><a class="product-card__link" href="producto.php?modelo=se220lc"><?= htmlspecialchars($model, ENT_QUOTES, 'UTF-8') ?></a><?php else: ?><?= htmlspecialchars($model, ENT_QUOTES, 'UTF-8') ?><?php endif; ?></h2>
                                <p class="product-card__description"><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
                                <p>Peso operativo (Kg): <?= htmlspecialchars($weight, ENT_QUOTES, 'UTF-8') ?></p>
                                <p>Potencia del motor (kW/rpm): <?= htmlspecialchars($power, ENT_QUOTES, 'UTF-8') ?></p>
                                <p>Capacidad del cucharón (m³): <?= htmlspecialchars($capacity, ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                            <div class="product-card__media">
                                <img src="assets/img/productos/<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ?>" alt="Excavadora Shantui <?= htmlspecialchars($model, ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="assets/js/productos.js" defer></script>
<?php require __DIR__ . '/template-parts/footer.php'; ?>
