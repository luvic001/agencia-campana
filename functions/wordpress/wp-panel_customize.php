<?php
/**
 * @author Lucas Victor
 *
 * @since 1.0.0 - Introduced
 * @since 2.0.0 - Inclusão dinâmica de arquivos de personalização na pasta "modules/wp-customize"
 *
 * @version 2.0.0
 *
 * @package GBL
 * @subpackage WP_CUSTOMIZE_AUTO
 *
 */

function panel_customize($wp_customize){

  global $TEMPLATE_DIRECTORY;
  $customize_extentions = glob($TEMPLATE_DIRECTORY . '/modules/wp-customize/**/*.php');
  foreach ($customize_extentions as $custom)
    require($custom);

  return $wp_customize;
}

add_action('customize_register', 'panel_customize');

function checkbox_sanitizer( $checked ) {
  return ( ( isset( $checked ) && true == $checked ) ? true : false );
}