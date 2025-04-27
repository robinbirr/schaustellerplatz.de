<?php snippet('header') ?>
<?php
$request = kirby()->request();
$data    = $request->data();
$slug = get('draft');
$draft = $slug ? page('platzangebote')->draft($slug) : null;
if (!$draft || !$draft->isDraft()) {
  echo '<p>Kein gültiger Entwurf gefunden.</p>';
  return;
}

// Wenn Formular abgeschickt wurde, speichern
if (isset($data['veranstaltungsname'])) {
  try {
    $draft->update([
      'veranstaltungsname' => $data['veranstaltungsname']
    ]);
    // Weiterleitung zu Schritt 3
    go('/platzangebote/kostenlos-aufgeben/kategorie?draft=' . $slug);
  } catch (Exception $e) {
    echo '<p>Fehler: ' . $e->getMessage() . '</p>';
  }
}
?>
<form method="post">
<main class="content-wrapper">
  <div class="container pt-3 pt-sm-4 pt-md-5 pb-5 text-center">
    <div class="row pt-lg-2 pt-xl-3 pb-1 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5 justify-content-center">

      <!-- Property type inputs -->
      <div class="col-12 col-xl-8">
        <h1 class="h2 mb-n2 mb-lg-2">Wie heißt deine Veranstaltung?</h1>
        <p>Gib den Namen oder eine Bezeichnung deiner Veranstaltung an.</p>

        <!-- Type -->
        <div class="pt-4 mt-4">
          <div class="form-floating mb-3">
            <input type="text" name="veranstaltungsname" class="form-control" id="fl-text" required>
            <label for="fl-text">Name / Bezeichnung der Veranstaltung</label>
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
