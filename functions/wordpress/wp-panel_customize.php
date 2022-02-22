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


    // Logo do site
  // $wp_customize->add_setting('logo_do_site');

  // $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'logo_do_site', array(
  //   'label' => __('Logo do site (Cabeçalho)'),
  //   'section' => 'title_tagline',
  //   'settings' => 'logo_do_site',
  //   'description' => 'Este logo ficará no cabeçalho em todas as páginas do site'
  // )));

  // for ($i = 1; $i <= 5; $i++)
  // {
  //   $wp_customize->add_setting(sprintf('logo_do_site_footer_%s', $i), array(
  //     'default' => ''
  //   ));
  //   $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, sprintf('logo_do_site_footer_%s', $i), array(
  //     'label' => __(sprintf('Logo do site %s (Rodapé)', $i)),
  //     'section' => 'title_tagline',
  //     'settings' => sprintf('logo_do_site_footer_%s', $i),
  //     'description' => 'Este logo ficará no rodapé em todas as páginas do site'
  //   )));
  // }

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