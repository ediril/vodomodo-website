<?php
// index.php acts as front controller (router) and includes templates under templates/pages/

// Built-in server routing for clean URLs
if (PHP_SAPI === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
    $filePath = __DIR__ . $path;
    if (is_file($filePath)) {
        return false; // static assets
    }
}

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
switch ($path) {
    case '/':
    case '':
    case '/index':
        require __DIR__ . '/templates/pages/home.php';
        break;
    case '/terms':
        require __DIR__ . '/templates/pages/terms.php';
        break;
    case '/privacy':
        require __DIR__ . '/templates/pages/privacy.php';
        break;
    case '/blog':
        require __DIR__ . '/templates/pages/blog.php';
        break;
    default:
        http_response_code(404);
        echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>404</title></head><body style='font-family:Inter,system-ui,sans-serif;padding:2rem;'><h1>404 Not Found</h1><p>No route for <code>" . htmlspecialchars($path, ENT_QUOTES, 'UTF-8') . "</code></p><p><a href='/'>Go home</a></p></body></html>";
}
