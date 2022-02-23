<?php

if (!defined('PATH')) exit;
$base = 'section-marketing-digital';
$base_format = '%s-%s';

$section = (object) [
  'title' => get_field(sprintf($base_format, $base, 'title')),
  'link' => get_field(sprintf($base_format, $base, 'link')),
  'link_text' => get_field(sprintf($base_format, $base, 'link_text')),
  'link_newblank' => get_field(sprintf($base_format, $base, 'link_newblank')),
  'background' => get_field(sprintf($base_format, $base, 'background')),
  'background_mobile' => get_field(sprintf($base_format, $base, 'background_mobile')),
];

if ($section->title):

?>

<section class="site-sections marketing">
  <style>
    <?php if ($section->background_mobile): ?>
      .site-sections.marketing {
        background-image: url('<?= wp_get_image($section->background_mobile) ?>');
      }
    <?php endif; ?>
    <?php if ($section->background): ?>
      @media (min-width: 768px) {
        .site-sections.marketing {
          background-image: url('<?= wp_get_image($section->background) ?>');
        }
      }
    <?php endif; ?>
  </style>
  <div class="container">
    <div class="section-title">
      <p><?= $section->title ?></p>
    </div>
    <?php if ($section->link): ?>
      <a 
        href="<?= $section->link ?>" 
        class="site-link"
        <?= ($section->link_newblank ? 'target="_blank"' : null) ?>>
        <?= ($section->link_text ?: 'Saiba Mais') ?></a>
    <?php endif; ?>
  </div>
</section>

<?php

endif;
