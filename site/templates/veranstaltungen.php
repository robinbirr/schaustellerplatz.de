<?php snippet('header') ?>
<?php
setlocale(LC_TIME, 'de_DE.UTF8');
echo strftime('%A').', der '.date('d.m.Y H:i').' Uhr.';
?>

<!-- =======================
Main Banner START -->
<section class="bg-light pt-0">
  <div class="container position-relative">
    <!-- Bg image -->
    <div class="rounded-3 p-4 p-sm-5" style="background-image: url(assets/images/bg/02.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
      <!-- Banner title -->
      <div class="row justify-content-between pt-0 pb-5">
        <div class="col-md-7 col-lg-8 col-xxl-7 pb-5 mb-0 mb-lg-5">
          <h1 class="text-white">Die ganze Welt der Volksfeste: Entdecken, Verbinden, Feiern.</h1>
          <p class="text-white mb-0">Planning for a trip? we will organize your best trip with the best destination and within the best budgets!</p>
        </div>
      </div>
    </div>

    <!-- Search START -->
    <div class="row mt-n7">
      <div class="col-11 mx-auto">
        <!-- Booking from START -->
        <form class="bg-mode shadow rounded-3 p-4">
          <div class="row g-4 align-items-center">

            <div class="col-xl-10">
              <div class="row g-4">
                <!-- Location -->
                <div class="col-md-6 col-lg-4">
                  <label class="fw-normal mb-0"><i class="bi bi-geo-alt text-primary me-1"></i>Region</label>
                  <!-- Input field -->
                  <div class="form-border-bottom form-control-transparent form-fs-lg mt-2">
                    <select class="form-select js-choice" data-search-enabled="true">
                      <option value="">Region wählen</option>
                      <option>San Jacinto, USA</option>
                      <option>North Dakota, Canada</option>
                      <option>West Virginia, Paris</option>
                    </select>
                  </div>
                </div>

                <!-- Check in -->
                <div class="col-md-6 col-lg-4">
                  <label class="fw-normal mb-0"><i class="bi bi-calendar text-primary me-1"></i>Datum</label>
                  <!-- Input field -->
                  <div class="form-border-bottom form-control-transparent form-fs-lg mt-2">
                    <input type="text" class="form-control flatpickr py-2" data-date-format="d M Y" placeholder="Datum wählen">
                  </div>
                </div>

                <!-- Guest -->
                <div class="col-md-6 col-lg-4">
                  <label class="fw-normal mb-0"><i class="fa-solid fa-person-skating text-primary me-1"></i>Kategorie</label>
                  <!-- Input field -->
                  <div class="form-border-bottom form-control-transparent form-fs-lg mt-2">
                    <select class="form-select js-choice" data-search-enabled="true">
                      <option value="">Kategorie wählen</option>
                      <option>Adventure</option>
                      <option>Beach</option>
                      <option>Desert</option>
                      <option>History</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <!-- Button -->
            <div class="col-xl-2">
              <div class="d-grid">
                <a href="#" class="btn btn-lg btn-dark mb-0">Suchen</a>
              </div>
            </div>
          </div>
        </form>
        <!-- Booking from END -->
      </div>
    </div>
    <!-- Search END -->

  </div>
</section>
<!-- =======================
Main Banner END -->
<!-- =======================
Cab list START -->
<section class="bg-light pt-0">
  <div class="container">
        <div class="vstack gap-4">
          <h3>März</h3>
          <?php $today = date('Y-m-d');?>
          <?php $veranstaltungen = $page->veranstaltungen()->toStructure(); foreach ($veranstaltungen as $veranstaltung): $itemDate = $veranstaltung->datumende()->toDate('Y-MM-dd'); if ($itemDate >= $today):?>
            <?php $datumbeginn = $veranstaltung->datumbeginn()->toDate('Y-MM-dd'); $datumende = $veranstaltung->datumende()->toDate('Y-MM-dd'); ?>
            <div class="card bg-white p-4 <?php if ($veranstaltung->abgesagt()->toBool() === false && $datumbeginn <= $today && $datumende >= $today): ?>bg-primary-subtle<?php endif ?>">
              <!-- Card body START -->
              <div class="card-body p-0">
                <div class="row g-2 g-sm-4">
                  <div class="col-md-3 col-xl-2 text-center">
                    <?php if ($veranstaltung->abgesagt()->toBool() === false && $datumbeginn <= $today && $datumende >= $today): ?>
                      <div class="bg-primary rounded-3 px-4 py-3"><h5 class="text-light mb-0">Heute</h5></div>
                    <?php else: ?>
                      <h4 class="card-title mb-2"><?= $veranstaltung->datumbeginn()->toDate('dd') ?></h4>
                      <h6><?= $veranstaltung->datumbeginn()->toDate('F') ?></h6>
                    <?php endif; ?>
                  </div>
                  <!-- Card title and rating -->
                  <div class="col-sm-6 col-md-4 col-xl-6">
                    <h4 class="card-title mb-2"><a href="cab-detail.html" class="stretched-link"><?= $veranstaltung->name()->html() ?></a></h4>
                    <!-- Nav divider -->
                    <ul class="nav nav-divider h6 fw-normal mb-2">
                      <li class="nav-item"><?= $veranstaltung->datumbeginn()->toDate('dd.MM.Y') ?> bis <?= $veranstaltung->datumende()->toDate('dd.MM.Y') ?></li>
                    </ul>
                  </div>

                  <!-- Button -->
                  <div class="col-sm-6 col-md-4 col-xl-4 text-sm-end">
                    <!-- Price -->
                    <ul class="list-inline mb-0">
                      <li class="h5 mb-0"><?= $veranstaltung->stadt()->html() ?></li>
                      <li class="me-1">Rheinland-Pfalz</li>
                    </ul>
                  </div>
                </div> <!-- Row END -->
              </div>
              <!-- Card body END -->
            </div>
            <!-- Cab item END -->
          <?php endif; ?>
          <?php endforeach ?>
          <h3>April</h3>
          <!-- Pagination -->
          <nav class="d-flex justify-content-center" aria-label="navigation">
            <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
              <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fa-solid fa-angle-left"></i></a></li>
              <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
              <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
              <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
              <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
              <li class="page-item mb-0"><a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a></li>
            </ul>
          </nav>
        </div>

      <!-- Main content END -->

  </div>
</section>
<!-- =======================
Cab list END -->
<?php snippet('footer') ?>
