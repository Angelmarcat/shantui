<header class="site-header">
    <div class="container">
        <div class="site-header__inner">
            <div class="site-header__branding">
                <a class="site-header__logo" href="index.php" aria-label="Shantui - Inicio">
                    <img src="assets/img/navbar/Shantui-Menu-logo-Shantui.webp" alt="Shantui">
                </a>
                <span class="site-header__logo-separator" aria-hidden="true">|</span>
                <img class="site-header__logo-gip" src="assets/img/navbar/Shantui-Menu-logo-GIP.webp" alt="GIP">
            </div>
            <button class="navbar-toggler site-header__toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Abrir menú de navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php require __DIR__ . '/navbar.php'; ?>
            <div class="site-header__actions d-flex align-items-center gap-2">
                <span class="site-header__action-separator" aria-hidden="true">|</span>
                <button class="btn btn-outline-dark border-0 navbar-icon-btn" type="button" aria-label="Buscar" title="Buscar">
                    <img src="assets/img/navbar/Shantui-Menu-lupa.webp" alt="" width="12" height="13" aria-hidden="true">
                </button>
                <span class="site-header__action-separator" aria-hidden="true">|</span>
                <button class="btn btn-outline-dark border-0 navbar-icon-btn" type="button" aria-label="Seleccionar idioma" title="Seleccionar idioma">
                    <img src="assets/img/navbar/Shantui-Menu-planeta.webp" alt="" width="14" height="15" aria-hidden="true">
                </button>
            </div>
        </div>
    </div>
</header>
