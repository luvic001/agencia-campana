<?php

if (!defined('PATH')) exit;

function wp_post_type__cases() {

  $labels = [
		'name' => 'Cases',
		'singular_name' => 'Case',
	];

	$args = [
		'labels' => $labels,
		'description' => '',
		'public' => true,
		'menu_icon' => 'dashicons-analytics',
		'supports' => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ],
		'can_export' => true,
		'has_archive' => false
	];

	register_post_type( 'cases', $args );

}

add_action( 'init', 'wp_post_type__cases' );

function wp_taxonomy__cases() {

  $label = [
    'name' => 'Categorias de cases',
    'singular_name' => 'Categoria de cases'
  ];

  $args = [
    'labels' => $label,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'hierarchical' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => [
      'slug' => 'categoria-de-cases',
      'with_front' => false
    ]
  ];

  register_taxonomy('categoria-de-cases', 'cases', $args);

}

add_action('init', 'wp_taxonomy__cases');