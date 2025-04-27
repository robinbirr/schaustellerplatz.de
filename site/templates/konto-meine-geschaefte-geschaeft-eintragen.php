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
              <form method="POST" action="<?= $page->url() ?>" enctype="multipart/form-data">
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

                <!-- Bild-Upload Bereich -->
                <div class="mb-4">
                  <label class="form-label fw-bold">Bilder hochladen (max. <?= $maxBilder ?> Bilder)</label>
                  <div class="image-upload-container">
                    <div class="row">
                      <!-- Vorhandene Bilder anzeigen (falls vorhanden) -->
                      <?php if(!empty($bilder)): ?>
                        <?php foreach($bilder as $index => $bild): ?>
                          <div class="col-md-4 mb-3 image-preview-container" data-index="<?= $index ?>">
                            <div class="card h-100">
                              <img src="<?= $bild['url'] ?>" class="card-img-top" alt="Vorschau">
                              <div class="card-body text-center">
                                <button type="button" class="btn btn-danger btn-sm remove-image" data-index="<?= $index ?>">
                                  <i class="bi bi-trash"></i> Entfernen
                                </button>
                                <input type="hidden" name="existing_images[]" value="<?= $bild['id'] ?>">
                              </div>
                            </div>
                          </div>
                        <?php endforeach ?>
                      <?php endif ?>

                      <!-- Neue Bilder hochladen -->
                      <?php $remainingSlots = $maxBilder - count($bilder); ?>
                      <?php if($remainingSlots > 0): ?>
                        <div class="col-md-4 mb-3">
                          <div class="card h-100 image-upload-card">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                              <div class="mb-3 text-center">
                                <i class="bi bi-cloud-arrow-up fs-1"></i>
                                <p class="mb-0">Bild auswählen</p>
                              </div>
                              <input type="file" name="images[]" class="image-upload-input" accept="image/jpeg,image/png,image/gif" style="display: none;">
                              <button type="button" class="btn btn-primary btn-sm select-image">
                                <i class="bi bi-image"></i> Durchsuchen
                              </button>
                            </div>
                          </div>
                        </div>
                      <?php endif ?>
                    </div>

                    <div class="small text-muted mt-2">
                      Erlaubte Dateiformate: JPG, PNG, GIF. Maximale Dateigröße: 5MB.
                      <?php if($kirby->user()->role()->name() === 'free'): ?>
                        <br>Als Free-Benutzer kannst du bis zu 3 Bilder hochladen. <a href="/konto/mein-paket" class="text-primary">Upgrade auf Premium</a> für bis zu 6 Bilder.
                      <?php endif ?>
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

  <!-- JavaScript für Bild-Upload -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Selektoren für Bild-Upload-Funktionalität
      const container = document.querySelector('.image-upload-container');
      const imageRow = container.querySelector('.row');

      // Bild-Auswahl-Buttons
      container.addEventListener('click', function(e) {
        if (e.target.classList.contains('select-image') || e.target.closest('.select-image')) {
          const card = e.target.closest('.image-upload-card');
          const input = card.querySelector('.image-upload-input');
          input.click();
        }

        // Entfernen-Buttons für vorhandene Bilder
        if (e.target.classList.contains('remove-image') || e.target.closest('.remove-image')) {
          const previewContainer = e.target.closest('.image-preview-container');
          previewContainer.remove();

          // Neuen Upload-Slot hinzufügen, wenn unter dem Maximum
          const currentImages = document.querySelectorAll('.image-preview-container').length;
          const uploadCards = document.querySelectorAll('.image-upload-card').length;

          if (currentImages + uploadCards < <?= $maxBilder ?>) {
            addUploadCard();
          }
        }
      });

      // Datei-Upload verarbeiten
      container.addEventListener('change', function(e) {
        if (e.target.classList.contains('image-upload-input')) {
          const file = e.target.files[0];

          if (file) {
            const reader = new FileReader();
            const card = e.target.closest('.image-upload-card');

            reader.onload = function(e) {
              // Vorschau-Container erstellen
              const previewContainer = document.createElement('div');
              previewContainer.className = 'col-md-4 mb-3 image-preview-container';

              // Vorschau-Card erstellen
              previewContainer.innerHTML = `
                <div class="card h-100">
                  <img src="${e.target.result}" class="card-img-top" alt="Vorschau">
                  <div class="card-body text-center">
                    <button type="button" class="btn btn-danger btn-sm remove-image">
                      <i class="bi bi-trash"></i> Entfernen
                    </button>
                  </div>
                </div>
              `;

              // Datei-Input in Vorschau-Container verschieben
              const input = card.querySelector('.image-upload-input');
              previewContainer.appendChild(input);

              // Vorschau einfügen vor Upload-Card
              imageRow.insertBefore(previewContainer, card);

              // Upload-Card entfernen, wenn maximale Anzahl erreicht
              const currentImages = document.querySelectorAll('.image-preview-container').length;
              const maxImages = <?= $maxBilder ?>;

              if (currentImages >= maxImages) {
                card.remove();
              } else {
                // Ansonsten Input zurücksetzen für nächsten Upload
                const newInput = document.createElement('input');
                newInput.type = 'file';
                newInput.name = 'images[]';
                newInput.className = 'image-upload-input';
                newInput.accept = 'image/jpeg,image/png,image/gif';
                newInput.style.display = 'none';

                card.querySelector('.card-body').appendChild(newInput);
              }
            };

            reader.readAsDataURL(file);
          }
        }
      });

      // Funktion zum Hinzufügen einer Upload-Card
      function addUploadCard() {
        const uploadCard = document.createElement('div');
        uploadCard.className = 'col-md-4 mb-3';
        uploadCard.innerHTML = `
          <div class="card h-100 image-upload-card">
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <div class="mb-3 text-center">
                <i class="bi bi-cloud-arrow-up fs-1"></i>
                <p class="mb-0">Bild auswählen</p>
              </div>
              <input type="file" name="images[]" class="image-upload-input" accept="image/jpeg,image/png,image/gif" style="display: none;">
              <button type="button" class="btn btn-primary btn-sm select-image">
                <i class="bi bi-image"></i> Durchsuchen
              </button>
            </div>
          </div>
        `;

        imageRow.appendChild(uploadCard);
      }
    });
  </script>
<?php snippet('footer') ?>