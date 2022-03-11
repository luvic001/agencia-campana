<?php

if (!defined('PATH')) exit;

$webdoor_background = get_field('webdoor-image');

?>

<section class="site-webdoor" id="inicio">

  <?php if ($webdoor_background): ?>
    <style>
      .site-webdoor {
        background-image: url('<?= wp_get_image($webdoor_background, 'full') ?>');
      }
    </style>
  <?php endif; ?>


  <div class="container">
    <a href="#" class="scrolldown">
      <img src="<?= get_image('chevron-down.png') ?>" alt="Rolar para baixo">
    </a>
  </div>

</section>