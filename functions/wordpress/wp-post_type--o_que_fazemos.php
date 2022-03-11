<?php

if (!defined('PATH')) exit;

function wp_post_type__o_que_fazemos() {

  $labels = [
		'name' => 'O Que Fazemos',
		'singular_name' => 'O Que Fazemos',
	];

	$args = [
		'labels' => $labels,
		'description' => '',
		'public' => true,
		'menu_icon' => 'dashicons-networking',
		'supports' => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ],
		'can_export' => true,
		'has_archive' => false
	];

	register_post_type( 'o_que_fazemos', $args );

}

add_action( 'init', 'wp_post_type__o_que_fazemos' );

function wp_taxonomy__o_que_fazemos() {

  $label = [
    'name' => 'Categorias de serviços',
    'singular_name' => 'Categoria do serviço'
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
      'slug' => 'o-que-fazemos',
      'with_front' => false
    ]
  ];

  register_taxonomy('tax_o_que_fazemos', 'o_que_fazemos', $args);

}

add_action('init', 'wp_taxonomy__o_que_fazemos');