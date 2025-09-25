<?php
$title = 'Vodomodo — Terms of Service';
$navbar_class = 'nav-gradient';
ob_start();
?>
<div class="container py-5">
    <h1 class="h3 mb-3">Terms of Service</h1>
    <p>Our Terms of Service will be published here soon.</p>
    <a href="/" class="btn btn-secondary btn-sm">Back</a>
    </div>
<?php
$content = ob_get_clean();
require __DIR__ . '/../base.php';

