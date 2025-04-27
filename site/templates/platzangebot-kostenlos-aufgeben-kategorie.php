<?php snippet('header') ?>
<?php
$request = kirby()->request();
$data    = $request->data();
$slug = get('draft');
$draft = $slug ? page('platzangebote')->draft($slug) : null;
if (!$draft || !$draft->isDraft()) {
  echo '<p>Kein gültiger Entwurf gefunden.</p>';
  return;
}

// Wenn Formular abgeschickt wurde, speichern
if (isset($data['kategorie'])) {
  try {
    $draft->update([
      'kategorie' => $data['kategorie']
    ]);
    // Weiterleitung zu Schritt 3
    go('/platzangebote/kostenlos-aufgeben/zeitraum?draft=' . $slug);
  } catch (Exception $e) {
    echo '<p>Fehler: ' . $e->getMessage() . '</p>';
  }
}
?>
<form method="post">
<main class="content-wrapper">
  <div class="container pt-3 pt-sm-4 pt-md-5 pb-5 text-center">
    <div class="row pt-lg-2 pt-xl-3 pb-1 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5 justify-content-center">

      <!-- Property type inputs -->
      <div class="col-12 col-xl-8">
        <h1 class="h2 mb-n2 mb-lg-4">Welche Art von Schausteller suchst du?</h1>

        <!-- Type -->
        <div class="pt-4 mt-4">
          <div class="nav nav-pills row row-cols-2 row-cols-sm-3 row-cols-md-5 gap-0 g-3">
            <div class="col">
              <input type="radio" class="btn-check" id="apartment" name="kategorie" checked>
              <label class="nav-link flex-column w-100 align-items-center gap-2 rounded p-3" for="apartment">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"><path fill-rule="evenodd" d="M19.158 1.372c-2.105-1.01-4.539.526-4.539 2.859v1.338l-9.705 5.142h0A4.54 4.54 0 0 0 2.5 14.723v14.72H1.25a.75.75 0 1 0 0 1.5h1.998.003 5.428 6.681H28.75h2a.75.75 0 1 0 0-1.5H29.5V9.192a4.54 4.54 0 0 0-2.575-4.093l-7.767-3.727zM28 29.443V9.192a3.04 3.04 0 0 0-1.724-2.74l-7.767-3.727a1.67 1.67 0 0 0-2.39 1.507v1.771 23.44h5.19v-3.107a.75.75 0 1 1 1.5 0v3.107H28zM14.619 17.669v11.774h-5.19v-8.736a3.04 3.04 0 0 1 3.037-3.037h2.153zm0-10.402v8.902h-2.153a4.54 4.54 0 0 0-4.537 4.537v8.736H4v-14.72a3.04 3.04 0 0 1 1.616-2.686h0l9.003-4.77zm5.305 13.56a.75.75 0 0 1 .75-.75h2.771a.75.75 0 1 1 0 1.5h-2.771a.75.75 0 0 1-.75-.75zm.75-11.429a.75.75 0 1 0 0 1.5h2.771a.75.75 0 1 0 0-1.5h-2.771zm-.75 6.09a.75.75 0 0 1 .75-.75h2.771a.75.75 0 0 1 0 1.5h-2.771a.75.75 0 0 1-.75-.75z"/></svg>
                Imbiss
              </label>
            </div>
            <div class="col">
              <input type="radio" class="btn-check" id="house" name="kategorie">
              <label class="nav-link flex-column w-100 align-items-center gap-2 rounded p-3" for="house">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"><path fill-rule="evenodd" d="M2.344 25.625a4.03 4.03 0 0 0 4.031 4.031h19.25a4.03 4.03 0 0 0 4.031-4.031V13.801c0-1.557-.708-3.029-1.923-4.002l-.462.578.462-.578-7.434-5.947a6.88 6.88 0 0 0-8.598 0L4.267 9.799l.469.586-.469-.586c-1.216.973-1.923 2.445-1.923 4.002v11.824zm4.031 2.531a2.53 2.53 0 0 1-2.531-2.531V13.801c0-1.101.501-2.143 1.361-2.831l7.434-5.947-.469-.586.469.586a5.38 5.38 0 0 1 6.724 0l.438-.548-.438.548 7.434 5.947c.86.688 1.36 1.729 1.36 2.831v11.824a2.53 2.53 0 0 1-2.531 2.531H6.375zm4.573-3.552a.75.75 0 0 0 .75.75h8.604a.75.75 0 0 0 .75-.75v-6.417a2.94 2.94 0 0 0-2.937-2.937h-4.229a2.94 2.94 0 0 0-2.937 2.938v6.417zm1.5-.75v-5.667a1.44 1.44 0 0 1 1.438-1.437h4.229a1.44 1.44 0 0 1 1.438 1.438v5.667h-7.104z"/></svg>
                Fahrgeschäft
              </label>
            </div>
            <div class="col">
              <input type="radio" class="btn-check" id="commercial" name="kategorie">
              <label class="nav-link flex-column w-100 align-items-center gap-2 rounded p-3" for="commercial">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"><path fill-rule="evenodd" d="M6.151 2.75a4.5 4.5 0 0 0-4.087 2.617L.911 7.868C.647 8.442.5 9.08.5 9.75c0 1.808.951 3.431 2.5 4.132V27.75H1.25a.75.75 0 1 0 0 1.5h7.5 7.5 12 2.5a.75.75 0 1 0 0-1.5H29V13.882c1.549-.702 2.5-2.324 2.5-4.132 0-.67-.147-1.308-.411-1.882l-1.153-2.502a4.5 4.5 0 0 0-4.087-2.617H6.151zm9.349 25h-6V21a1.75 1.75 0 0 1 1.75-1.75h2.5A1.75 1.75 0 0 1 15.5 21v6.75zM17 21v6.75h10.5V14.243l-.25.007c-1.565 0-2.944-.799-3.75-2.012-.806 1.213-2.185 2.012-3.75 2.012s-2.944-.799-3.75-2.012c-.806 1.213-2.185 2.012-3.75 2.012s-2.944-.799-3.75-2.012c-.806 1.213-2.185 2.012-3.75 2.012-.084 0-.168-.002-.25-.007V27.75H8V21a3.25 3.25 0 0 1 3.25-3.25h2.5A3.25 3.25 0 0 1 17 21zm11.315-8.461l-.065-.003c-.177 0-.34.061-.468.164-.171.033-.349.05-.532.05a3 3 0 0 1-3-3 .75.75 0 1 0-1.5 0 3 3 0 1 1-6 0 .75.75 0 1 0-1.5 0 3 3 0 1 1-6 0 .75.75 0 1 0-1.5 0 3 3 0 0 1-3 3c-.183 0-.361-.017-.532-.05-.128-.103-.291-.164-.468-.164l-.065.003C2.668 12.11 2 11.06 2 9.75c0-.449.098-.873.274-1.254l1.153-2.502A3 3 0 0 1 6.151 4.25h19.698a3 3 0 0 1 2.725 1.745l1.153 2.502c.175.38.273.804.273 1.254 0 1.31-.668 2.36-1.685 2.789zM21 20.25a.75.75 0 1 0 0 1.5h2.5a.75.75 0 1 0 0-1.5H21z"/></svg>
                Getränkestand
              </label>
            </div>
            <div class="col">
              <input type="radio" class="btn-check" id="room" name="kategorie">
              <label class="nav-link flex-column w-100 align-items-center gap-2 rounded p-3" for="room">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"><path fill-rule="evenodd" d="M2.933 28.882a.75.75 0 0 0 .75-.75v-1.027h24.634v1.027a.75.75 0 1 0 1.5 0v-1.027h.084a1.91 1.91 0 0 0 1.912-1.912V18.07c0-.936-.673-1.715-1.562-1.88v-.758c0-1.095-.584-2.054-1.458-2.583V6.104c0-1.649-1.337-2.986-2.986-2.986H6.194c-1.649 0-2.986 1.337-2.986 2.986v6.746c-.874.528-1.458 1.487-1.458 2.583v.758c-.889.164-1.562.943-1.562 1.88v7.124a1.91 1.91 0 0 0 1.912 1.912h.084v1.027a.75.75 0 0 0 .75.75zm26.13-3.277h.838a.41.41 0 0 0 .412-.412V18.07a.41.41 0 0 0-.412-.412h-.392-.009-.008H2.508 2.5h-.008-.392a.41.41 0 0 0-.412.412v7.124a.41.41 0 0 0 .412.412h.829.005.005 26.125zM3.25 16.158v-.726c0-.837.679-1.516 1.516-1.516h22.468c.837 0 1.516.679 1.516 1.516v.726H3.25zm1.458-3.741V6.104c0-.82.665-1.486 1.486-1.486h19.613c.821 0 1.486.665 1.486 1.486v6.314h-.058-1.604a1.92 1.92 0 0 0 .044-.408v-1.427a1.91 1.91 0 0 0-1.908-1.908h-5.034a1.91 1.91 0 0 0-1.908 1.908v1.427c0 .14.015.276.044.408h-1.736c.029-.131.044-.268.044-.408v-1.427a1.91 1.91 0 0 0-1.908-1.908H8.234a1.91 1.91 0 0 0-1.908 1.908v1.427c0 .14.015.276.044.408H4.766h-.058zm14.028-.001h-.003c-.225 0-.408-.183-.408-.408v-1.427c0-.225.182-.408.408-.408h5.034c.225 0 .408.183.408.408v1.427c0 .225-.182.408-.408.408h-.003-5.027zm-10.498 0h5.027.003c.225 0 .408-.182.408-.408v-1.427c0-.225-.183-.408-.408-.408H8.234c-.225 0-.408.183-.408.408v1.427c0 .225.182.408.408.408h.003z"/></svg>
                Warenverkauf
              </label>
            </div>
            <div class="col">
              <input type="radio" class="btn-check" id="garage" name="kategorie">
              <label class="nav-link flex-column w-100 align-items-center gap-2 rounded p-3" for="garage">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"><path fill-rule="evenodd" d="M3.844 14.801a.75.75 0 1 1-1.5 0c0-1.557.708-3.029 1.923-4.002h0l7.434-5.947h0a6.88 6.88 0 0 1 8.599 0l7.434 5.947-.469.586.469-.586c1.216.973 1.923 2.445 1.923 4.002a.75.75 0 1 1-1.5 0c0-1.101-.5-2.143-1.36-2.831l-7.434-5.947.468-.586-.468.586a5.38 5.38 0 0 0-6.724 0h0L5.204 11.97h0c-.86.688-1.361 1.729-1.361 2.831zm21.508 4.398c-.012-.031-.026-.061-.043-.091l-2.363-4.267-.001-.003c-.793-1.419-2.368-2.276-4.046-2.276h-5.792c-1.677 0-3.251.855-4.045 2.273l-.001.003-2.348 4.232c-.026.047-.046.095-.061.144-.709.717-1.15 1.675-1.15 2.753v.395 4.513 1.875a.75.75 0 0 0 .75.75h3.305a.75.75 0 0 0 .75-.75v-1.125h11.39v1.125a.75.75 0 0 0 .75.75h3.305a.75.75 0 0 0 .75-.75v-1.875-.013-.018l.001-.031v-4.875c0-1.079-.441-2.029-1.149-2.739zM7 26.125v-3.763-.395c0-1.365 1.241-2.591 2.927-2.591h12.146c1.695 0 2.927 1.205 2.927 2.563v4.188H7zM7 28v-.375h1.805V28H7zm14.635-12.43l1.322 2.386a4.82 4.82 0 0 0-.883-.081H9.927c-.301 0-.596.028-.883.082l1.326-2.39c.505-.9 1.551-1.504 2.736-1.504h5.792c1.186 0 2.232.605 2.736 1.506l.001.001zm-11.26 8.493a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 1 0 0 2.5zm11.188 0a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 1 0 0 2.5zM25 27.625h-1.805V28H25v-.375z"/></svg>
                Weitere
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


  <!-- Prev / Next navigation (Footer) -->
  <footer class="sticky-bottom bg-body pb-3">
    <div class="progress rounded-0" role="progressbar" aria-label="Dark example" aria-valuenow="14.29" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
      <div class="progress-bar bg-dark d-none-dark" style="width: 14.29%"></div>
    </div>
    <div class="container d-flex gap-3 pt-3">
      <button type="submit" class="btn btn-dark animate-slide-end ms-auto">Weiter <i class="fi-arrow-right animate-target fs-base ms-2 me-n1"></i></button>
    </div>
  </footer>
</form>
<?php snippet('footer') ?>
