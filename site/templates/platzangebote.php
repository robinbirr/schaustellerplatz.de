<?php snippet('header') ?>
<main class="content-wrapper">
  <div class="bg-body-tertiary">
    <div class="pt-4 pt-xl-5 dev-dashed-3"></div>
    <div class="container pt-4 pb-5 mb-xxl-3">

      <!-- Offcanvas menu button -->
      <div class="d-grid mb-0 d-lg-none w-100">
        <button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
          <i class="fas fa-sliders-h"></i> Menu
        </button>
      </div>
      <div class="container position-relative text-center">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-7">
            <h1 class="large-h1">Schausteller in deiner Region jetzt finden</h1>
          </div>
        </div>
        <div id="formular" class="job-form-container position-relative">
          <div class="job-form-content">
            <div class="container-md">
              <div class="job-form-stage mb-0 d-none d-md-block  bg-primary text-white p-3 text-center fw-bold h5 mb-0" id="job-form-stage">
                <i class="bi bi-check-circle-fill"></i> passenden Schausteller finden
                <i class="bi bi-check-circle-fill ms-3"></i> 100% kostenlos &amp; unverbindlich

              </div>
              <div class="bg-white table-wrapper text-center p-4 p-xl-5">
                <div class="question-opacity-container-wrapper">
                  <div class="question-opacity-container">
                    <div class="h2 text-center mb-0">Bitte wähle eine Kategorie aus:</div>
                    <a href="/platzangebote/kostenlos-aufgeben" class="btn btn-success text-white  btn-lg d-block d-md-inline-block">Platzangebot kostenlos aufgeben</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container pt-4 pb-5 mb-xxl-3">
    <div class="vstack gap-4">
      <h2 class="card-header-title h1">Aktuelle Platzangebote</h2>
      <p>
        Bist du auf der Suche nach Platzangeboten?<br />
        Schau dir die aktuellen Platzangeboten an und schalte die Kontaktdaten der Kunden frei.
      </p>
      <div class="d-flex align-items-center gap-4 pb-3 mb-2 mb-xl-3">
        <div class="fs-sm text-nowrap d-none d-md-inline">2 Platzangebote online</div>
        <div class="position-relative ms-md-auto" style="width: 170px">
          <i class="fi-sort position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
          <select class="form-select form-icon-start rounded-pill" data-select='{
              "removeItemButton": false,
              "classNames": {
                "containerInner": ["form-select", "form-icon-start", "rounded-pill"]
              }
            }'>
            <option value="Popular">Popular</option>
            <option value="Rating">Rating</option>
            <option value="Price asc">Price asc</option>
            <option value="Price desc">Price desc</option>
          </select>
        </div>
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
                  <div class="fw-bold">Firmenfeier im Allgäu</div>
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
    </div>
  </div>
</main>
<?php snippet('footer') ?>
