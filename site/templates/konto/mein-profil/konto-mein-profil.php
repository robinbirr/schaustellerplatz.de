<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/') ?>

<article class="viewDefault">

  <?php
  if($error): ?>
    <div class="alert"><?= $page->authAlert()->html() ?> <?= $error ?></div>
  <?php endif ?>

  <?php dump(get('email')) ?>
  <div class="viewUserData" id="userData">
    <div id="name"><?= $page->username() ?>: <?= $kirby->user()->username() ?></div>
    <div id="email"><?= $page->email() ?>: <?= $kirby->user()->email() ?></div>
  </div>
  <form id="editUserData" class="editUserForm" method="post">
    <div>
      <label for="editEmail"><?= $page->username()->html() ?></label>
      <input type="email" id="editEmail" name="editEmail" placeholder="<?= $kirby->user()->email() ?>" value="<?= get('editEmail') ? esc(get('editEmail'), 'attr') : '' ?>">
    </div>
    <div>
      <label for="editPassword"><?= $page->password()->html() ?></label>
      <input type="password" id="editPassword" name="editPassword" value="<?= get('editPassword') ? esc(get('editPassword'), 'attr') : '' ?>">
    </div>
    <div>
      <input type="submit" name="user" value="senden">
    </div>
  </form>
</article>

<main class="content-wrapper">
  <div class="container pt-4 pt-sm-5 pb-5 mb-xxl-3">
    <div class="row pt-2 pt-sm-0 pt-lg-2 pb-2 pb-sm-3 pb-md-4 pb-lg-5">
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
          <h3 class="card-header-title"><?= $page->title() ?></h3>

          <div class=" rounded-3 bg-white  p-3 p-md-4 p-xxl-5 dev-dashed  ">
            <div class="row g-4 g-xl-5">
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/mein-konto/profilbild" class="h2 mb-2 text-decoration-none"><i class="bi bi-person"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/mein-konto/profilbild" class="text-decoration-none">Profilbild</a></div>
              </div>
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/konto/mein-profil/kontaktdaten" class="h2 mb-2 text-decoration-none"><i class="bi bi-house-door"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/konto/mein-profil/kontaktdaten" class="text-decoration-none">Kontaktdaten</a></div>
              </div>
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/mein-konto/links" class="h2 mb-2 text-decoration-none"><i class="bi bi-box-arrow-up-right"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/mein-konto/links" class="text-decoration-none">Homepage &amp; Links</a></div>
              </div>
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/mein-konto/interview" class="h2 mb-2 text-decoration-none"><i class="bi bi-chat-square-text"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/mein-konto/interview" class="text-decoration-none">Interview</a></div>
              </div>
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/mein-konto/texte" class="h2 mb-2 text-decoration-none"><i class="bi bi-text-left"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/mein-konto/texte" class="text-decoration-none">Texte</a></div>
              </div>
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/mein-konto/farben" class="h2 mb-2 text-decoration-none"><i class="bi bi-droplet"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/mein-konto/farben" class="text-decoration-none">Farbthema</a></div>
              </div>
            </div>
          </div>


          <!-- Personal info START -->

        </div>
      </div>
      <!-- Main content END -->

    </div>
  </div>
</main>
<!-- =======================
Content END -->
<?php snippet('footer') ?>
