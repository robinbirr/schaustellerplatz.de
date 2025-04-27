<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/') ?>
<main class="content-wrapper">
  <div class="container pt-4 pt-sm-5 pb-5 mb-xxl-3">
    <div class="row pt-2 pt-sm-0 pt-lg-2 pb-2 pb-sm-3 pb-md-4 pb-lg-5">


      <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <?php snippet('konto-menu') ?>


      <!-- Account settings content -->
      <div class="col-lg-9">
        <h1 class="h2 pb-2 pb-lg-3">Einstellungen</h1>

        <!-- Nav pills -->
        <div class="nav overflow-x-auto mb-3">
          <ul class="nav nav-pills flex-nowrap gap-2 pb-2 mb-1" role="tablist">
            <li class="nav-item me-1" role="presentation">
              <button type="button" class="nav-link text-nowrap active" id="personal-info-tab" data-bs-toggle="pill" data-bs-target="#personal-info" role="tab" aria-controls="personal-info" aria-selected="true">
                Personal info
              </button>
            </li>
            <li class="nav-item me-1" role="presentation">
              <button class="nav-link text-nowrap" id="security-tab" data-bs-toggle="pill" data-bs-target="#security" type="button" role="tab" aria-controls="security" aria-selected="false">
                Password and security
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link text-nowrap" id="notifications-tab" data-bs-toggle="pill" data-bs-target="#notifications" type="button" role="tab" aria-controls="notifications" aria-selected="false">
                Notification settings
              </button>
            </li>
          </ul>
        </div>

        <div class="tab-content">

          <!-- Personal info tab -->
          <div class="tab-pane fade show active" id="personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
            <div class="vstack gap-4">
              <div class="row gx-4">
                <div class="card col-6 col-lg-4 col-xl-4 border-0">
                  <div class="card-body shadow rounded-3">
                    <i class="bi bi-shield-check h3"></i>
                    <h5 class="card-title mt-3">Datenschutz</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card col-6 col-lg-4 col-xl-4 border-0">
                  <div class="card-body shadow">
                    <i class="bi bi-shield-check h3"></i>
                    <h5 class="card-title mt-3">Datenschutz</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card col-6 col-lg-4 col-xl-4 border-0">
                  <div class="card-body shadow">
                    <i class="bi bi-shield-check h3"></i>
                    <h5 class="card-title mt-3">Datenschutz</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>

              <!-- Profile completeness info card -->
              <div class="card bg-warning-subtle border-0 mb-2">
                <div class="card-body d-flex align-items-center">
                  <div class="circular-progress text-warning flex-shrink-0 ms-n2 ms-sm-0" role="progressbar" style="--fn-progress: 65" aria-label="Warning progress" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                    <svg class="progress-circle">
                      <circle class="progress-background d-none-dark" r="0" style="stroke: #fff"></circle>
                      <circle class="progress-background d-none d-block-dark" r="0" style="stroke: rgba(255,255,255, .1)"></circle>
                      <circle class="progress-bar" r="0"></circle>
                    </svg>
                    <h5 class="position-absolute top-50 start-50 translate-middle text-center mb-0">65%</h5>
                  </div>
                  <div class="ps-3 ps-sm-4">
                    <h3 class="h6 pb-1 mb-2">Complete your profile</h3>
                    <ul class="list-unstyled flex-row flex-wrap fs-sm mb-0">
                      <li class="d-flex me-3">
                        <i class="fi-plus fs-base me-2" style="margin-top: .1875rem"></i>
                        Add the languages you speak
                      </li>
                      <li class="d-flex me-3">
                        <i class="fi-plus fs-base me-2" style="margin-top: .1875rem"></i>
                        Verify your email
                      </li>
                      <li class="d-flex">
                        <i class="fi-plus fs-base me-2" style="margin-top: .1875rem"></i>
                        Add date of birth
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Profile picture (Avatar) -->
              <div class="d-flex align-items-start align-items-sm-center mb-2">
                <div class="ratio ratio-1x1 hover-effect-opacity bg-body-tertiary border rounded-circle overflow-hidden" style="width: 124px">
                  <img src="assets/img/account/avatar-lg.jpg" alt="Avatar">
                  <div class="hover-effect-target position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 opacity-0">
                    <button type="button" class="btn btn-icon btn-sm btn-light position-relative z-2" aria-label="Remove">
                      <i class="fi-trash fs-base"></i>
                    </button>
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 z-1"></span>
                  </div>
                </div>
                <div class="ps-3 ps-sm-4">
                  <p class="fs-sm" style="max-width: 440px">Your profile photo will appear on your profile and directory listing. PNG or JPG no bigger than 1000px wide and tall.</p>
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="fi-refresh-ccw fs-sm ms-n1 me-2"></i>
                    Update photo
                  </button>
                </div>
              </div>

              <!-- Settings form -->
              <form class="needs-validation" novalidate>
                <div class="row row-cols-1 row-cols-sm-2 g-4 mb-4">
                  <div class="col position-relative">
                    <label for="fn" class="form-label fs-base">First name *</label>
                    <input type="text" class="form-control form-control-lg" id="fn" value="Michael" required>
                    <div class="invalid-tooltip bg-transparent p-0">Enter your first name!</div>
                  </div>
                  <div class="col position-relative">
                    <label for="ln" class="form-label fs-base">Last name *</label>
                    <input type="text" class="form-control form-control-lg" id="ln" value="Williams" required>
                    <div class="invalid-tooltip bg-transparent p-0">Enter your last name!</div>
                  </div>
                  <div class="col position-relative">
                    <label for="email" class="form-label d-flex align-items-center fs-base">Email address * <span class="badge text-danger bg-danger-subtle ms-2">Verify email</span></label>
                    <input type="email" class="form-control form-control-lg" id="email" value="m.williams@example.com" required>
                    <div class="invalid-tooltip bg-transparent p-0">Enter a valid email address!</div>
                  </div>
                  <div class="col position-relative">
                    <label for="phone" class="form-label d-flex align-items-center fs-base">Phone number * <span class="badge bg-success ms-2">Verified</span></label>
                    <input type="tel" class="form-control form-control-lg" id="phone" data-input-format='{"numericOnly": true, "delimiters": ["(", ")", " ", "-", " "], "blocks": [0, 3, 0, 3, 4]}' value="(212) 555-7890" placeholder="(___) ___-____" required>
                    <div class="invalid-tooltip bg-transparent p-0">Enter a valid phone number!</div>
                  </div>
                  <div class="col">
                    <label class="form-label fs-base">Languages you speak</label>
                    <select class="form-select form-select-lg" data-select multiple aria-label="Languages select">
                      <option value="">Select language</option>
                      <option value="English">English</option>
                      <option value="Spanish">Spanish</option>
                      <option value="French">French</option>
                      <option value="German">German</option>
                      <option value="Italian">Italian</option>
                    </select>
                  </div>
                  <div class="col">
                    <label for="birth-date" class="form-label fs-base">Date of birth</label>
                    <div class="position-relative">
                      <input type="text" class="form-control form-control-lg form-icon-end" id="birth-date" data-datepicker='{"dateFormat": "F j, Y"}' placeholder="Choose date">
                      <i class="fi-calendar fs-lg position-absolute top-50 end-0 translate-middle-y me-3"></i>
                    </div>
                  </div>
                </div>
                <div class="position-relative mb-4">
                  <label for="address" class="form-label fs-base">Address *</label>
                  <input type="text" class="form-control form-control-lg" id="address" value="New York, Brooklyn" required>
                  <div class="invalid-tooltip bg-transparent p-0">Enter your address!</div>
                </div>
                <div class="pb-2 mb-4">
                  <label for="user-info" class="form-label fs-base">Information about you</label>
                  <textarea class="form-control form-control-lg bg-transparent" id="user-info" rows="6">Extensive experience in rentals and a vast database means I can quickly find the options that are right for you. Looking for a seamless and exciting rental experience? Contact me today - I promise it won't be boring! Your perfect home is just a call away.</textarea>
                </div>
                <div class="d-flex gap-3">
                  <a class="btn btn-lg btn-secondary" href="account-profile.html">Cancel</a>
                  <button type="submit" class="btn btn-lg btn-dark">Save changes</button>
                </div>
              </form>
            </div>
          </div>


          <!-- Password and security tab -->
          <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
            <p class="mb-sm-4">Your current email address is <span class="fw-medium text-primary">m.williams@example.com</span></p>

            <!-- Change password form -->
            <form class="needs-validation" novalidate>
              <div class="row row-cols-1 row-cols-sm-2 g-4 mb-4">
                <div class="col">
                  <label for="current-password" class="form-label fs-base">Current password</label>
                  <div class="password-toggle">
                    <input type="password" class="form-control form-control-lg" id="current-password" required>
                    <div class="invalid-tooltip bg-transparent p-0">Incorrect password. Please try again.</div>
                    <label class="password-toggle-button" aria-label="Show/hide password">
                      <input type="checkbox" class="btn-check">
                    </label>
                  </div>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 g-4 mb-4">
                <div class="col">
                  <label for="new-password" class="form-label fs-base">New password <span class="fs-sm fw-normal text-body-secondary">(Min 8 chars)</span></label>
                  <div class="password-toggle">
                    <input type="password" class="form-control form-control-lg" minlength="8" id="new-password" required>
                    <div class="invalid-tooltip bg-transparent p-0">Please ensure password is at least 8 characters long.</div>
                    <label class="password-toggle-button" aria-label="Show/hide password">
                      <input type="checkbox" class="btn-check">
                    </label>
                  </div>
                </div>
                <div class="col">
                  <label for="confirm-new-password" class="form-label fs-base">Confirm new password</label>
                  <div class="password-toggle">
                    <input type="password" class="form-control form-control-lg" minlength="8" id="confirm-new-password" required>
                    <div class="invalid-tooltip bg-transparent p-0">Passwords do not match.</div>
                    <label class="password-toggle-button" aria-label="Show/hide password">
                      <input type="checkbox" class="btn-check">
                    </label>
                  </div>
                </div>
              </div>
              <div class="d-flex gap-3">
                <button type="reset" class="btn btn-lg btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-lg btn-dark">Update password</button>
              </div>
            </form>

            <!-- Device history -->
            <h3 class="h4 pt-5 mt-md-3 mb-sm-4">Device history</h3>
            <div class="row g-3 g-xl-4 mb-3 mb-md-4">
              <div class="col-sm-6 col-md-4">
                <div class="card h-100">
                  <div class="dropdown position-absolute top-0 end-0 mt-2 me-2">
                    <button type="button" class="btn btn-icon btn-sm fs-xl text-dark-emphasis border-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Actions">
                      <i class="fi-more-vertical"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-min-width: 8rem">
                      <li>
                        <a class="dropdown-item" href="#!">
                          <i class="fi-log-out opacity-75 me-2"></i>
                          Sign out
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body pb-2">
                    <i class="fi-computer fs-3 text-body-tertiary pb-1 mb-2"></i>
                    <h6 class="mb-0">Mac - New York, USA</h6>
                  </div>
                  <div class="card-footer d-flex align-items-center gap-2 bg-transparent border-0 pt-0 pb-4">
                    <span class="fs-sm text-body-secondary">Chrome</span>
                    <span class="badge text-success bg-success-subtle">Active now</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="card h-100">
                  <div class="dropdown position-absolute top-0 end-0 mt-2 me-2">
                    <button type="button" class="btn btn-icon btn-sm fs-xl text-dark-emphasis border-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Actions">
                      <i class="fi-more-vertical"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-min-width: 8rem">
                      <li>
                        <a class="dropdown-item" href="#!">
                          <i class="fi-log-out opacity-75 me-2"></i>
                          Sign out
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body pb-2">
                    <i class="fi-smartphone fs-3 text-body-tertiary pb-1 mb-2"></i>
                    <h6 class="mb-0">iPhone 15 - New York, USA</h6>
                  </div>
                  <div class="card-footer d-flex align-items-center gap-1 bg-transparent border-0 pt-0 pb-4">
                    <span class="fs-sm text-body-secondary">Finder App</span>
                    <i class="fi-bullet"></i>
                    <span class="fs-sm text-body-secondary">20 hours ago</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="nav">
              <a class="nav-link position-relative px-0" href="#!">
                <i class="fi-log-out fs-base me-2"></i>
                <span class="hover-effect-underline stretched-link">Sign out of all sessions</span>
              </a>
            </div>

            <!-- Delete account -->
            <h3 class="h4 pt-5 mt-n2 mt-md-0 mt-lg-2 mt-xl-3 mb-sm-4">Delete account</h3>
            <p class="fs-sm mb-sm-4">When you delete your account, your public profile will be deactivated immediately. If you change your mind before the 14 days are up, sign in with your email and password, and we'll send a link to reactivate account.</p>
            <div class="form-check mb-4">
              <input type="checkbox" class="form-check-input" id="confirm-deletion">
              <label for="confirm-deletion" class="form-check-label">Yes, I want to delete my account</label>
            </div>
            <button type="button" class="btn btn-lg btn-outline-danger">Delete account</button>
          </div>


          <!-- Notification settings tab -->
          <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">

            <!-- Item -->
            <div class="d-sm-flex align-items-center justify-content-between border-bottom pb-4">
              <div class="me-4 mb-md-2">
                <h3 class="h6 mb-2">New rental alerts</h3>
                <p class="fs-sm pb-1 pb-sm-0 mb-sm-0">New rentals that match your <a class="text-body" href="account-favorites.html">Favorites</a></p>
              </div>
              <div class="d-flex gap-4 gap-xl-5 mb-md-2">
                <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                  <label for="email-1" class="form-check-label">Email</label>
                  <input type="checkbox" class="form-check-input ms-2" role="switch" id="email-1" checked>
                </div>
                <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                  <label for="phone-1" class="form-check-label mb-1">Phone</label>
                  <input type="checkbox" class="form-check-input ms-2" role="switch" id="phone-1">
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="d-sm-flex align-items-center justify-content-between border-bottom py-4">
              <div class="me-4 my-md-2">
                <h3 class="h6 mb-2">Rental status updates</h3>
                <p class="fs-sm pb-1 pb-sm-0 mb-sm-0">Updates like price changes and off-market status on your <a class="text-body" href="account-favorites.html">Favorites</a></p>
              </div>
              <div class="d-flex gap-4 gap-xl-5 my-md-2">
                <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                  <label for="email-2" class="form-check-label">Email</label>
                  <input type="checkbox" class="form-check-input ms-2" role="switch" id="email-2" checked>
                </div>
                <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                  <label for="phone-2" class="form-check-label mb-1">Phone</label>
                  <input type="checkbox" class="form-check-input ms-2" role="switch" id="phone-2">
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="d-sm-flex align-items-center justify-content-between border-bottom py-4">
              <div class="me-4 my-md-2">
                <h3 class="h6 mb-2">Finder recommendations</h3>
                <p class="fs-sm pb-1 pb-sm-0 mb-sm-0">Rentals we think you'll like. These recommendations may be slightly outside your search criteria</p>
              </div>
              <div class="d-flex gap-4 gap-xl-5 my-md-2">
                <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                  <label for="email-3" class="form-check-label">Email</label>
                  <input type="checkbox" class="form-check-input ms-2" role="switch" id="email-3">
                </div>
                <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                  <label for="phone-3" class="form-check-label mb-1">Phone</label>
                  <input type="checkbox" class="form-check-input ms-2" role="switch" id="phone-3">
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="d-sm-flex align-items-center justify-content-between border-bottom py-4">
              <div class="me-4 my-md-2">
                <h3 class="h6 mb-2">Featured news</h3>
                <p class="fs-sm pb-1 pb-sm-0 mb-sm-0">News and tips you may be interested in</p>
              </div>
              <div class="d-flex gap-4 gap-xl-5 my-md-2">
                <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                  <label for="email-4" class="form-check-label">Email</label>
                  <input type="checkbox" class="form-check-input ms-2" role="switch" id="email-4">
                </div>
                <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                  <label for="phone-4" class="form-check-label mb-1">Phone</label>
                  <input type="checkbox" class="form-check-input ms-2" role="switch" id="phone-4" checked>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="d-sm-flex align-items-center justify-content-between border-bottom py-4">
              <div class="me-4 my-md-2">
                <h3 class="h6 mb-2">Finder extras</h3>
                <p class="fs-sm pb-1 pb-sm-0 mb-sm-0">Occasional notifications about new features to make finding the perfect rental easy</p>
              </div>
              <div class="d-flex gap-4 gap-xl-5 my-md-2">
                <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                  <label for="email-5" class="form-check-label">Email</label>
                  <input type="checkbox" class="form-check-input ms-2" role="switch" id="email-5" checked>
                </div>
                <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                  <label for="phone-5" class="form-check-label mb-1">Phone</label>
                  <input type="checkbox" class="form-check-input ms-2" role="switch" id="phone-5" checked>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
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
          <h3 class="card-header-title">Einstellungen</h3>

          <div class=" rounded-3 bg-white p-3 p-md-4 p-xxl-5 dev-dashed">
            <div class="row g-4 g-xl-5">
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/mein-konto/datenschutz" class="h2 mb-2 text-decoration-none"><i class="bi bi-shop-window"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/" class="text-decoration-none">Meine Geschäfte</a></div>
              </div>
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/mein-konto/datenschutz" class="h2 mb-2 text-decoration-none"><i class="bi bi-shield-check"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/" class="text-decoration-none">Datenschutz</a></div>
              </div>
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/mein-konto/kennwort" class="h2 mb-2 text-decoration-none"><i class="bi bi-lock"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/" class="text-decoration-none">Kennwort ändern</a></div>
              </div>
              <div class="col-6 col-lg-4 col-xl-3 text-center">
                <div><a href="/email-verwaltung?hash=Y29tcGFueV9lbWFpbCUzRHJvYmluJTQwYmlycndlcmsuZGUlMjZhJTNEMQ==" target="_blank" class="h2 mb-2 text-decoration-none"><i class="bi bi-envelope-at"></i></a></div>
                <div class="pt-1 dev-dashed"></div>					<div><a href="/" target="_blank" class="text-decoration-none">E-Mail-Einstellungen</a></div>
              </div>
            </div>
          </div>


          <!-- Personal info START -->

        </div>
      </div>
      <!-- Main content END -->

    </div>
  </div>
</section>
<!-- =======================
Content END -->
<?php snippet('footer') ?>
