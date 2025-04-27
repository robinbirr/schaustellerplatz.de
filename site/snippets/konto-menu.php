<aside class="col-lg-3" style="margin-top: -105px">
  <div class="offcanvas-lg offcanvas-start sticky-lg-top pe-lg-3 pe-xl-4" id="accountSidebar">
    <div class="d-none d-lg-block" style="height: 105px"></div>

    <!-- Header -->
    <div class="offcanvas-header d-lg-block py-3 p-lg-0">
      <div class="d-flex flex-row flex-lg-column align-items-center align-items-lg-start">
        <div class="flex-shrink-0 bg-body-secondary border rounded-circle overflow-hidden" style="width: 64px; height: 64px">
          <img src="assets/img/account/avatar.jpg" alt="Avatar">
        </div>
        <div class="pt-lg-3 ps-3 ps-lg-0">
          <h6 class="mb-1"><?= $kirby->user()->vorname() ?> <?= $kirby->user()->nachname() ?></h6>
          <p class="fs-sm mb-0"><?= $kirby->user()->email() ?></p>
        </div>
      </div>
      <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#accountSidebar" aria-label="Close"></button>
    </div>

    <!-- Body (Navigation) -->
    <div class="offcanvas-body d-block pt-2 pt-lg-4 pb-lg-0">
      <nav class="list-group list-group-borderless">
        <?php foreach ($site->find('konto')->children()->unlisted() as $item): ?>
          <a class="list-group-item list-group-item-action d-flex align-items-center <?php e($item->isOpen(), 'active',) ?>" href="<?= $item->url() ?>">
            <?= $item->title()->esc() ?>
          </a>
        <?php endforeach ?>
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="/konto"><i class="bi bi-house fa-fw me-2"></i>Dashboard</a>
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="/konto/mein-profil">
          <i class="bi bi-person fa-fw me-2"></i>
          Mein Profil
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center active" aria-current="page" href="/konto/meine-geschaefte">
          <i class="bi bi-shop-window fa-fw me-2"></i>
          Meine Geschäfte
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="/konto/platzangebote">
          <i class="bi bi-geo-alt fa-fw me-2"></i>
          Platzangebote <span class="badge rounded-pill bg-success">Neu</span>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="/konto/meine-kleinanzeigen">
          <i class="bi bi-view-list fa-fw me-2"></i>
          Meine Kleinanzeigen <span class="badge rounded-pill bg-primary">2</span>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="/konto/meine-kleinanzeigen">
          <i class="bi bi-view-list fa-fw me-2"></i>
          Meine Jobangebote
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="/konto/merkliste">
          <i class="bi bi-heart fa-fw me-2"></i>
          Merkliste
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="/konto/mein-paket">
          <i class="bi bi-trophy fa-fw me-2"></i>
          Mein Paket
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="/konto/einstellungen">
          <i class="bi bi-gear fa-fw opacity-75 me-2"></i>
          Einstellungen
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
          <i class="fi-help-circle fs-base opacity-75 me-2"></i>
          Help center
        </a>
      </nav>
      <nav class="list-group list-group-borderless pt-3">
        <a class="list-group-item list-group-item-action d-flex align-items-center text-danger bg-danger-soft-hover" href="<?= url('logout') ?>">
          <i class="fi-log-out fs-base opacity-75 me-2"></i>
          Abmelden
        </a>
      </nav>
    </div>
  </div>
</aside>