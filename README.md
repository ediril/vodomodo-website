Vodomodo Website (PHP 8) — Frontpage Only

This is a minimal PHP-based site that implements only the Vodomodo frontpage, mirroring the Python app’s Jinja2 template at `vodomodo-app/static/templates/home.html`.

Structure
- `index.php` — Single front controller (router) that renders pages using templates.
- `templates/`
  - `base.php` — Base layout and includes.
  - `partials/` — `head.php`, `navbar.php`, `footer.php`, `scripts.php`.
  - `pages/` — `home.php`, `blog.php`, `terms.php`, `privacy.php`.
+- `assets/` — Static assets (images) referenced by the pages.

Assets
The required images are already copied into `vodomodo-website/assets/`. If you update them, keep the same filenames:
- `assets/logo.png`
- `assets/logo-sm.png`
- `assets/header.png`

Run Locally
- From `vodomodo-website/` run: `./run_server.sh 8000` (or any port)
- Then open http://localhost:8000
- Clean URLs like `/terms` work locally via `index.php` acting as the router.

Notes
- Auth/UI logic and login/signup buttons have been removed for a static frontpage.
- Apache: `.htaccess` rewrites all non-file requests to `index.php`.
