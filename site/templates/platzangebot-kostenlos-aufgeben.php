<?php snippet('header') ?>
<?php
$request = kirby()->request();
$data = $request->data();

if (isset($data['start'])) {
  $slug = 'angebot-' . time();
  try {
    kirby()->impersonate('kirby'); // ✅ Superuser-Simulation aktivieren
    $draft = page('platzangebote')->createChild([
      'slug'     => $slug,
      'template' => 'platzangebot-single',
      'content'  => [],
      'status'   => 'draft'
    ]);

    // Weiterleitung zum nächsten Formularschritt mit Slug als GET-Parameter
    go('/platzangebote/kostenlos-aufgeben/veranstaltung?draft=' . $slug);
  } catch (Exception $e) {
    echo '<p>Fehler: ' . $e->getMessage() . '</p>';
  }
}
?>
<form method="post">
<main class="content-wrapper">
  <div class="container pt-3 pt-sm-4 pt-md-5 pb-5">
    <div class="row pt-lg-2 pt-xl-3 pb-1 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

      <!-- Property type inputs -->
      <div class="col-12 col-lg-6">
        <h6>Schritt 1</h6>
        <h1 class="h2 mb-n2 mb-lg-3">Erzähle uns von deiner Veranstaltung</h1>
        <p>In diesem Schritt fragen wir dich nach deiner Veranstaltung. der Art des gesuchten Geschäft.</p>
      </div>
      <div class="col-12 col-lg-6">
        <h1 class="h2 mb-n2 mb-lg-3">Bild</h1>
      </div>
    </div>
  </div>
</main>


<!-- Prev / Next navigation (Footer) -->
<footer class="sticky-bottom bg-body pb-3">
  <div class="progress rounded-0" role="progressbar" aria-label="Dark example" aria-valuenow="14.29" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
    <div class="progress-bar bg-dark d-none-dark" style="width: 0%"></div>
  </div>
  <div class="container d-flex gap-3 pt-3">
    <button type="submit" name="start" class="btn btn-dark animate-slide-end ms-auto">Weiter <i class="fi-arrow-right animate-target fs-base ms-2 me-n1"></i></button>
  </div>
</footer>
</form>
<?php snippet('footer') ?>
