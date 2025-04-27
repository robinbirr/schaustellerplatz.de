<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/registrieren') ?>
<?php $user = $kirby->user(); ?>
<?php
// Hole alle Geschäfte des Benutzers aus der Datenbank
$user_geschaefte = page('geschaefte')->children()->filter(function($child) use($user) {
  return $child->owner()->toString() === $user->id();
});
?>

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
            <h3 class="card-header-title">Meine Geschäfte</h3>

            <?php if ($success = get('success')): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= $success ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif ?>

            <div class="row mb-4">
              <div class="col-12 col-lg-6">
                <p><?= $user_geschaefte->count() ?> Geschäft<?= $user_geschaefte->count() !== 1 ? 'e' : '' ?> online</p>
              </div>
              <div class="col-12 col-lg-6 text-end">
                <a href="/konto/meine-geschaefte/geschaeft-eintragen" class="btn btn-primary mb-0" type="button">
                  <i class="bi bi-plus-lg"></i> Geschäft eintragen
                </a>
              </div>
            </div>

            <?php if($user_geschaefte->count() > 0): ?>
              <?php foreach ($user_geschaefte as $geschaeft): ?>
                <div class="geschaeft-element card">
                  <div class="row g-0">
                    <!-- Card img -->
                    <div class="col-md-4 position-relative">
                      <!-- Overlay item -->
                      <div class="position-absolute top-0 start-0 z-index-1 m-3">
                        <?php if($geschaeft->status()->value() === 'draft'): ?>
                          <div class="badge text-bg-dark">Entwurf</div>
                        <?php elseif($geschaeft->status()->value() === 'unlisted'): ?>
                          <div class="badge text-bg-warning">Nicht veröffentlicht</div>
                        <?php else: ?>
                          <div class="badge text-bg-success">Veröffentlicht</div>
                        <?php endif ?>
                      </div>

                      <!-- Bild -->
                      <div class="overflow-hidden" style="display: block; border-radius: 10px; border-top-right-radius: 0; border-bottom-right-radius: 0;">
                        <?php if($geschaeft->bilder_anzahl()->toInt() > 0): ?>
                          <!-- Hier müsste Code stehen, um das erste Bild des Geschäfts zu laden -->
                          <img src="/assets/images/geschaefte/placeholder.jpg" alt="<?= $geschaeft->title()->esc() ?>">
                        <?php else: ?>
                          <img src="/assets/images/geschaefte/placeholder.jpg" alt="Kein Bild verfügbar">
                        <?php endif ?>
                      </div>
                    </div>

                    <div class="col-md-8">
                      <div class="card-body py-md-3 d-flex flex-column h-100 position-relative">
                        <div class="mt-md-auto">
                          <!-- Title -->
                          <h4 class="card-title mb-1">
                            <a href="<?= $geschaeft->url() ?>"><?= $geschaeft->title()->esc() ?></a>
                          </h4>
                          <strong><?= $geschaeft->typ()->esc() ?></strong>
                          <p class="mb-2"><?= $geschaeft->front_meters()->esc() ?> x <?= $geschaeft->tiefe_meters()->esc() ?> x <?= $geschaeft->hoehe_meters()->esc() ?> m</p>

                          <?php if($geschaeft->beschreibung()->isNotEmpty()): ?>
                            <p class="text-truncate mb-3"><?= $geschaeft->beschreibung()->excerpt(100) ?></p>
                          <?php endif ?>

                          <?php if($user->role()->name() === 'premium' && $geschaeft->status()->value() === 'listed'): ?>
                            <div class="border-top pt-2 mt-2">
                              <p class="mb-0"><i class="bi bi-calendar-check me-2"></i>Veranstaltungen verwalten</p>
                            </div>
                          <?php endif ?>
                        </div>

                        <div class="btn-group mt-md-auto">
                          <a href="/konto/meine-geschaefte/geschaeft-eintragen?id=<?= $geschaeft->uuid()->toString() ?>" class="btn btn-primary-soft">
                            <i class="bi bi-pen"></i> Bearbeiten
                          </a>
                          <?php if($geschaeft->bilder_anzahl()->toInt() < ($user->role()->name() === 'premium' ? 6 : 3)): ?>
                            <a href="/konto/meine-geschaefte/bilder-hochladen?id=<?= $geschaeft->uuid()->toString() ?>" class="btn btn-outline-primary">
                              <i class="bi bi-images"></i> Bilder hochladen
                            </a>
                          <?php endif ?>
                          <?php if($geschaeft->status()->value() === 'draft'): ?>
                            <a href="/konto/meine-geschaefte/veroeffentlichen?id=<?= $geschaeft->uuid()->toString() ?>" class="btn btn-success">
                              <i class="bi bi-check-circle"></i> Veröffentlichen
                            </a>
                          <?php endif ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-info">
                <p class="mb-0">Du hast noch keine Geschäfte eingetragen. <a href="/konto/meine-geschaefte/geschaeft-eintragen" class="fw-bold">Jetzt ein Geschäft eintragen</a></p>
              </div>
            <?php endif ?>
          </div>
        </div>
        <!-- Main content END -->
      </div>
    </div>
  </section>
<?php snippet('footer') ?>