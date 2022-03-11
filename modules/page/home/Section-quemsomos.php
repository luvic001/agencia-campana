<?php

if (!defined('PATH')) exit;
$base = 'section-quemsomos';
$base_format = '%s-%s';

$section = (object) [
  'title' => get_field(sprintf($base_format, $base, 'title')),
  'subtitle' => get_field(sprintf($base_format, $base, 'subtitle')),
  'content' => get_field(sprintf($base_format, $base, 'content')),
  'cards' => get_field(sprintf($base_format, $base, 'cards'))
];

?>

<section class="site-sections" id="quem-somos">

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-5 col-xl-4">
        <div class="section-title"> 
          <h2><?= $section->title ?></h2>
          <p><?= $section->subtitle ?></p>
        </div>
      </div>
      <div class="col-md-6 col-lg-7 offset-xl-1 mb-4 mb-md-5">
        <div class="editor-content mt-0 mt-md-4">
          <?= $section->content ?>
        </div>
      </div>

      <?php if ($section->cards): ?>
        <div class="col-12">
          <div class="section-cards">
            <ul class="row">
              <?php 
                foreach ($section->cards as $card): 
                  $image = $card[sprintf($base_format, $base, 'cards-image')];
                  $content = $card[sprintf($base_format, $base, 'cards-content')];
              ?>
                  <li class="col-md-6 col-lg-4">
                    <div class="card-content">
                      <?php if ($image): ?>
                        <figure>
                          <img src="<?= wp_get_image($image) ?>" alt="">
                        </figure>
                      <?php endif; ?>
                      <div class="editor-content">
                        <p class="mb-0"><?= $content ?></p>
                      </div>
                    </div>
                  </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      <?php endif; ?>
      
    </div>
  </div>

</section>