<?php snippet('header') ?>
<section class="pt-0 vh-xxl-100">
  <div class="container h-100 d-flex px-0 px-sm-4">
    <div class="row justify-content-center align-items-center m-auto">
      <?php
      // if the form has errors, show a list of messages
      if (count($errors) > 0) : ?>
        <div class="alert alert-danger d-flex align-items-center rounded-3 mb-0" role="alert">
          <h4 class="mb-0 alert-heading"><i class="bi bi-exclamation-octagon-fill me-2"></i> </h4>
          <div class="ms-3">
            <?php foreach ($errors as $message) : ?>
            <h6 class="mb-0 alert-heading"><?= kirbytext($message) ?></h6>
            <?php endforeach ?>
          </div>
        </div>
      <?php endif ?>
      <div class="col-12">
        <div class="overflow-hidden">
          <div class="row g-0">
            <!-- Vector Image -->
            <div class="col-lg-6 d-md-flex align-items-center order-2 order-lg-1">
              <div class="p-3 p-lg-5">
                <img src="assets/images/element/signin.svg" alt="">
              </div>
              <!-- Divider -->
              <div class="vr opacity-1 d-none d-lg-block"></div>
            </div>

            <!-- Information -->
            <div class="col-lg-6 order-1">
              <div class="p-4 p-sm-6">
                <h1 class="mb-2 h3">Werde Teil vom Schaustellerplatz der Magie!</h1>
                <p class="mb-0">Trage dein Geschäft jetzt <strong>100 % kostenlos</strong> ein.</p>

                <!-- Form START -->
                <form class="mt-4 text-start" method="post" action="<?= $page->url() ?>">
                  <input type="hidden" name="csrf" value="<?= csrf() ?>">
                  <div class="form-floating mb-3">
                    <input class="form-control" required type="text" id="name" name="name" placeholder="Benutzername" value="<?= esc($data['name'] ?? '', 'attr') ?>">
                    <label for="name">Benutzername</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input class="form-control" required type="email" id="email" name="email" placeholder="E-Mail Adresse" value="<?= esc($data['email'] ?? '', 'attr') ?>">
                    <label for="email">E-Mail Adresse</label>
                  </div>
                  <!-- Password -->
                  <div class="form-floating mb-3 position-relative">
                    <input class="form-control fakepassword" id="psw-input" type="password" id="password" name="password" placeholder="Passwort" value="<?= get('password') ? esc(get('password'), 'attr') : '' ?>">
                    <label for="psw-input">Passwort</label>
                  </div>
                  <!-- Button -->
                  <div><button type="submit" name="register" value="Register" class="btn btn-primary w-100 mb-0">Kostenlos eintragen</button></div>

                  <!-- Divider -->
                  <div class="position-relative my-4">
                    <hr>
                    <p class="small position-absolute top-50 start-50 translate-middle bg-mode px-1 px-sm-2">Du hast bereits ein Konto?</p>
                  </div>
                  <div class="vstack gap-3">
                    <a href="/anmelden" class="btn btn-light mb-0">Gehe zum Login</a>
                  </div>
                </form>
                <!-- Form END -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- =======================
Main Content END -->
<?php snippet('footer') ?>
