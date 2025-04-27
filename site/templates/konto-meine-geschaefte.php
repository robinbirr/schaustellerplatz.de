<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/registrieren') ?>
<?php $user = $kirby->user(); ?>
<?php $user_geschaefte = $site->find('geschaefte')->children()->filter(function($child) use($user) {
  return $child->owner()->toUsers()->has($user);
}); ?>

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
          <h3 class="card-header-title">Meine Geschäfte</h3>
          <div class="row">
            <div class="col-12 col-lg-6"><?= $user_geschaefte->count() ?> Geschäft online</div>
            <div class="col-12 col-lg-6 text-end">
              <a href="/konto/meine-geschaefte/geschaeft-eintragen" class="btn btn-primary mb-0" type="button">
                <i class="bi bi-plus-lg"></i> Geschäft eintragen
              </a>
            </div>
          </div>
          <?php foreach ($user_geschaefte as $user_geschaeft): ?>
          <div class="geschaeft-element card">
            <div class="row g-0">
              <!-- Card img -->
              <div class="col-md-4 position-relative">

                <!-- Overlay item -->
                <div class="position-absolute top-0 start-0 z-index-1 m-3">
                  <div class="badge text-bg-dark">nicht veröffentlicht</div>
                </div>

                <!-- Slider START -->
                <div class="overflow-hidden" style="display: block; border-radius: 10px; border-top-right-radius: 0; border-bottom-right-radius: 0;">
                    <img src="/assets/images/category/hotel/4by3/04.jpg" alt="Card image">
                </div>
                <!-- Slider END -->
              </div>
              <div class="col-md-8">
                <div class="card-body py-md-3 d-flex flex-column h-100 position-relative">
                  <div class="mt-md-auto">
                    <!-- Title -->
                    <h4 class="card-title mb-1"><a href="hotel-detail.html"><?= $user_geschaeft->title()->esc() ?></a></h4>
                    <strong><?= $user_geschaeft->typ() ?></strong>
                    <div class="border-top pt-2 mt-2">
                      11 Termine hinterlegt
                    </div>
                  </div>
                  <div class="btn-group mt-md-auto">
                    <a href="<?= $user_geschaeft->permalink() ?>" class="btn btn-primary-soft"><i class="bi bi-pen"></i> bearbeiten</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach ?>

        </div>
      </div>
      <!-- Main content END -->

    </div>
  </div>
</section>
<!-- =======================
Content END -->
<?php snippet('footer') ?>
