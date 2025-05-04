// site/templates/konto.php
<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/') ?>
<main class="content-wrapper">
  <div class="container pt-4 pt-sm-5 pb-5 mb-xxl-3">
    <div class="row pt-2 pt-sm-0 pt-lg-2 pb-2 pb-sm-3 pb-md-4 pb-lg-5">
      <?php snippet('konto-menu') ?>
      <!-- Account content -->
      <div class="col-lg-9">
        <h1 class="h2 pb-2 pb-lg-3">Willkommen, <?= $kirby->user()->name() ?>!</h1>

        <!-- Account Status -->
        <div class="alert alert-info">
          <h4 class="alert-heading">Kostenloses Konto</h4>
          <p>Sie nutzen aktuell unser kostenloses Konto. Mit einem Premium-Abo erhalten Sie zusätzliche Funktionen:</p>
          <ul>
            <li>Platzangebote im Umkreis von 300 km (statt 100 km)</li>
            <li>Kontaktdaten von Platzangeboten einsehen</li>
            <li>Mehr Details bei Geschäftseinträgen</li>
            <li>Videos bei Geschäften einbinden</li>
          </ul>
          <hr>
          <p class="mb-0">
            <a href="/konto/premium" class="btn btn-primary">Jetzt auf Premium upgraden</a>
          </p>
        </div>

        <!-- Quick Actions -->
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Meine Geschäfte</h5>
                <p class="card-text">Verwalten Sie Ihre Schausteller-Geschäfte.</p>
                <a href="/konto/meine-geschaefte" class="btn btn-primary">Geschäfte verwalten</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Kleinanzeigen</h5>
                <p class="card-text">Ihre Kleinanzeigen verwalten.</p>
                <a href="/konto/meine-kleinanzeigen" class="btn btn-primary">Kleinanzeigen verwalten</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Jobangebote</h5>
                <p class="card-text">Jobangebote erstellen und verwalten.</p>
                <a href="/konto/meine-jobangebote" class="btn btn-primary">Jobs verwalten</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php snippet('footer') ?>