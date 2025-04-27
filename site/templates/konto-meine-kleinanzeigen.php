<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/') ?>
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
          <h3 class="card-header-title">Meine Kleinanzeigen</h3>
          <div class="row">
            <div class="col-12 col-lg-6">2 Anzeigen online</div>
            <div class="col-12 col-lg-6 text-end">
              <a href="/konto/meine-kleinanzeigen/anzeige-aufgeben" class="btn btn-primary mb-0" type="button">
                <i class="bi bi-plus-lg"></i> Anzeige aufgeben
              </a>
            </div>
          </div>
          <!-- Anzeige 1 -->
          <div class="kleinanzeigen-element card">
            <div class="row g-0">
              <!-- Card img -->
              <div class="col-md-4 position-relative">

                <!-- Overlay item -->
                <div class="position-absolute top-0 start-0 z-index-1 m-3">
                  <div class="badge text-bg-dark">nicht veröffentlicht</div>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden" style="display: block; border-radius: 10px; border-top-right-radius: 0; border-bottom-right-radius: 0;">
                  <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false" data-items="1">
                    <!-- Image item -->
                    <div><img src="/assets/images/category/hotel/4by3/04.jpg" alt="Card image"></div>

                    <!-- Image item -->
                    <div><img src="/assets/images/category/hotel/4by3/02.jpg" alt="Card image"></div>
                  </div>
                </div>
                <!-- Slider END -->
              </div>
              <div class="col-md-8">
                <div class="card-body py-md-3 d-flex flex-column h-100 position-relative">
                  <div class="row text-secondary">
                    <div class="col-md-8">
                      <small><i class="bi bi-geo-alt me-2"></i>68542 Heddesheim</small>
                    </div>
                    <div class="col-md-4 text-end">
                      <small><i class="bi bi-calendar2 me-2"></i>Heute 18.03.2024</small>
                    </div>
                  </div>
                  <div class="mt-md-auto">
                    <!-- Title -->
                    <h5 class="card-title mb-1"><a href="hotel-detail.html">Courtyard by Marriott New York </a></h5>
                    <small>Some future-friendly styles are included to disable all on anchor buttons...</small>

                    <!-- Price and Button -->
                    <div class="d-sm-flex align-items-center mt-3">
                      <!-- Button -->
                      <div class="d-flex">
                        <h5 class="fw-bold mb-0 me-1">750,00 €</h5>
                        <span class="mb-0 me-2">VB</span>
                      </div>
                      <!-- Price -->
                    </div>
                  </div>
                  <div class="btn-group mt-md-auto">
                    <a href="#" class="btn btn-success"><i class="bi bi-stars"></i> Hervorheben</a>
                    <a href="#" class="btn btn-primary-soft"><i class="bi bi-pen"></i> bearbeiten</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Anzeige 1 End -->

        </div>
      </div>
      <!-- Main content END -->

    </div>
  </div>
</section>
<!-- =======================
Content END -->
<?php snippet('footer') ?>
