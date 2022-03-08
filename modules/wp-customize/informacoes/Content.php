<?php

if (!defined('PATH')) exit;

$panel_name = 'informacoes';

$wp_customize->add_panel($panel_name, [
  'title' => 'Informações',
]);

// Contato

$wp_customize->add_section('contato', [
  'title' => 'Contato',
  'panel' => $panel_name
]);

$wp_customize->add_setting('contato-address');
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contato-address', [
  'label' => 'Endereço',
  'type' => 'textarea',
  'section' => 'contato',
  'settings' => 'contato-address',
  'description' => ''
]));

$wp_customize->add_setting('contato-telefone');
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contato-telefone', [
  'label' => 'Telefones',
  'section' => 'contato',
  'settings' => 'contato-telefone',
  'description' => 'Separe os números com vírgula (,)'
]));

$wp_customize->add_setting('contato-whatsapp');
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contato-whatsapp', [
  'label' => 'Números de WhatsApp',
  'section' => 'contato',
  'settings' => 'contato-whatsapp',
  'description' => 'Separe os números com vírgula (,)'
]));

$wp_customize->add_setting('contato-email');
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contato-email', [
  'label' => 'E-mails',
  'section' => 'contato',
  'settings' => 'contato-email',
  'description' => 'Separe os e-mails com vírgula (,)'
]));

// Redes Sociais

$wp_customize->add_section('redes-sociais', [
  'title' => 'Redes Sociais',
  'panel' => $panel_name
]);

$rs = get_redes_sociais();

foreach ($rs as $key => $label):

  $setting = sprintf('rs-%s', $key);

  $wp_customize->add_setting($setting);
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $setting, [
    'label' => $label,
    'section' => 'redes-sociais',
    'description' => sprintf('Informe a URL completa do perfil do %s', $label),
    'settings' => $setting,
  ]));

endforeach;