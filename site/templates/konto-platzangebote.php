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
          <h3 class="card-header-title">Platzangebote</h3>
          <div class="row">
            <div class="col-12 col-lg-6">2 Platzangebote online</div>
          </div>
          <div class="card p-2">
            <div class="row">
              <div class="col-12 level-4 result-item-col">
                <div class="result-card bg-white rounded-3 p-3 p-sm-0 position-relative">
                  <div class="row align-items-center">
                    <div class="col-12 col-xl-2 col-sm-8 result-card-col-txt">
                      <div class="p-2">
                        <div class="text-center"><span class="badge rounded-pill bg-dark-subtle">beendet</span></div>
                      </div>
                    </div>
                    <div class="col-12 col-xl-3 col-sm-8 p-2">
                      <div class="p-2 pe-0">
                        <div class="text-center">18.04.2024 - 18.04.2024</div>
                      </div>
                    </div>
                    <div class="col-12 col-xl-5 col-sm-8 result-card-col-txt">
                      <div class="p-2 ps-0 pe-0">
                        <div class="fw-bold">Firmenfeier im Allgäu</div>
                      </div>
                    </div>
                    <div class="col-12 col-xl-2 col-sm-8 result-card-col-txt">
                      <div class="p-2 ps-0">
                        <div class="text-center">67551</div>
                      </div>
                    </div>
                  </div> <!-- CLOSE row -->
                </div> <!-- CLOSE bg-white -->
              </div>
            </div>
          </div>
          <div class="card p-2">
            <div class="col-12 level-4 result-item-col">
              <div class="result-card bg-white rounded-3 p-3 p-sm-0 position-relative">
                <div class="row align-items-center">
                  <div class="col-12 col-xl-2 col-sm-8 result-card-col-txt">
                    <div class="p-2">
                      <div class="text-center"><span class="badge rounded-pill bg-success">Neu</span></div>
                    </div>
                  </div>
                  <div class="col-12 col-xl-3 col-sm-8 p-2">
                    <div class="p-2 pe-0">
                      <div class="text-center">18.04.2024 - 18.04.2024</div>
                    </div>
                  </div>
                  <div class="col-12 col-xl-5 col-sm-8 result-card-col-txt">
                    <div class="p-2 ps-0 pe-0">
                      <div class="fw-bold">Firmenfier im Allgäu</div>
                    </div>
                  </div>
                  <div class="col-12 col-xl-2 col-sm-8 result-card-col-txt">
                    <div class="p-2 ps-0">
                      <div class="text-center">68542</div>
                    </div>
                  </div>
                </div> <!-- CLOSE row -->
              </div> <!-- CLOSE bg-white -->
            </div>
          </div>
          <!-- Pagination -->
          <nav class="pt-3 pb-2 pb-sm-3 pb-md-4 pb-lg-5 mt-4" aria-label="Listings pagination">
            <ul class="pagination pagination-lg">
              <li class="page-item disabled me-auto">
                <a class="page-link d-flex align-items-center h-100 fs-lg rounded-pill px-2" href="#!" aria-label="Previous page">
                  <i class="fi-chevron-left mx-1"></i> Zurück
                </a>
              </li>
              <li class="page-item active" aria-current="page">
              <span class="page-link rounded-pill">
                <span style="margin: 0 1px">1</span>
                <span class="visually-hidden">(current)</span>
              </span>
              </li>
              <li class="page-item">
                <a class="page-link rounded-pill" href="#!">2</a>
              </li>
              <li class="page-item">
                <a class="page-link rounded-pill" href="#!">3</a>
              </li>
              <li class="page-item">
                <a class="page-link rounded-pill" href="#!">4</a>
              </li>
              <li class="page-item">
                <span class="page-link px-2 pe-none">...</span>
              </li>
              <li class="page-item">
                <a class="page-link rounded-pill" href="#!">8</a>
              </li>
              <li class="page-item ms-auto">
                <a class="page-link d-flex align-items-center h-100 fs-lg rounded-pill px-2" href="#" aria-label="Next page">
                  Weiter <i class="fi-chevron-right mx-1"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- Main content END -->

    </div>
  </div>
</section>
<!-- =======================
Content END -->
<?php snippet('footer') ?>
