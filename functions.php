<?php

if (!defined('ABSPATH')) exit;

define('ENVIRONMENT', 'development');

define('SITE_URL', site_url());

// Google Fonts
define('GOOGLE_FONTS', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');

// Navigator Theme Color
define('THEME_COLOR', false);

// Enable Ajax
define('USE_AJAX', true);
define('AJAX_URI', admin_url('admin-ajax.php'));

// Template Directory
global $TEMPLATE_DIRECTORY, $TEMPLATE_DIRECTORY_URI, $REGISTERED_MENUS;

$TEMPLATE_DIRECTORY = get_template_directory();
$TEMPLATE_DIRECTORY_URI = get_template_directory_uri();
define('PATH', $TEMPLATE_DIRECTORY);

// Menus
$REGISTERED_MENUS = [
  'menu-principal' => __( 'Menu Principal' )
];

// Extra fonts
global $load_extra_css;
// $load_extra_css = [''];

// Default Timezone: America - São Paulo
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

// get the the role object
$editor = get_role('editor');
// add $cap capability to this role object
$editor->add_cap('edit_theme_options');

require (PATH . '/functions/load.php');