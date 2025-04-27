<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/') ?>
<section class="bg-light pt-3">
  <div class="container">
    <div class="row">
      <?php snippet('konto-menu') ?>
      <!-- Main content START -->
      <div class="col-lg-8 col-xl-9">

        <!-- Offcanvas menu button -->
        <div class="d-grid mb-0 d-lg-none w-100">
          <button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
            <i class="fas fa-sliders-h"></i> Menu
          </button>
        </div>

        <div class="vstack gap-4">
          <h3 class="card-header-title">Anzeige aufgeben</h3>

          <div class=" rounded-3 bg-white p-3 p-md-4 p-xxl-5 dev-dashed">
            <div class="row g-4 g-xl-5">
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/mein-konto/datenschutz" class="h2 mb-2 text-decoration-none"><i class="bi bi-shop-window"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/" class="text-decoration-none">Meine Geschäfte</a></div>
              </div>
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/mein-konto/datenschutz" class="h2 mb-2 text-decoration-none"><i class="bi bi-shield-check"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/" class="text-decoration-none">Datenschutz</a></div>
              </div>
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/mein-konto/kennwort" class="h2 mb-2 text-decoration-none"><i class="bi bi-lock"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/" class="text-decoration-none">Kennwort ändern</a></div>
              </div>
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/email-verwaltung?hash=Y29tcGFueV9lbWFpbCUzRHJvYmluJTQwYmlycndlcmsuZGUlMjZhJTNEMQ==" target="_blank" class="h2 mb-2 text-decoration-none"><i class="bi bi-envelope-at"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/" target="_blank" class="text-decoration-none">E-Mail-Einstellungen</a></div>
              </div>
            </div>
          </div>


          <!-- Personal info START -->

        </div>
      </div>
      <!-- Main content END -->

    </div>
  </div>
</section>
<?php snippet('footer') ?>
