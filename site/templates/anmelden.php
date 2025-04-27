<?php snippet('header') ?>
<section class="bg-light vh-xxl-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8 col-xl-6">
        <div class="bg-white rounded-3 p-3 p-md-4 p-xxl-5 overflow-hidden">
                <!-- Title -->
                <h1 class="mb-2 h3">Als Schausteller anmelden</h1>

                <!-- Form START -->
                <form class="mt-4 text-start" method="post" action="<?= $page->url() ?>">
                  <!-- Email -->
                  <div class="form-floating mb-3">
                    <input class="form-control" type="email" id="email" name="email" placeholder="E-Mail Adresse" value="<?= get('email') ? esc(get('email'), 'attr') : '' ?>">
                    <label for="email">E-Mail Adresse</label>
                  </div>
                  <!-- Password -->
                  <div class="form-floating mb-3 position-relative">
                    <input class="form-control fakepassword" type="password" id="psw-input" name="password" placeholder="Passwort" value="<?= get('password') ? esc(get('password'), 'attr') : '' ?>">
                    <label for="psw-input">Passwort</label>
                  </div>
                  <!-- Remember me -->
                  <div class="mb-3 d-sm-flex justify-content-between">
                    <a href="forgot-password.html">Kennwort vergessen?</a>
                  </div>
                  <!-- Button -->
                  <div><button type="submit" name="login" value="Log in" class="btn btn-primary w-100 mb-0">Anmelden</button></div>
                </form>
                <!-- Form END -->
        </div>
        <div class="pt-2 pt-sm-3 pt-xl-4 dev-dashed-2"></div>
        <p class="mb-0">Noch nicht dabei? <a href="/registrieren" class="fw-bold text-decoration-underline">Kostenlos als Schausteller eintragen</a></p>
      </div>
    </div>
  </div>
</section>
<!-- =======================
Main Content END -->
<?php snippet('footer') ?>
