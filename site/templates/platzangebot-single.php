<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/') ?>
<section class="pt-3">
  <?php snippet('platzangebot-single') ?>
</section>
<!-- =======================
Content END -->
<?php snippet('footer') ?>
