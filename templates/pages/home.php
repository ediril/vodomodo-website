<?php
$title = 'Vodomodo';
$navbar_class = 'overlay';
$page_styles = <<<HTML
<style>
    body { background: #0b0d12; scroll-behavior: smooth; }
    .navbar.overlay { position: absolute; top: 0; left: 0; right: 0; z-index: 10; background: transparent !important; }
    .masthead { position: relative; color: #fff; background: linear-gradient(135deg, rgba(13,110,253,0.9) 0%, rgba(111,66,193,0.9) 45%, rgba(32,201,151,0.9) 100%); padding-top: 4.5rem; }
    .masthead::before { content: ''; position: absolute; inset: 0; background: url('/assets/header.png') center/cover no-repeat; opacity: .22; }
    .masthead-overlay { position: relative; }
    .hero-title { text-shadow: 0 6px 18px rgba(0,0,0,.35), 0 2px 6px rgba(0,0,0,.25); }
    .hero-sub { text-shadow: 0 2px 8px rgba(0,0,0,.3); opacity:.95; }
    .feature-icon { width: 44px; height: 44px; border-radius: 10px; display: inline-flex; align-items:center; justify-content:center; }
    .section-benefits { background: #2a2034; }
    .benefit-card { background: rgb(239, 230, 255); color: #2b1747; border: 1px solid rgba(43,23,71,0.12); box-shadow: 0 6px 18px rgba(0,0,0,.12); }
    .benefit-card code { color: #7a3cff; }
    .benefit-card{ transition: transform .15s ease, box-shadow .15s ease; }
    .benefit-card:hover{ transform: translateY(-2px); box-shadow: 0 12px 26px rgba(0,0,0,.18); }
    footer .brand { opacity: .85; }
    /* Waitlist section: match hero gradient */
    .waitlist { position: relative; color: #fff; background: linear-gradient(135deg, rgba(13,110,253,0.9) 0%, rgba(111,66,193,0.9) 45%, rgba(32,201,151,0.9) 100%); }
    .waitlist::before { content: ''; position: absolute; inset: 0; background: url('/assets/header.png') center/cover no-repeat; opacity: .18; }
    .waitlist-overlay { position: relative; }
    .waitlist .form-control { border: 0; box-shadow: 0 6px 18px rgba(0,0,0,.18); }
    .waitlist .btn { box-shadow: 0 8px 22px rgba(0,0,0,.22); }
</style>
HTML;

ob_start();
?>
<header class="masthead pt-5">
    <div class="masthead-overlay py-4">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold hero-title">Edit videos with text commands</h1>
                    <p class="lead mb-4 hero-sub">Cut scenes, add captions, add transitions and more using simple text commands.<br>Render securely in your browser.</p>
                    <div class="d-flex gap-2 pt-5 justify-content-center">
                        <a href="#features" class="btn btn-outline-light btn-lg">Learn more</a>
                        <a id="heroCta" href="#waitlist" class="btn btn-warning btn-lg">Join Waitlist</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>

<section class="section-benefits pt-5 pb-4" id="features">
    <div class="container">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="p-4 benefit-card rounded h-100">
                <div class="feature-icon bg-primary text-white mb-3">✍️</div>
                <h5 class="fw-bold">Text-first workflow</h5>
                <p class="mb-0">Describe your edits with <code>cut</code>, <code>subtitle</code>, <code>transition</code>. Structured, repeatable, and versionable.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 benefit-card rounded h-100">
                <div class="feature-icon bg-success text-white mb-3">⚡</div>
                <h5 class="fw-bold">Local rendering</h5>
                <p class="mb-0">Client-side FFmpeg renders efficiently — fast iterations and reliable results.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 benefit-card rounded h-100">
                <div class="feature-icon bg-secondary text-white mb-3">📁</div>
                <h5 class="fw-bold">Projects & sharing</h5>
                <p class="mb-0">Login with Google/Facebook to save projects, re-render, and save outputs.</p>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="section-benefits pt-4 pb-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 benefit-card rounded h-100">
                    <div class="feature-icon bg-warning text-dark mb-3">✅</div>
                    <h5 class="fw-bold">What you can do</h5>
                    <ul class="mb-3 ps-3">
                        <li>Cut scenes and stitch with fades</li>
                        <li>Add styled subtitles with positioning</li>
                        <li>Preview timeline; click to seek</li>
                        <li>Zoom/pan for precision</li>
                        <li>Render in‑browser; download MP4</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 benefit-card rounded h-100">
                    <div class="feature-icon bg-info text-white mb-3">🧭</div>
                    <h5 class="fw-bold">Precise timeline</h5>
                    <p class="mb-2">Frame & second stepping, zoom and pan, and visual cut/transition bands for accurate edits.</p>
                    <p class="mb-0"><code>@time</code> <code>@frame</code> shorthand and source‑based ranges keep commands simple.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 benefit-card rounded h-100">
                    <div class="feature-icon bg-danger text-white mb-3">🎬</div>
                    <h5 class="fw-bold">Preview & Export</h5>
                    <p class="mb-2">Preview your edits live in the video player.</p>
                    <p class="mb-3">Then export your result as an MP4.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="waitlist" class="waitlist py-5">
    <div class="waitlist-overlay py-4">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold hero-title">Join the waitlist</h2>
                    <p class="lead hero-sub mb-4">We’ll send you updates & notify you when invites open.</p>
                    <form class="row g-2 justify-content-center" method="post" action="#">
                        <div class="col-12 col-md-7">
                            <label for="waitlistEmail" class="visually-hidden">Email address</label>
                            <input type="email" id="waitlistEmail" name="email" class="form-control form-control-lg" placeholder="you@example.com" required>
                        </div>
                        <div class="col-12 col-md-auto d-grid">
                            <button type="submit" class="btn btn-warning btn-lg px-4">Join Waitlist</button>
                        </div>
                    </form>
                    <small class="d-block mt-2" style="opacity:.9">We will never spam you. Unsubscribe anytime.</small>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require __DIR__ . '/../base.php';
