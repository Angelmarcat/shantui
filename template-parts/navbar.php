<?php
$currentPage = basename($_SERVER['SCRIPT_NAME']);
$navItems = [
    ['label' => 'Nosotros', 'href' => 'nosotros.php'],
    ['label' => 'Productos', 'href' => 'productos.php'],
    ['label' => 'Soluciones', 'href' => 'soluciones.php'],
    ['label' => 'Renta', 'href' => 'renta.php'],
    ['label' => 'Contacto', 'href' => 'contacto.php'],
];
?>
<nav class="navbar navbar-expand-lg site-navbar" aria-label="Navegación principal">
    <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav">
            <?php foreach ($navItems as $item): ?>
                <?php $isActive = $currentPage === $item['href']; ?>
                <li class="nav-item">
                    <a class="nav-link<?= $isActive ? ' active' : '' ?>" href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"<?= $isActive ? ' aria-current="page"' : '' ?>>
                        <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>