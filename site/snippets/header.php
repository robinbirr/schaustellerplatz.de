<?php snippet('html-head') ?>
<body class="<?php if( $page->parents()->count() > 2 ): ?><?= $page->parent()->parent()->parent()->slug() ?> <?php endif ?><?php if( $page->parents()->count() > 1 ): ?><?= $page->parent()->parent()->slug() ?> <?php endif ?><?php if( $page->parents()->count() > 0 ): ?><?= $page->parent()->slug() ?> <?= $page->slug() ?> <?php endif ?><?= $page->intendedTemplate() ?>">
<?php $today = date('Y-m-d'); $hinweisdatumab = $site->hinweisdatumab()->toDate('Y-MM-dd'); $hinweisdatumbis = $site->hinweisdatumbis()->toDate('Y-MM-dd'); ?>
  <?php if($site->hinweisdatumab()->isNotEmpty() && $site->hinweisdatumbis()->isNotEmpty() && $hinweisdatumab <= $today && $today <= $hinweisdatumbis): ?>
    <div class="alert alert-success py-2 m-0 bg-success border-0 rounded-0 alert-dismissible fade show text-center overflow-hidden" role="alert">
      <p class="text-white m-0"><?= $site->hinweistext()->html() ?></p>
      <button type="button" class="btn-close btn-close-white opacity-9 p-3" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif ?>
  <header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top z-fixed px-0" data-sticky-element>
    <div class="container">

      <!-- Mobile offcanvas menu toggler (Hamburger) -->
      <button type="button" class="navbar-toggler me-3 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar brand (Logo) -->
      <a class="navbar-brand py-1 py-md-2 py-xl-1 me-2 me-sm-n4 me-md-n5 me-lg-0" href="index.html">
            <span class="d-none d-sm-flex flex-shrink-0 text-primary rtl-flip me-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34"><path d="M34.5 16.894v10.731c0 3.506-2.869 6.375-6.375 6.375H17.5h-.85C7.725 33.575.5 26.138.5 17c0-9.35 7.65-17 17-17s17 7.544 17 16.894z" fill="currentColor"/><g fill-rule="evenodd"><path d="M17.5 13.258c-3.101 0-5.655 2.554-5.655 5.655s2.554 5.655 5.655 5.655 5.655-2.554 5.655-5.655-2.554-5.655-5.655-5.655zm-9.433 5.655c0-5.187 4.246-9.433 9.433-9.433s9.433 4.246 9.433 9.433a9.36 9.36 0 0 1-1.569 5.192l2.397 2.397a1.89 1.89 0 0 1 0 2.671 1.89 1.89 0 0 1-2.671 0l-2.397-2.397a9.36 9.36 0 0 1-5.192 1.569c-5.187 0-9.433-4.246-9.433-9.433z" fill="#000" fill-opacity=".05"/><g fill="#fff"><path d="M17.394 10.153c-3.723 0-6.741 3.018-6.741 6.741s3.018 6.741 6.741 6.741 6.741-3.018 6.741-6.741-3.018-6.741-6.741-6.741zM7.347 16.894A10.05 10.05 0 0 1 17.394 6.847 10.05 10.05 0 0 1 27.44 16.894 10.05 10.05 0 0 1 17.394 26.94 10.05 10.05 0 0 1 7.347 16.894z"/><path d="M23.025 22.525c.645-.645 1.692-.645 2.337 0l3.188 3.188c.645.645.645 1.692 0 2.337s-1.692.645-2.337 0l-3.187-3.187c-.645-.646-.645-1.692 0-2.337z"/></g></g><path d="M23.662 14.663c2.112 0 3.825-1.713 3.825-3.825s-1.713-3.825-3.825-3.825-3.825 1.713-3.825 3.825 1.713 3.825 3.825 3.825z" fill="#fff"/><path fill-rule="evenodd" d="M23.663 8.429a2.41 2.41 0 0 0-2.408 2.408 2.41 2.41 0 0 0 2.408 2.408 2.41 2.41 0 0 0 2.408-2.408 2.41 2.41 0 0 0-2.408-2.408zm-5.242 2.408c0-2.895 2.347-5.242 5.242-5.242s5.242 2.347 5.242 5.242-2.347 5.242-5.242 5.242-5.242-2.347-5.242-5.242z" fill="currentColor"/></svg>
            </span>
        Finder
      </a>

      <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
        <div class="offcanvas-header py-3">
          <h5 class="offcanvas-title" id="navbarNavLabel">Browse Finder</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pt-2 pb-4 py-lg-0 mx-lg-auto">
          <ul class="navbar-nav position-relative">
            <?php foreach ($site->children()->listed() as $item): ?>
              <li class="nav-item py-lg-2 me-lg-n2 me-xl-0"><a href="<?= $item->url() ?>" class="nav-link rounded-pill <?php e($item->isOpen(), 'active',) ?>"><?= $item->title()->esc() ?></a></li>
            <?php endforeach ?>
            <?php if ($kirby->user()): ?><?php $user = $kirby->user(); ?>
              <li class="nav-item d-xl-none"><a class="nav-link btn-light" href="/konto">Mein Konto</a></li>
              <?php if ($user->role()->name() != 'premium'): ?>
                <li class="nav-item  d-xl-none"><a class="nav-link btn-success text-white fw-bold rounded-pill" href="/konto/mein-paket">Auf Premium upgraden</a></li>
              <?php endif; ?>
            <?php else: ?>
              <li class="nav-item d-xl-none"> <a class="nav-link btn-light" href="/anmelden">Login</a></li>
              <li class="nav-item d-xl-none"> <a class="nav-link btn-success text-white fw-bold rounded-pill" href="/registrieren">Als Schausteller:in loslegen</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </nav>

      <!-- Button group -->
      <div class="d-flex gap-sm-4">
        <!-- Account button -->
        <?php if ($kirby->user()): ?><?php $user = $kirby->user(); ?>
          <a class="btn btn-icon btn-outline-secondary fs-base border-0 animate-shake me-2" href="/konto" aria-label="Login">Mein Konto</a>
          <?php if ($user->role()->name() != 'premium'): ?>
            <a class="btn btn-primary animate-scale rounded-pill" href="/konto/mein-paket">
              <i class="fi-plus fs-lg animate-target ms-n2 me-1 me-sm-2"></i> Auf Premium upgraden
            </a>
          <?php endif; ?>
        <?php else: ?>
          <a class="btn btn-icon btn-outline-secondary fs-base border-0 animate-shake me-2" href="/anmelden" aria-label="Login">Login</a>
          <a class="btn btn-primary animate-scale rounded-pill" href="/registrieren">
            <i class="fi-plus fs-lg animate-target ms-n2 me-1 me-sm-2"></i> Als Schausteller:in loslegen
          </a>
        <?php endif; ?>
      </div>
    </div>
  </header>