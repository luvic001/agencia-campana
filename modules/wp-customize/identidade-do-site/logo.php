<?php

if (!defined('PATH')) exit;

// Logo do site
$wp_customize->add_setting('logo_do_site');

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'logo_do_site', array(
  'label' => __('Logo do site (Cabeçalho)'),
  'section' => 'title_tagline',
  'settings' => 'logo_do_site',
  'description' => 'Este logo ficará no cabeçalho em todas as páginas do site'
)));

// Logo do site (Footer) 
$wp_customize->add_setting(sprintf('logo_do_site_footer'), array(
  'default' => ''
));
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, sprintf('logo_do_site_footer'), array(
  'label' => __(sprintf('Logo do site (Rodapé)')),
  'section' => 'title_tagline',
  'settings' => sprintf('logo_do_site_footer'),
  'description' => 'Este logo ficará no rodapé em todas as páginas do site'
)));