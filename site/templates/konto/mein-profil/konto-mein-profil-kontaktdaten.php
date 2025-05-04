<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/') ?>

  <main class="content-wrapper">
    <div class="container pt-4 pt-sm-5 pb-5 mb-xxl-3">
      <div class="row pt-2 pt-sm-0 pt-lg-2 pb-2 pb-sm-3 pb-md-4 pb-lg-5">
        <?php snippet('konto-menu') ?>

        <!-- Main content START -->
        <div class="col-lg-9">
          <h1 class="h2 pb-2 pb-lg-3">Kontaktdaten</h1>

          <?php if($success): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Deine Kontaktdaten wurden erfolgreich aktualisiert.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif ?>

          <?php if($error): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?= $error ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif ?>

          <div class="card border-0 shadow-sm">
            <div class="card-body">
              <form method="post" action="<?= $page->url() ?>">
                <input type="hidden" name="csrf" value="<?= csrf() ?>">

                <div class="row g-4">
                  <!-- Persönliche Daten -->
                  <div class="col-12">
                    <h5 class="mb-3">Persönliche Daten</h5>
                  </div>

                  <div class="col-sm-6">
                    <label for="vorname" class="form-label">Vorname *</label>
                    <input type="text" class="form-control" id="vorname" name="vorname"
                           value="<?= $user->vorname()->or($data['vorname'] ?? '') ?>" required>
                  </div>

                  <div class="col-sm-6">
                    <label for="nachname" class="form-label">Nachname *</label>
                    <input type="text" class="form-control" id="nachname" name="nachname"
                           value="<?= $user->nachname()->or($data['nachname'] ?? '') ?>" required>
                  </div>

                  <!-- Adresse -->
                  <div class="col-12">
                    <hr class="my-4">
                    <h5 class="mb-3">Adresse</h5>
                  </div>

                  <div class="col-12">
                    <label for="strasse" class="form-label">Straße und Hausnummer</label>
                    <input type="text" class="form-control" id="strasse" name="strasse"
                           value="<?= $user->strasse()->or($data['strasse'] ?? '') ?>">
                  </div>

                  <div class="col-md-4">
                    <label for="plz" class="form-label">PLZ</label>
                    <input type="text" class="form-control" id="plz" name="plz"
                           value="<?= $user->plz()->or($data['plz'] ?? '') ?>">
                  </div>

                  <div class="col-md-8">
                    <label for="stadt" class="form-label">Stadt</label>
                    <input type="text" class="form-control" id="stadt" name="stadt"
                           value="<?= $user->stadt()->or($data['stadt'] ?? '') ?>">
                  </div>

                  <div class="col-12">
                    <label for="land" class="form-label">Land</label>
                    <select class="form-select" id="land" name="land">
                      <option value="">Bitte wählen...</option>
                      <option value="DE" <?= ($user->land() ?? '') == 'DE' ? 'selected' : '' ?>>Deutschland</option>
                      <option value="AT" <?= ($user->land() ?? '') == 'AT' ? 'selected' : '' ?>>Österreich</option>
                      <option value="CH" <?= ($user->land() ?? '') == 'CH' ? 'selected' : '' ?>>Schweiz</option>
                    </select>
                  </div>

                  <!-- Kontaktinformationen -->
                  <div class="col-12">
                    <hr class="my-4">
                    <h5 class="mb-3">Kontaktinformationen</h5>
                  </div>

                  <div class="col-md-6">
                    <label for="email" class="form-label">E-Mail-Adresse *</label>
                    <input type="email" class="form-control" id="email" name="email"
                           value="<?= $user->email() ?>" required>
                  </div>

                  <div class="col-md-6">
                    <label for="telefon" class="form-label">Telefon</label>
                    <input type="tel" class="form-control" id="telefon" name="telefon"
                           value="<?= $user->telefon()->or($data['telefon'] ?? '') ?>">
                  </div>

                  <div class="col-md-6">
                    <label for="website" class="form-label">Website</label>
                    <input type="url" class="form-control" id="website" name="website"
                           value="<?= $user->website()->or($data['website'] ?? '') ?>"
                           placeholder="https://www.example.com">
                  </div>

                  <!-- Schausteller-spezifische Informationen -->
                  <div class="col-12">
                    <hr class="my-4">
                    <h5 class="mb-3">Schausteller-Informationen</h5>
                  </div>

                  <div class="col-md-6">
                    <label for="firmenname" class="form-label">Firmenname</label>
                    <input type="text" class="form-control" id="firmenname" name="firmenname"
                           value="<?= $user->firmenname()->or($data['firmenname'] ?? '') ?>">
                  </div>

                  <div class="col-md-6">
                    <label for="ustid" class="form-label">USt-IdNr.</label>
                    <input type="text" class="form-control" id="ustid" name="ustid"
                           value="<?= $user->ustid()->or($data['ustid'] ?? '') ?>">
                  </div>

                  <div class="col-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter"
                        <?= $user->newsletter()->toBool() ? 'checked' : '' ?>>
                      <label class="form-check-label" for="newsletter">
                        Ich möchte den Newsletter mit Informationen zu neuen Platzangeboten erhalten
                      </label>
                    </div>
                  </div>
                </div>

                <hr class="my-4">

                <div class="d-flex gap-3">
                  <button type="submit" class="btn btn-primary">Änderungen speichern</button>
                  <a href="/konto/mein-profil" class="btn btn-outline-secondary">Zurück</a>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Main content END -->
      </div>
    </div>
  </main>

<?php snippet('footer') ?>