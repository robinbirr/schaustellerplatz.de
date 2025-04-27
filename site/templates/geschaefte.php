<?php

/**
 * @var \Kirby\Cms\Page $page
 */

$geschaefte = $page->children()->sortBy('title', 'asc');;

?>
<?php snippet('header') ?>
  <main class="content-wrapper">
    <div class="container pt-4 pb-5 mb-xxl-3">

      <!-- Breadcrumb -->
      <nav class="pb-2" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-doctors.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Geschäfte</li>
        </ol>
      </nav>

      <!-- Page title -->
      <h1 class="h2 pb-lg-2 mb-4">Alle Schausteller Geschäfte</h1>

      <!-- Filters -->
      <div class="row align-items-center g-3 gx-xl-4 mb-3 mb-sm-4">
        <div class="col-md-5 col-lg-3">
          <div class="position-relative">
            <i class="fi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
            <input type="search" class="form-control form-icon-start bg-transparent" value="Physician" placeholder="Search doctor">
          </div>
        </div>
        <div class="col-sm-7 col-md-4 col-lg-3 col-xl-2">
          <div class="position-relative">
            <i class="fi-map-pin position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
            <select class="form-select form-icon-start bg-transparent" data-select='{
                "classNames": {
                  "containerInner": ["form-select", "form-icon-start", "bg-transparent"]
                },
                "searchEnabled": true
              }' aria-label="Car location select">
              <option value="">Any location</option>
            </select>
          </div>
        </div>
        <div class="col-sm-5 col-md-3 col-lg-2">
          <div class="position-relative">
            <i class="fi-navigation position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
            <select class="form-select form-icon-start bg-transparent" data-select='{
                "classNames": {
                  "containerInner": ["form-select", "form-icon-start", "bg-transparent"]
                }
              }' aria-label="Location radius select">
              <option value="">Any radius</option>
              <option value="5 mi" selected>5 mi</option>
              <option value="10 mi">10 mi</option>
              <option value="20 mi">20 mi</option>
              <option value="30 mi">30 mi</option>
              <option value="40 mi">40 mi</option>
              <option value="50 mi">50 mi</option>
            </select>
          </div>
        </div>
        <div class="col-lg-4 d-flex gap-4">
          <div class="form-check form-switch mb-0">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Online
            </label>
          </div>
          <div class="form-check form-switch mb-0">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Visit clinic
            </label>
          </div>
        </div>
      </div>

      <!-- Sort selector + View switcher -->
      <div class="d-flex align-items-center gap-2 gap-sm-3 mb-3 mb-sm-4">
        <div class="fs-sm text-nowrap"><span class="d-none d-sm-inline">Showing </span>73 results</div>
        <div class="fs-sm fw-semibold text-dark-emphasis ms-auto d-none d-sm-inline">Sort by:</div>
        <div class="position-relative ms-auto ms-sm-0" style="width: 140px">
          <i class="fi-sort position-absolute top-50 start-0 translate-middle-y z-2"></i>
          <select class="form-select bg-transparent border-0 rounded-0 ps-4 pe-1" data-select='{
              "removeItemButton": false,
              "classNames": {
                "containerInner": ["form-select", "bg-transparent", "border-0", "rounded-0", "ps-4", "pe-1"]
              }
            }'>
            <option value="Popular">Popular</option>
            <option value="Rating">Rating</option>
            <option value="Price asc">Price asc</option>
            <option value="Price desc">Price desc</option>
          </select>
        </div>
        <div class="nav ms-n2">
          <a class="nav-link fs-xl text-body-secondary py-0 px-2 active pe-none" href="listings-grid-doctors.html" aria-label="Grid view">
            <i class="fi-grid"></i>
          </a>
          <a class="nav-link fs-xl text-body-secondary py-0 px-2" href="listings-list-doctors.html" aria-label="List view">
            <i class="fi-list"></i>
          </a>
        </div>
      </div>


      <!-- Listings grid views -->
      <div class="row row-cols-1 row-cols-lg-2 g-4">

        <!-- Listing -->
        <div class="col">
          <article class="card hover-effect-opacity overflow-hidden">
            <div class="row g-0">
              <div class="col-sm-4 position-relative bg-body-tertiary" style="min-height: 220px">
                <div class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-3 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                      <span class="badge text-bg-info d-inline-flex align-items-center">
                        Verified
                        <i class="fi-shield ms-1"></i>
                      </span>
                </div>
                <div class="swiper h-100 z-2" data-swiper='{
                      "pagination": {
                        "el": ".swiper-pagination"
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      },
                      "breakpoints": {
                        "991": {
                          "allowTouchMove": false
                        }
                      }
                    }'>
                  <a class="swiper-wrapper h-100" href="single-entry-contractors.html">
                    <div class="swiper-slide">
                      <img src="assets/img/listings/contractors/01.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                    </div>
                    <div class="swiper-slide">
                      <img src="assets/img/listings/contractors/01.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                    </div>
                    <div class="swiper-slide">
                      <img src="assets/img/listings/contractors/01.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                    </div>
                  </a>
                  <div class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                    <button type="button" class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start" aria-label="Prev">
                      <i class="fi-chevron-left fs-lg animate-target"></i>
                    </button>
                  </div>
                  <div class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                    <button type="button" class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end" aria-label="Next">
                      <i class="fi-chevron-right fs-lg animate-target"></i>
                    </button>
                  </div>
                  <div class="swiper-pagination bottom-0 z-1 mb-2" data-bs-theme="light"></div>
                </div>
              </div>
              <div class="col-sm-8 d-flex p-3 p-sm-4" style="min-height: 255px">
                <div class="row flex-lg-nowrap g-0 position-relative pt-1 pt-sm-0">
                  <button type="button" class="btn btn-icon btn-outline-secondary rounded-circle position-absolute top-0 end-0 z-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Bookmark" aria-label="Bookmark">
                    <i class="fi-bookmark fs-base"></i>
                  </button>
                  <div class="col-lg-8 pe-lg-4">
                    <div class="d-flex flex-wrap align-items-center justify-content-between ms-3 ms-sm-0 mb-2">
                      <h3 class="h5 me-2 mb-0">
                        <a class="hover-effect-underline stretched-link" href="single-entry-doctors.html">Dr. Sophia Davis</a>
                      </h3>
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.8</span>
                        <span class="fs-xs text-body-secondary align-self-end">(63)</span>
                      </div>
                    </div>
                    <div class="h6 fs-sm ms-3 ms-sm-0 mb-0">Pediatrician</div>
                    <ul class="list-unstyled flex-row flex-wrap align-items-center gap-3 pt-3 ms-n5 ms-sm-0 mb-3">
                      <li class="badge text-bg-info d-inline-flex align-items-center me-n1">
                        Verified
                        <i class="fi-shield ms-1"></i>
                      </li>
                      <li class="d-flex align-items-center fs-sm">
                        <i class="fi-award fs-base me-1"></i>
                        7 years experience
                      </li>
                      <li class="d-flex align-items-center fs-sm">
                        <i class="fi-baby fs-base me-1"></i>
                        Children
                      </li>
                    </ul>
                    <p class="fs-sm ms-n5 ms-sm-0">Dr. Davis is highly respected in her field, known for her innovative treatment plans and her ability to connect with young patients and their families.</p>
                    <ul class="list-unstyled fs-sm ms-n5 ms-sm-0 mb-0">
                      <li>
                        <span class="fw-semibold text-dark-emphasis me-1">Kids Health Clinic</span>
                        3.1 mi
                      </li>
                      <li>
                        <span class="fw-semibold text-dark-emphasis me-1">Pediatric Medical Center</span>
                        5.2 mi
                      </li>
                    </ul>
                  </div>
                  <hr class="vr flex-shrink-0 d-none d-lg-block m-0">
                  <div class="col-lg-4 d-flex flex-column pt-3 pt-lg-5 ps-lg-4">
                    <ul class="list-unstyled pb-2 pb-lg-4 mb-3">
                      <li class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.7</span>
                        <span class="fs-xs text-body-secondary align-self-end">(26)</span>
                      </li>
                      <li class="d-flex align-items-center gap-1 fs-sm">
                        <i class="fi-thumbs-up"></i>
                        Listing of the month
                      </li>
                      <li class="d-flex align-items-center gap-1 fs-sm">
                        <i class="fi-leaf"></i>
                        Eco-friendly
                      </li>
                    </ul>
                    <button type="button" class="btn btn-outline-dark position-relative z-2 mt-auto" data-bs-toggle="modal" data-bs-target="#connectModal">
                      <i class="fi-mail me-2"></i>
                      Connect
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="card h-100 border-0 z-1">
            <div class="card-body position-relative d-flex">
              <div class="flex-shrink-0">
                <div class="d-md-none" style="width: 48px"></div>
                <div class="d-none d-sm-block d-xl-none" style="width: 100px"></div>
                <div class="d-none d-xl-block" style="width: 150px"></div>
                <div class="ratio" style="--fn-aspect-ratio: calc(164 / 150 * 100%)">
                  <img src="assets/img/listings/doctors/08.jpg" class="bg-body-secondary rounded" alt="Image">
                </div>
              </div>
              <div class="w-100 ps-sm-4">
                <div class="d-flex flex-wrap align-items-center justify-content-between ms-3 ms-sm-0 mb-2">
                  <h3 class="h5 me-2 mb-0">
                    <a class="hover-effect-underline stretched-link" href="single-entry-doctors.html">Dr. Sophia Davis</a>
                  </h3>
                  <div class="d-flex align-items-center gap-1">
                    <i class="fi-star-filled text-warning"></i>
                    <span class="fs-sm text-secondary-emphasis">4.8</span>
                    <span class="fs-xs text-body-secondary align-self-end">(63)</span>
                  </div>
                </div>
                <div class="h6 fs-sm ms-3 ms-sm-0 mb-0">Pediatrician</div>
                <ul class="list-unstyled flex-row flex-wrap align-items-center gap-3 pt-3 ms-n5 ms-sm-0 mb-3">
                  <li class="badge text-bg-info d-inline-flex align-items-center me-n1">
                    Verified
                    <i class="fi-shield ms-1"></i>
                  </li>
                  <li class="d-flex align-items-center fs-sm">
                    <i class="fi-award fs-base me-1"></i>
                    7 years experience
                  </li>
                  <li class="d-flex align-items-center fs-sm">
                    <i class="fi-baby fs-base me-1"></i>
                    Children
                  </li>
                </ul>
                <p class="fs-sm ms-n5 ms-sm-0">Dr. Davis is highly respected in her field, known for her innovative treatment plans and her ability to connect with young patients and their families.</p>
                <ul class="list-unstyled fs-sm ms-n5 ms-sm-0 mb-0">
                  <li>
                    <span class="fw-semibold text-dark-emphasis me-1">Kids Health Clinic</span>
                    3.1 mi
                  </li>
                  <li>
                    <span class="fw-semibold text-dark-emphasis me-1">Pediatric Medical Center</span>
                    5.2 mi
                  </li>
                </ul>
              </div>
            </div>
            <div class="card-footer bg-transparent border-0 pt-0 p-4">
              <hr class="m-0 mb-4">
              <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">
                <div class="d-flex flex-wrap align-items-center gap-2">
                  <div class="h5 me-1 mb-0">From $35.00</div>
                  <div class="fs-sm">Online / Offline / Home visit</div>
                </div>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="offcanvas" data-bs-target="#bookAppointment" aria-controls="bookAppointment">
                  Book an appointment
                </button>
              </div>
            </div>
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded shadow z-n1 d-none-dark"></span>
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary rounded z-n1 d-none d-block-dark"></span>
          </article>
        </div>
      </div>

      <!-- Pagination -->
      <nav class="pt-3 mt-3 mt-lg-4 mb-2 mb-sm-3 mb-md-4 mb-lg-5" aria-label="Listings pagination">
        <ul class="pagination pagination-lg justify-content-center">
          <li class="page-item active" aria-current="page">
              <span class="page-link">
                1
                <span class="visually-hidden">(current)</span>
              </span>
          </li>
          <li class="page-item">
            <a class="page-link" href="#!">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#!">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#!">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#!">5</a>
          </li>
          <li class="page-item">
            <span class="page-link px-2 pe-none">...</span>
          </li>
          <li class="page-item">
            <a class="page-link" href="#!">8</a>
          </li>
        </ul>
      </nav>
    </div>
  </main>
  <section class="bg-light pt-0">
    <div class="container">
      <!-- Background image -->
      <div class="rounded-3 p-3 p-sm-5" style="background-image: url(assets/images/bg/05.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover; border-top-left-radius: 0 !important; border-top-right-radius: 0 !important;">
        <!-- Banner title -->
        <div class="row my-2 my-xl-5">
          <div class="col-md-8 mx-auto">
            <h1 class="text-center text-white">Alle Schausteller Geschäfte</h1>
            <h5 class="text-center text-white">Es wurden <?= $geschaefte->count() ?> Schausteller Geschäfte gefunden.</h5>
          </div>
        </div>

        <!-- Booking from START -->
        <form class="bg-mode shadow rounded-3 position-relative p-4 pe-md-5 pb-5 pb-md-4 mb-4">
          <div class="row g-4 align-items-center">
            <!-- Location -->
            <div class="col-lg-4">
              <div class="form-control-border form-control-transparent form-fs-md d-flex">
                <!-- Icon -->
                <i class="bi bi-geo-alt fs-3 me-2 mt-2"></i>
                <!-- Select input -->
                <div class="flex-grow-1">
                  <label class="form-label">Region</label>
                  <select class="form-select js-choice" data-search-enabled="true">
                    <option value="">Select location</option>
                    <option selected>San Jacinto, USA</option>
                    <option>North Dakota, Canada</option>
                    <option>West Virginia, Paris</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Check in -->
            <div class="col-lg-4">
              <div class="d-flex">
                <!-- Icon -->
                <i class="bi bi-calendar fs-3 me-2 mt-2"></i>
                <!-- Date input -->
                <div class="form-control-border form-control-transparent form-fs-md">
                  <label class="form-label">Art des Geschäfts</label>
                  <input type="text" class="form-control flatpickr" data-mode="range" placeholder="Select date" value="19 Sep to 28 Sep">
                </div>
              </div>
            </div>

            <!-- Guest -->
            <div class="col-lg-4">
              <div class="form-control-border form-control-transparent form-fs-md d-flex">
                <!-- Icon -->
                <i class="bi bi-person fs-3 me-2 mt-2"></i>
                <!-- Dropdown input -->
                <div class="w-100">
                  <label class="form-label">Front von bis</label>
                  <div class="dropdown guest-selector me-2">
                    <input type="text" class="form-guest-selector form-control selection-result" value="2 Guests 1 Room" id="dropdownGuest" data-bs-auto-close="outside" data-bs-toggle="dropdown">

                    <!-- dropdown items -->
                    <ul class="dropdown-menu guest-selector-dropdown" aria-labelledby="dropdownGuest">
                      <!-- Adult -->
                      <li class="d-flex justify-content-between">
                        <div>
                          <h6 class="mb-0">Adults</h6>
                          <small>Ages 13 or above</small>
                        </div>

                        <div class="hstack gap-1 align-items-center">
                          <button type="button" class="btn btn-link adult-remove p-0 mb-0"><i class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                          <h6 class="guest-selector-count mb-0 adults">2</h6>
                          <button type="button" class="btn btn-link adult-add p-0 mb-0"><i class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                        </div>
                      </li>

                      <!-- Divider -->
                      <li class="dropdown-divider"></li>

                      <!-- Child -->
                      <li class="d-flex justify-content-between">
                        <div>
                          <h6 class="mb-0">Child</h6>
                          <small>Ages 13 below</small>
                        </div>

                        <div class="hstack gap-1 align-items-center">
                          <button type="button" class="btn btn-link child-remove p-0 mb-0" ><i class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                          <h6 class="guest-selector-count mb-0 child">0</h6>
                          <button type="button" class="btn btn-link child-add p-0 mb-0" ><i class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                        </div>
                      </li>

                      <!-- Divider -->
                      <li class="dropdown-divider"></li>

                      <!-- Rooms -->
                      <li class="d-flex justify-content-between">
                        <div>
                          <h6 class="mb-0">Rooms</h6>
                          <small>Max room 8</small>
                        </div>

                        <div class="hstack gap-1 align-items-center">
                          <button type="button" class="btn btn-link room-remove p-0 mb-0" ><i class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                          <h6 class="guest-selector-count mb-0 rooms">1</h6>
                          <button type="button" class="btn btn-link room-add p-0 mb-0" ><i class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Button -->
          <div class="btn-position-md-middle">
            <a  class="icon-lg btn btn-round btn-primary mb-0" href="#"><i class="bi bi-search fa-fw"></i></a>
          </div>
        </form>
        <!-- Booking from END -->
      </div>
    </div>
  </section>
  <!-- =======================
  Main Banner END -->
<!-- =======================
Cab list START -->

<section class="bg-light pt-0">
  <div class="container">
    <div class="vstack gap-4">
      <div class="container my-5">
        <h1>Demo DB Content</h1>
        <p>This demo content comes from the database connection configured in <code>config.php</code></p>

        <h2>Businesses</h2>
        <p>These entries are fetched from <code>$businessesPage->children()</code>. See <code>models/businesses.php</code> for the database query.</p>

        <table class="table table-bordered">
          <thead>
          <tr>
            <th>ID</th>
            <th>Slug</th>
            <th>Title</th>
            <th>Owner</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach ($geschaefte as $geschaeft): ?>
            <tr>
              <td><?= $geschaeft->uuidNoPrefix() ?></td>
              <td><?= $geschaeft->slug() ?></td>
              <td><?= $geschaeft->title() ?></td>
              <td><?= $geschaeft->owner() ?></td>
            </tr>
          <?php endforeach ?>
          </tbody>
        </table>
      <div class="row g-2 g-md-3">
        <?php $fruchtweine_products = $page->children()->sortBy('title', 'asc'); ?>
        <?php foreach ($fruchtweine_products as $fruchtweine_product): ?>
          <div class="col-12 col-xl-6 level-4 result-item-col">
            <div class="result-card bg-white rounded-3 p-3 p-sm-0 position-relative">
              <div class="row  align-items-center ">
                <div class="col-12 col-sm-4 result-card-col-img position-relative">
                  <a href="/geschafte/kindersport-karusell">
                    <img src="/assets/images/test/test.jpg" class="result-item-profile-img lazy" style="display: block; border-radius: 10px; border-top-right-radius: 0; border-bottom-right-radius: 0;">
                  </a>
                </div>
                <div class="col-12 col-sm-8 result-card-col-txt">
                  <div class="pt-2 ps-xl-0 py-xl-3 pe-xl-3">
                    <div class="h4 mb-1 d-inline-block fw-bold">
                      <a href="<?= $fruchtweine_product->url() ?>" class="text-decoration-none"><?= $fruchtweine_product->title()->esc() ?></a>
                    </div>
                    <div class="">
                      <div>
                        <strong>Art des Geschäfts</strong> • Front: 3 m<br />Mönchengladbach + 100 km
                        <?php $user = $fruchtweine_product->owner()->toUser(); ?>
                        <?= $user->username() ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- CLOSE row -->
            </div> <!-- CLOSE bg-white -->
          </div>
        <?php endforeach ?>
        <!-- Cab item END -->
      </div>
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