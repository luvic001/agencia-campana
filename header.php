<?php

if (!defined('PATH')) exit;
global $TEMPLATE_DIRECTORY_URI;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= wp_title() ?></title>

  <?php if (GOOGLE_FONTS): ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?= GOOGLE_FONTS ?>" rel="stylesheet">
  <?php endif; ?>

  <?php wp_head(); ?>

  <?php if (function_exists('load_fonts')) load_fonts() ?>
  <?php load_extra_css() ?>
  <style>
    <?= get_file('style.css') ?>
  </style>
  <script src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/jQuery.min.js"></script>
  <script src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/bootstrap.min.js"></script>
  <script src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/isotope.pkgd.min.js"></script>

  <script>
    let site_url = '<?= site_url() ?>';
    let siteLoader = `
    <div class="loading-options">
      <?= svg('lds-ring') ?>
      <p>Carregando</p>
    </div>
    `;
    <?= get_file('js/script.min.js') ?>
  </script>

  <script src="https://kit.fontawesome.com/c454b0919f.js" crossorigin="anonymous"></script>

</head>
<body <?= body_class() ?>>
  
<main class="site-content">

<?php 

get_modules('Popup');
get_modules('Header');