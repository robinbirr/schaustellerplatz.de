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
          <h3 class="card-header-title">Geschäft eintragen</h3>

          <div class=" rounded-3 bg-white p-3 p-md-4 p-xxl-5 dev-dashed">
            <form class="registration-form" action="<?= $page->url() ?>" method="POST">

              <div class="form-element">
                <label for="title">Name <abbr title="required">*</abbr></label>
                <input type="text" id="title" name="title" value="<?= $data['title'] ?? null ?>" required/>
              </div>

              <div class="honey">
                <label for="message">If you are a human, leave this field empty</label>
                <input type="website" name="website" id="website" value="<?= isset($data['website']) ? esc($data['website']) : null ?>"/>
              </div>

              <input class="registration-button" type="submit" name="register" value="Register" />

            </form>
          </div>



          <!-- Personal info START -->

        </div>
      </div>
      <!-- Main content END -->

    </div>
  </div>
</section>
<?php snippet('footer') ?>
