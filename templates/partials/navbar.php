<?php
// Simplified navbar without auth controls
// Control class via $navbar_class; defaults to gradient
$navClass = isset($navbar_class) && $navbar_class ? $navbar_class : 'nav-gradient';
?>
<nav class="navbar navbar-expand-md navbar-dark <?= htmlspecialchars($navClass) ?> border-0">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img id="brandLogo" src="/assets/logo.png" alt="Vodomodo"
                 style="height:<?= isset($logo_height) ? htmlspecialchars($logo_height) : '60px' ?>;"
                 class="me-2"
                 onerror="this.onerror=null;this.src='/assets/logo-sm.png'">
            <strong class="brand-text <?= isset($brand_size) ? htmlspecialchars($brand_size) : 'fs-3' ?>">Vodomodo</strong>
        </a>
        <div class="ms-auto d-flex align-items-center gap-2"></div>
    </div>
 </nav>
