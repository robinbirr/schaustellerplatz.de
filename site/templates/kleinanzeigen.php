<?php snippet('header') ?>
<section class="bg-light pt-0">
  <div class="container">
    <!-- Background image -->
    <div class="rounded-3 p-3 p-sm-5" style="background-image: url(assets/images/bg/05.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover; border-top-left-radius: 0 !important; border-top-right-radius: 0 !important;">
      <!-- Banner title -->
      <div class="row my-2 my-xl-5">
        <div class="col-md-8 mx-auto">
          <h1 class="text-center text-white">Schausteller Kleinanzeigen</h1>
          <h5 class="text-center text-white">Es wurden 120 Kleinanzeigen für Schausteller gefunden.</h5>
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
                <label class="form-label">Location</label>
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
                <label class="form-label">Check in - out</label>
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
                <label class="form-label">Guests & rooms</label>
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
Hotel list START -->
<section class="bg-light pt-0">
  <div class="container">
    <!-- Tabs and alert START -->
    <div class="row mb-4">
      <div class="col-12">

        <!-- Buttons -->
        <div class="hstack gap-3 justify-content-between justify-content-md-end">
          <!-- Filter offcanvas button -->
          <button class="btn btn-primary-soft btn-primary-check mb-0 d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
            <i class="fa-solid fa-sliders-h me-1"></i> Show filters
          </button>
          <!-- tabs -->
          <a href="<?php if (!$kirby->user()): ?>/anmelden<?php else: ?>/anmelden<?php endif; ?>" class="btn btn-primary mb-0" type="button">
            <i class="bi bi-plus-lg"></i> Anzeige aufgeben
          </a>
        </div>
      </div>
    </div>
    <!-- Tabs and alert END -->

    <div class="row">
      <!-- Left sidebar START -->
      <aside class="col-xl-4 col-xxl-3">
        <!-- Responsive offcanvas body START -->
        <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Advance Filters</h5>
            <button  type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body flex-column p-3 p-xl-0">
            <form class="rounded-3">
              <!-- Hotel type START -->
              <div class="card card-body rounded-0 rounded-top p-4">
                <!-- Title -->
                <h6 class="mb-2">Hotel Type</h6>
                <!-- Hotel Type group -->
                <div class="col-12">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="hotelType1">
                    <label class="form-check-label" for="hotelType1">All</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="hotelType2">
                    <label class="form-check-label" for="hotelType2">Hotel</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="hotelType3">
                    <label class="form-check-label" for="hotelType3">Apartment</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="hotelType4">
                    <label class="form-check-label" for="hotelType4">Resort</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="hotelType5">
                    <label class="form-check-label" for="hotelType5">Villa</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="hotelType6">
                    <label class="form-check-label" for="hotelType6">Lodge</label>
                  </div>

                  <!-- Collapse body -->
                  <div class="multi-collapse collapse" id="hotelType">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="hotelType7">
                      <label class="form-check-label" for="hotelType7">Guest House</label>
                    </div>
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="hotelType10">
                      <label class="form-check-label" for="hotelType10">Cottage</label>
                    </div>
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="hotelType8">
                      <label class="form-check-label" for="hotelType8">Beach Hut</label>
                    </div>
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="hotelType9">
                      <label class="form-check-label" for="hotelType9">Farm house</label>
                    </div>
                  </div>
                  <!-- Collapse button -->
                  <a class="p-0 mb-0 mt-2 btn-more d-flex align-items-center collapsed" data-bs-toggle="collapse" href="#hotelType" role="button" aria-expanded="false" aria-controls="hotelType">
                    See <span class="see-more ms-1">more</span><span class="see-less ms-1">less</span><i class="fa-solid fa-angle-down ms-2"></i>
                  </a>
                </div>
              </div>
              <!-- Hotel type END -->

              <hr class="my-0"> <!-- Divider -->

              <!-- Price range START -->
              <div class="card card-body rounded-0 p-4">
                <!-- Title -->
                <h6 class="mb-2">Price range</h6>
                <!-- Price range group -->
                <div class="col-12">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="priceRange1">
                    <label class="form-check-label" for="priceRange1">Up to $500</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="priceRange2">
                    <label class="form-check-label" for="priceRange2">$500 - $1000</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="priceRange3">
                    <label class="form-check-label" for="priceRange3">$1000 - $1500</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="priceRange4">
                    <label class="form-check-label" for="priceRange4">$1500 - $2000</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="priceRange5">
                    <label class="form-check-label" for="priceRange5">$2000+</label>
                  </div>
                </div>
              </div>
              <!-- Price range END -->

              <hr class="my-0"> <!-- Divider -->

              <!-- Popular type START -->
              <div class="card card-body rounded-0 p-4">
                <!-- Title -->
                <h6 class="mb-2">Popular Type</h6>
                <!-- Popular Type group -->
                <div class="col-12">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="popolarType1">
                    <label class="form-check-label" for="popolarType1">Free Breakfast Included</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="popolarType2">
                    <label class="form-check-label" for="popolarType2">Pay At Hotel Available</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="popolarType3">
                    <label class="form-check-label" for="popolarType3">Free Cancellation Available</label>
                  </div>
                </div>
              </div>
              <!-- Popular type END -->

              <hr class="my-0"> <!-- Divider -->

              <!-- Customer Rating START -->
              <div class="card card-body rounded-0 p-4">
                <!-- Title -->
                <h6 class="mb-2">Customer Rating</h6>
                <!-- Customer Rating group -->
                <ul class="list-inline mb-0 g-3">
                  <!-- Item -->
                  <li class="list-inline-item mb-0">
                    <input type="checkbox" class="btn-check" id="btn-check-c1">
                    <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c1">3+</label>
                  </li>
                  <!-- Item -->
                  <li class="list-inline-item mb-0">
                    <input type="checkbox" class="btn-check" id="btn-check-c2">
                    <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c2">3.5+</label>
                  </li>
                  <!-- Item -->
                  <li class="list-inline-item mb-0">
                    <input type="checkbox" class="btn-check" id="btn-check-c3">
                    <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c3">4+</label>
                  </li>
                  <!-- Item -->
                  <li class="list-inline-item mb-0">
                    <input type="checkbox" class="btn-check" id="btn-check-c4">
                    <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c4">4.5+</label>
                  </li>
                </ul>
              </div>
              <!-- Customer Rating END -->

              <hr class="my-0"> <!-- Divider -->

              <!-- Rating Star START -->
              <div class="card card-body rounded-0 p-4">
                <!-- Title -->
                <h6 class="mb-2">Rating Star</h6>
                <!-- Rating Star group -->
                <ul class="list-inline mb-0 g-3">
                  <!-- Item -->
                  <li class="list-inline-item mb-0">
                    <input type="checkbox" class="btn-check" id="btn-check-6">
                    <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-6">1<i class="bi bi-star-fill"></i></label>
                  </li>
                  <!-- Item -->
                  <li class="list-inline-item mb-0">
                    <input type="checkbox" class="btn-check" id="btn-check-7">
                    <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-7">2<i class="bi bi-star-fill"></i></label>
                  </li>
                  <!-- Item -->
                  <li class="list-inline-item mb-0">
                    <input type="checkbox" class="btn-check" id="btn-check-8">
                    <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-8">3<i class="bi bi-star-fill"></i></label>
                  </li>
                  <!-- Item -->
                  <li class="list-inline-item mb-0">
                    <input type="checkbox" class="btn-check" id="btn-check-15">
                    <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-15">4<i class="bi bi-star-fill"></i></label>
                  </li>
                  <!-- Item -->
                  <li class="list-inline-item mb-0">
                    <input type="checkbox" class="btn-check" id="btn-check-16">
                    <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-16">5<i class="bi bi-star-fill"></i></label>
                  </li>
                </ul>
              </div>
              <!-- Rating Star END -->

              <hr class="my-0"> <!-- Divider -->

              <!-- Amenities START -->
              <div class="card card-body rounded-0 rounded-bottom p-4">
                <!-- Title -->
                <h6 class="mb-2">Amenities</h6>
                <!-- Amenities group -->
                <div class="col-12">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="amenitiesType1">
                    <label class="form-check-label" for="amenitiesType1">All</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="amenitiesType2">
                    <label class="form-check-label" for="amenitiesType2">Air Conditioning</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="amenitiesType3">
                    <label class="form-check-label" for="amenitiesType3">Bar</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="amenitiesType4">
                    <label class="form-check-label" for="amenitiesType4">Bonfire</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="amenitiesType5">
                    <label class="form-check-label" for="amenitiesType5">Business Services</label>
                  </div>
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="amenitiesType6">
                    <label class="form-check-label" for="amenitiesType6">Caretaker</label>
                  </div>

                  <!-- Collapse body -->
                  <div class="multi-collapse collapse" id="amenitiesCollapes">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="amenitiesType7">
                      <label class="form-check-label" for="amenitiesType7">Dining</label>
                    </div>
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="amenitiesType8">
                      <label class="form-check-label" for="amenitiesType8">Free Internet</label>
                    </div>
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="amenitiesType9">
                      <label class="form-check-label" for="amenitiesType9">Hair nets</label>
                    </div>
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="amenitiesType10">
                      <label class="form-check-label" for="amenitiesType10">Masks</label>
                    </div>
                  </div>
                  <!-- Collapse button -->
                  <a class="p-0 mb-0 mt-2 btn-more d-flex align-items-center collapsed" data-bs-toggle="collapse" href="#amenitiesCollapes" role="button" aria-expanded="false" aria-controls="amenitiesCollapes">
                    See <span class="see-more ms-1">more</span><span class="see-less ms-1">less</span><i class="fa-solid fa-angle-down ms-2"></i>
                  </a>
                </div>
              </div>
              <!-- Amenities END -->
            </form><!-- Form End -->
          </div>
          <!-- Buttons -->
          <div class="d-flex justify-content-between p-2 p-xl-0 mt-xl-4">
            <button class="btn btn-link p-0 mb-0">Clear all</button>
            <button class="btn btn-primary mb-0">Filter Result</button>
          </div>
        </div>
        <!-- Responsive offcanvas body END -->
      </aside>
      <!-- Left sidebar END -->

      <!-- Main content START -->
      <div class="col-xl-8 col-xxl-9">
        <div class="vstack gap-4">

          <!-- Card item START -->
          <div class="kleinanzeigen-element card">
            <div class="row g-0">
              <!-- Card img -->
              <div class="col-md-4 position-relative">

                <!-- Overlay item -->
                <div class="position-absolute top-0 start-0 z-index-1 m-3">
                  <div class="badge text-bg-primary">Neu</div>
                </div>
                <div class="position-absolute bottom-0 end-0 z-index-1 m-3">
                  <div class="badge text-bg-dark"><i class="bi bi-camera-fill"></i> 3</div>
                </div>

                <!-- Slider START -->
                <div class="overflow-hidden" style="display: block; border-radius: 10px; border-top-right-radius: 0; border-bottom-right-radius: 0;">
                    <img src="/assets/images/category/hotel/4by3/04.jpg" alt="Card image">
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
                  <div class="mt-md-auto">
                    <div class="badge text-bg-success rounded-pill">Premium</div>
                    <div class="badge text-bg-secondary rounded-pill">Angebot</div>
                    <div class="badge text-bg-secondary rounded-pill">Versand möglich</div>
                  </div>
                </div>
              </div>
            </div>
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
      </div>
      <!-- Main content END -->
    </div> <!-- Row END -->
  </div>
</section>
<?php snippet('footer') ?>
