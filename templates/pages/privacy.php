<?php
$title = 'Vodomodo — Privacy Policy';
$navbar_class = 'nav-gradient';
ob_start();
?>
<div class="container py-5">
    <h1 class="h3 mb-3">Privacy Policy</h1>
    <p>Our Privacy Policy will be published here soon.</p>
    <a href="/" class="btn btn-secondary btn-sm">Back</a>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/../base.php';

