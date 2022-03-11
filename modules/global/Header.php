<?php

if (!defined('PATH')) exit;

global $sitename, $siteslogan;
$sitename = get_bloginfo('name');
$sitedescription = get_bloginfo('description');
$logo_alt = sprintf('%s | %s', $sitename, $sitedescription);

?>

<?php get_modules('Megamenu') ?>

<header class="site-header">

  <div class="d-flex justify-content-between align-items-center">

    <h1>
      <?= get_site_logo('logo_do_site', $logo_alt) ?>
    </h1>

    <a href="#" menu-toggle class="menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </a>

  </div>

</header>