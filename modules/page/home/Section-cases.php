<?php

if (!defined('PATH')) exit;
$terms = get_terms('categoria-de-cases', [
  'hide_empty' => false
]);

$section = (object) [
  'title' => get_field('section-cases-title'),
  'subtitle' => get_field('section-cases-subtitle'),
];

$query = new WP_Query([
  'post_type' => 'cases',
  'posts_per_page' => -1
]);

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
    </div>

    <?php if ($terms): ?>

    <div class="isotope-switcher">
      <ul>
        <li class="active">
          <a href="#" title="Mostrar Todos" isotope-toggle="*">Todos</a>
        </li>
        <?php foreach ($terms as $category): ?>
          <li>
            <a 
              href="#" 
              title="Filtrar apenas <?= $category->name ?>"
              isotope-toggle=".<?= $category->slug ?>"><?= $category->name ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <?php endif; ?>
    
    <?php if ($query->have_posts()): ?>
      <div class="row isotope-items">
        <?php while ($query->have_posts()): ?>
          <?php $query->the_post(); ?>
          <?php $ID = get_the_ID(); ?>

          <?php $current_term = get_the_terms($ID, 'categoria-de-cases')[0] ?>

          <div class="col-4 isotope-item <?= $current_term->slug ?>">
            <a href="<?= get_the_permalink() ?>" title="<?= get_the_title() ?>">
              <div class="case-background background-item-<?= $ID ?>">
                <style>
                  .background-item-<?= $ID ?> {
                    background-image: url('<?= get_the_post_thumbnail_url() ?>');
                  }
                </style>
              </div>
            </a>
          </div>

        <?php endwhile; ?>
      </div>
    <?php endif; ?>

  </div>  
</section>

<?php

wp_reset_query();