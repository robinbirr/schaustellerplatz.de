<?php snippet('header') ?>
<?php
$slug = get('draft');
$draft = $slug ? page('platzangebote')->draft($slug) : null;

if (!$draft) {
  echo '<p>Kein gültiger Entwurf gefunden.</p>';
  return;
}

$data = kirby()->request()->data();

$error = null;

if (isset($data['von_datum'], $data['bis_datum'])) {
  $von = strtotime($data['von_datum']);
  $bis = strtotime($data['bis_datum']);

  if ($von === false || $bis === false) {
    $error = 'Bitte gültige Datumswerte eingeben.';
  } elseif ($bis < $von) {
    $error = 'Das Enddatum darf nicht vor dem Startdatum liegen.';
  } else {
    try {
      $draft->update([
        'von_datum' => $data['von_datum'],
        'bis_datum' => $data['bis_datum'],
      ]);

      go('/platzangebote/kostenlos-aufgeben/location?draft=' . $slug);

    } catch (Exception $e) {
      $error = 'Fehler beim Speichern: ' . $e->getMessage();
    }
  }
}
?>
<form method="post">
<main class="content-wrapper">
  <div class="container pt-3 pt-sm-4 pt-md-5 pb-5 text-center">
    <div class="row pt-lg-2 pt-xl-3 pb-1 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5 justify-content-center">

      <!-- Property type inputs -->
      <div class="col-12 col-xl-8">
        <h1 class="h2 mb-n2 mb-lg-2">Wann findet deine Veranstaltung statt?</h1>
        <p>Gib den Namen oder eine Bezeichnung deiner Veranstaltung an.</p>

        <!-- Type -->
        <?php if ($error): ?>
          <div class="alert alert-danger mt-3"><?= esc($error) ?></div>
        <?php endif ?>

        <div class="row g-3 mt-4">
          <div class="col-6">
            <div class="position-relative">
              <label for="date-1" class="form-label">Von</label>
              <div class="position-relative">
                <input type="text" class="form-control form-icon-end" data-datepicker='{"dateFormat": "d.m.Y"}' name="von_datum" id="von_datum" placeholder="Datum wählen" value="<?= esc($data['von_datum'] ?? '') ?>" required>
                <i class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
              </div>
            </div>
          </div>
          <div class="col-6">
            <label for="bis_datum" class="form-label">Bis</label>
            <input type="text" class="form-control form-icon-end" data-datepicker='{"dateFormat": "d.m.Y"}' name="bis_datum" id="bis_datum" placeholder="Datum wählen" value="<?= esc($data['bis_datum'] ?? '') ?>" required>
            <i class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


  <!-- Prev / Next navigation (Footer) -->
  <footer class="sticky-bottom bg-body pb-3">
    <div class="progress rounded-0" role="progressbar" aria-label="Dark example" aria-valuenow="14.29" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
      <div class="progress-bar bg-dark d-none-dark" style="width: 14.29%"></div>
    </div>
    <div class="container d-flex gap-3 pt-3">
      <button type="submit" class="btn btn-dark animate-slide-end ms-auto">Weiter <i class="fi-arrow-right animate-target fs-base ms-2 me-n1"></i></button>
    </div>
  </footer>
</form>
<?php snippet('footer') ?>
