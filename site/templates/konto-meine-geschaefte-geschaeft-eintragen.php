<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/registrieren') ?>
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
            <h3 class="card-header-title"><?= $geschaeft ? 'Geschäft bearbeiten' : 'Neues Geschäft eintragen' ?></h3>

            <?php if($alert): ?>
              <div class="alert alert-<?= $alert['type'] === 'error' ? 'danger' : 'success' ?> alert-dismissible fade show" role="alert">
                <strong><?= $alert['message'] ?></strong>
                <?php if(isset($alert['details']) && is_array($alert['details'])): ?>
                  <ul class="mb-0 mt-2">
                    <?php foreach($alert['details'] as $field => $message): ?>
                      <li><?= $message ?></li>
                    <?php endforeach ?>
                  </ul>
                <?php endif ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif ?>

            <?php if($success): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= $success ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif ?>

            <div class="rounded-3 bg-white p-3 p-md-4 p-xxl-5 dev-dashed">
              <form method="POST" action="<?= $page->url() ?>">
                <input type="hidden" name="csrf" value="<?= csrf() ?>">
                <?php if($geschaeft): ?>
                  <input type="hidden" name="id" value="<?= $geschaeft->uuid()->toString() ?>">
                <?php endif ?>

                <div class="mb-4">
                  <label for="title" class="form-label fw-bold">Name des Geschäfts *</label>
                  <input type="text" class="form-control form-control-lg" id="title" name="title" value="<?= esc($data['title'] ?? '', 'attr') ?>" required>
                </div>

                <div class="mb-4">
                  <label for="typ" class="form-label fw-bold">Art des Geschäfts *</label>
                  <select class="form-select form-select-lg" id="typ" name="typ" required>
                    <option value="">Bitte wählen...</option>
                    <?php foreach($typen as $value => $label): ?>
                      <option value="<?= $value ?>" <?= isset($data['typ']) && $data['typ'] === $value ? 'selected' : '' ?>><?= $label ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="mb-4">
                  <label for="beschreibung" class="form-label fw-bold">Beschreibung</label>
                  <textarea class="form-control" id="beschreibung" name="beschreibung" rows="5"><?= esc($data['beschreibung'] ?? '') ?></textarea>
                </div>

                <div class="row mb-4">
                  <div class="col-md-4">
                    <label for="front_meters" class="form-label fw-bold">Front (in Meter) *</label>
                    <input type="number" class="form-control" id="front_meters" name="front_meters" value="<?= esc($data['front_meters'] ?? '', 'attr') ?>" step="0.1" min="0" required>
                  </div>
                  <div class="col-md-4">
                    <label for="tiefe_meters" class="form-label fw-bold">Tiefe (in Meter) *</label>
                    <input type="number" class="form-control" id="tiefe_meters" name="tiefe_meters" value="<?= esc($data['tiefe_meters'] ?? '', 'attr') ?>" step="0.1" min="0" required>
                  </div>
                  <div class="col-md-4">
                    <label for="hoehe_meters" class="form-label fw-bold">Höhe (in Meter) *</label>
                    <input type="number" class="form-control" id="hoehe_meters" name="hoehe_meters" value="<?= esc($data['hoehe_meters'] ?? '', 'attr') ?>" step="0.1" min="0" required>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6">
                    <label for="stromanschluss" class="form-label fw-bold">Benötigter Stromanschluss</label>
                    <select class="form-select" id="stromanschluss" name="stromanschluss">
                      <option value="">Bitte wählen...</option>
                      <?php foreach($stromanschluesse as $value => $label): ?>
                        <option value="<?= $value ?>" <?= isset($data['stromanschluss']) && $data['stromanschluss'] === $value ? 'selected' : '' ?>><?= $label ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label fw-bold d-block">Wasseranschluss benötigt</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="wasseranschluss" id="wasseranschluss-ja" value="1" <?= isset($data['wasseranschluss']) && $data['wasseranschluss'] ? 'checked' : '' ?>>
                      <label class="form-check-label" for="wasseranschluss-ja">Ja</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="wasseranschluss" id="wasseranschluss-nein" value="0" <?= isset($data['wasseranschluss']) && !$data['wasseranschluss'] ? 'checked' : '' ?> <?= !isset($data['wasseranschluss']) ? 'checked' : '' ?>>
                      <label class="form-check-label" for="wasseranschluss-nein">Nein</label>
                    </div>
                  </div>
                </div>

                <?php if($kirby->user()->role()->name() === 'premium'): ?>
                  <div class="mb-4">
                    <label for="youtube_video_id" class="form-label fw-bold">YouTube-Video (nur Premium)</label>
                    <div class="input-group">
                      <span class="input-group-text">youtube.com/watch?v=</span>
                      <input type="text" class="form-control" id="youtube_video_id" name="youtube_video_id" value="<?= esc($data['youtube_video_id'] ?? '', 'attr') ?>" placeholder="Video-ID">
                    </div>
                    <div class="form-text">Gib nur die Video-ID ein, z.B. "dQw4w9WgXcQ" für ein YouTube-Video.</div>
                  </div>
                <?php endif ?>

                <div class="mb-4">
                  <div class="callout callout-info bg-light p-3">
                    <h6 class="fw-bold"><i class="bi bi-info-circle me-2"></i>Bilder hochladen</h6>
                    <p class="mb-0">Nach dem Speichern deines Geschäfts kannst du Bilder hochladen.
                      <?php if($kirby->user()->role()->name() === 'free'): ?>
                        Als Free-Benutzer kannst du bis zu 3 Bilder hochladen.
                      <?php else: ?>
                        Als Premium-Benutzer kannst du bis zu 6 Bilder hochladen.
                      <?php endif ?>
                    </p>
                  </div>
                </div>

                <div class="d-flex gap-2">
                  <button type="submit" name="save" value="1" class="btn btn-primary">
                    <i class="bi bi-save me-2"></i>Speichern
                  </button>
                  <a href="/konto/meine-geschaefte" class="btn btn-outline-secondary">Abbrechen</a>
                </div>
              </form>
            </div>

          </div>
        </div>
        <!-- Main content END -->

      </div>
    </div>
  </section>
<?php snippet('footer') ?>