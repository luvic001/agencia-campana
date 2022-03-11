<?php

if (!defined('PATH')) exit;
$terms = get_terms('tax_o_que_fazemos', [
  'hide_empty' => false
]);

$section = (object) [
  'title' => get_field('section-oquefazemos-title'),
  'subtitle' => get_field('section-oquefazemos-subtitle'),
];

?>

<section class="site-sections white-section cases" id="cases">
  <div class="container">
    
    <div class="section-title color-reverse centerized">
      <?php if ($section->title): ?>
        <h2><?= $section->title ?></h2>
      <?php endif; ?>
      <?php if ($section->subtitle): ?>
        <div class="row justify-content-center">
          <div class="col-md-11">
            <p><?= $section->subtitle ?></p>
          </div>
        </div>
      <?php endif; ?>
    </div><!-- .section-title.color-reverse.centerized -->

    <div class="row">
      <?php
        foreach ($terms as $category):
      ?>
          <div class="article-item col-12">
            <div class="row">
              <div class="col-lg-3 col-md-4">
                <div class="article-title">
                  <h3><?= $category->name ?></h3>
                </div>
              </div>
              <div class="col-md-8 col-lg-9">
                <?php get_modules('Section-oquefazemos/loop-items', 'page/home', [
                  'taxonomy' => $category->taxonomy,
                  'slug' => $category->slug
                ]) ?>
              </div>
            </div>
          </div> <!-- .article-item.col-12 -->
      <?php
        endforeach;
      ?>

    </div><!-- .row -->

  </div>
</section>

<?php

wp_reset_query();