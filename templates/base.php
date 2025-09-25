<?php
// Base layout: expects variables
// - $title (string)
// - $page_styles (string, optional)
// - $page_scripts (string, optional)
// - $body_classes (string, optional)
// - $navbar_class (string, optional)
// - $content (string) — required
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__ . '/partials/head.php'; ?>
    <title><?= isset($title) ? htmlspecialchars($title) : 'Vodomodo' ?></title>
    <?php if (!empty($page_styles)) { echo $page_styles; } ?>
</head>
<body<?= !empty($body_classes) ? ' class="' . htmlspecialchars($body_classes) . '"' : '' ?>>
    <?php include __DIR__ . '/partials/navbar.php'; ?>

    <?= $content ?? '' ?>

    <?php include __DIR__ . '/partials/footer.php'; ?>
    <?php include __DIR__ . '/partials/scripts.php'; ?>
    <?php if (!empty($page_scripts)) { echo $page_scripts; } ?>
</body>
</html>

