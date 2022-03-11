<?php

if (!defined('PATH')) exit;

global $taxonomy, $slug;

$args = [
  'post_type' => 'o_que_fazemos',
  'posts_per_page' => -1,
  'tax_query' => [
    [
      'taxonomy' => $taxonomy,
      'field' => 'slug',
      'terms' => $slug
    ]
  ]
];

$query = new WP_Query($args);

?>

<div class="items-carousel">

  <ul class="row items-track">

    <?php if ($query->have_posts()): ?>
      <?php while ($query->have_posts()): ?>
        <?php $query->the_post(); ?>

          <li class="item-card">
            <a href="<?= get_the_permalink() ?>" title="<?= get_the_title() ?>">
              <h4><?= get_the_title() ?></h4>
              <p><?= strip_tags(get_the_excerpt()) ?></p>
              <span class="btn-link-line">Saiba mais</span>
              <?php if (get_the_post_thumbnail()): ?>
                <img 
                  src="<?= get_the_post_thumbnail_url() ?>" 
                  alt="<?= get_the_title() ?>">
              <?php endif; ?>
            </a>
          </li>

      <?php endwhile; ?>
    <?php endif; ?>

  </ul>


</div>