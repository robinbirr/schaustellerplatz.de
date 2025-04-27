<?php snippet('header') ?>
<?php $user = $kirby->user();
?>
<!-- =======================
Content START -->
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

        <!-- =======================
Main banner START -->
        <section class="price-wrap pt-4 pt-sm-0">
          <div class="container">
            <div class="row">
              <!-- Title -->
              <div class="col-xl-10 mx-auto text-center">
                <h2 class="mb-2">Mein Paket</h2>
                <p class="lead mb-0">Simple, transparent pricing that grows with you. Try any plan free for 30 days</p>

                <!-- Switch START -->
                <form class="d-flex align-items-center justify-content-center mt-5">
                  <!-- Label -->
                  <span class="mb-0 fw-bold">Monatlich</span>
                  <!-- Switch -->
                  <div class="form-check form-switch form-check-lg mx-3 mb-0">
                    <input class="form-check-input mt-0 price-toggle" type="checkbox" id="flexSwitchCheckDefault">
                  </div>
                  <!-- Label -->
                  <div class="position-relative">
                    <span class="mb-0 fw-bold">12 Monate</span>
                    <span class="rotate-10 badge text-bg-warning ms-1 position-absolute top-0 start-100 translate-middle mt-n4 ms-n7 ms-sm-n3">Tipp</span>
                  </div>
                </form>
                <!-- Switch END -->
              </div>
            </div> <!-- Row END -->
            <!-- Pricing START -->
            <div class="row g-4 justify-content-center mt-5">
              <?php
              // using the `toStructure()` method, we create a structure collection
              $pakete = $site->find('konto')->pakete()->toStructure();
              // we can then loop through the entries and render the individual fields
              foreach ($pakete as $paket): ?>
                <div class="col-md-6 col-lg-6 <?= $paket->title()->lower() ?>">
                  <div class="mein-paket-element card rounded-3<?php if ($paket->title() == 'Premium'): ?> bg-dark text-white<?php endif; ?>">
                    <!-- Card header -->
                    <div class="d-flex justify-content-between align-items-center p-5">
                      <div>
                        <h2 class="mb-0<?php if ($paket->title() == 'Premium'): ?> text-white<?php endif; ?>"><?= $paket->title()->html() ?></h2>
                        <div class="hstack gap-2">
                          <?php if ($user->role()->name() == 'free' && $paket->title() == 'Free'): ?>
                            <span class="badge rounded-pill text-bg-success">Mein Paket</span>
                          <?php endif; ?>
                          <?php if ($paket->title() == 'Free'): ?>
                            <span class="fw-light mb-0">100% kostenlos</span>
                          <?php endif; ?>
                          <?php if ($user->role()->name() == 'premium' && $paket->title() == 'Premium'): ?>
                            <span class="badge rounded-pill text-bg-success">Mein Paket</span>
                          <?php endif; ?>
                          <?php if ($paket->title() == 'Premium'): ?>
                            <div class="hstack gap-2">
                              <span class="plan-price mb-0" data-monthly-price="<?= $paket->preis_monat()->html() ?> €" data-annual-price="<?= $paket->preis_jahr()->html() ?> €"><?= $paket->preis_monat()->html() ?> €</span>
                              <span class="fw-light mb-0">/ Monat*</span>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>

                    <!-- Card body -->
                    <div class="card-body p-5 pt-0">
                      <!-- List -->
                      <ul class="list-unstyled mb-0">
                        <?php foreach ($site->find('konto')->pakete()->split() as $funktion): ?>
                          <li class="mb-2<?php if ($paket->title() == 'Premium'): ?> fw-bold<?php endif; ?>"><i class="bi bi-check-circle-fill me-2"></i><?= $funktion ?></li>
                        <?php endforeach ?>
                      </ul>
                    </div>
                    <?php if ($user->role()->name() === 'free' && $paket->title() == 'Premium'): ?>
                      <div class="p-4 pt-0">
                        <a href="/konto/bestellen?premium=yes&duration=1" id="paket-bestellen" class="btn btn-lg btn-primary w-100 mb-0 rounded-pill" style="font-size: 1.3rem">Paket auswählen</a>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endforeach ?>
              <!-- Price item START -->
              <div class="col-md-6 col-lg-6">
                <div class="mein-paket-element card rounded-3">
                  <!-- Card header -->
                  <div class="d-flex justify-content-between align-items-center p-5">
                    <div>
                      <h2 class="mb-0">Free</h2>
                      <div class="hstack gap-2">
                        <?php if ($user->role()->name() === 'free'): ?><span class="badge rounded-pill text-bg-success">Mein Paket</span><?php endif; ?>
                        <span class="fw-light mb-0">100% kostenlos</span>
                      </div>
                    </div>
                  </div>

                  <!-- Card body -->
                  <div class="card-body p-5 pt-0">
                    <!-- List -->
                    <ul class="list-unstyled mb-0">
                      <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i>Schausteller-Profil</li>
                      <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i>Kleinanzeigen</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Price item END -->

              <!-- Price item START -->
              <div class="col-md-6 col-lg-6">
                <div class="mein-paket-element card rounded-3 bg-dark text-white">
                  <!-- Card header -->
                  <div class="d-flex justify-content-between align-items-center p-5">
                    <div>
                      <h2 class="mb-0 text-white">Premium</h2>
                      <div class="hstack gap-2">
                        <?php if ($user->role()->name() === 'premium'): ?><span class="badge rounded-pill text-bg-success">Mein Paket</span><?php endif; ?>
                        <span class="plan-price mb-0" data-monthly-price="4,90 €" data-annual-price="2,90 €">4,90 €</span>
                        <span class="fw-light mb-0">/ Monat*</span>
                      </div>
                    </div>
                  </div>

                  <!-- Card body -->
                  <div class="card-body p-5 pt-0">
                    <!-- List -->
                    <ul class="list-unstyled mb-0">
                      <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i>Schausteller-Profil</li>
                      <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i>Kleinanzeigen</li>
                      <li class="mb-2 fw-bold"><i class="bi bi-check-circle-fill me-2"></i>Geschäfte eintragen</li>
                      <li class="mb-2 fw-bold"><i class="bi bi-check-circle-fill me-2"></i>Veranstaltungen zu Geschäften</li>
                      <li class="mb-2 fw-bold"><i class="bi bi-check-circle-fill me-2"></i>YouTube Videos einbinden</li>
                      <li class="mb-2 fw-bold"><i class="bi bi-check-circle-fill me-2"></i>Alle Platzangebote bis 300 km</li>
                    </ul>
                  </div>

                  <!-- Card footer -->
                  <?php if ($user->role()->name() === 'free'): ?>
                  <div class="p-4 pt-0">
                    <a href="#" class="btn btn-lg btn-primary w-100 mb-0 rounded-pill" style="font-size: 1.3rem">Paket auswählen</a>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
              <!-- Price item END -->
            </div>
            <!-- Pricing END -->
            <?php if ($user->role()->name() === 'premium'): ?>
            <div class="rounded-3 bg-white p-3 p-md-4 p-xxl-5 mt-4">
              <button class="btn btn-outline-dark mb-0" type="button">Rechnungen</button>
            </div>
            <?php endif; ?>
            <h3 class="p-3 p-md-4 p-xxl-5 mt-4">Häufig gestellte Fragen</h3>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Accordion Item #1
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Main content END -->
    </div>
  </div>
</section>
<!-- =======================
Content END -->
<?php snippet('footer') ?>
