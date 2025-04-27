<!DOCTYPE html>
<html lang="de" data-bs-theme="light" data-pwa="true">
<head>
  <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Birrwerk">
  <meta name="description" content="Schaustellerplatz.de">
  <meta name="rating" content="general">
  <meta name="rating" content="safe for kids">
  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=DM+Serif+Display:ital@0;1&display=swap">
  <link rel="manifest" href="/manifest.json">
  <link rel="icon" type="image/png" href="/assets/app-icons/icon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="/assets/app-icons/icon-180x180.png">

  <!-- Theme switcher (color modes) -->
  <script src="/assets/js/theme-switcher.js"></script>

  <!-- Preloaded local web font (Inter) -->
  <link rel="preload" href="/assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin>

  <!-- Font icons -->
  <link rel="preload" href="/assets/icons/finder-icons.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="/assets/icons/finder-icons.min.css">

  <!-- Vendor styles -->
  <link rel="stylesheet" href="/assets/vendor/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="/assets/vendor/choices.js/public/assets/styles/choices.min.css">
  <link rel="stylesheet" href="/assets/vendor/flatpickr/dist/flatpickr.min.css">

  <!-- Bootstrap + Theme styles -->
  <link rel="preload" href="/assets/css/theme.min.css" as="style">
  <link rel="preload" href="/assets/css/theme.rtl.min.css" as="style">
  <link rel="stylesheet" href="/assets/css/theme.min.css" id="theme-styles">
  <?= css([
    'assets/vendor/bootstrap-icons/bootstrap-icons.css',
    '@auto'
  ]) ?>
  <style>:root,[data-bs-theme="light"]{.large-h1 {
      font-size: 64px;
      font-weight: 400;
    }--fn-primary:#aa6aff;--fn-primary-rgb:170,106,255;--fn-primary-text-emphasis:#9151e6;--fn-primary-bg-subtle:#f7f0ff;--fn-primary-border-subtle:#eee1ff;}[data-bs-theme="dark"]{--fn-primary-text-emphasis:#9d5df2;--fn-primary-bg-subtle:#20203d;--fn-primary-border-subtle:#302852;}.btn-primary{--fn-btn-bg:#aa6aff;--fn-btn-border-color:#aa6aff;--fn-btn-hover-bg:#9151e6;--fn-btn-hover-border-color:#9151e6;--fn-btn-active-bg:#9151e6;--fn-btn-active-border-color:#9151e6;--fn-btn-disabled-bg:#aa6aff;--fn-btn-disabled-border-color:#aa6aff;}.btn-outline-primary{--fn-btn-color:#aa6aff;--fn-btn-border-color:#aa6aff;--fn-btn-hover-bg:#aa6aff;--fn-btn-hover-border-color:#aa6aff;--fn-btn-active-bg:#aa6aff;--fn-btn-active-border-color:#aa6aff;--fn-btn-disabled-color:#aa6aff;--fn-btn-disabled-border-color:#aa6aff;}</style>

</head>