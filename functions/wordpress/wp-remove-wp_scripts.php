<?php

if (!defined('PATH')) exit;

add_action( 'wp_print_styles',     'my_deregister_styles', 100 );

function my_deregister_styles()    { 
	//wp_deregister_style( 'amethyst-dashicons-style' ); 
	if (!is_user_logged_in() AND !current_user_can('administrator'))
		wp_deregister_style( 'dashicons' ); 


}

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
}

function my_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

//Remove JQuery migrate
function remove_jquery_migrate( $scripts ) {
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
		$script = $scripts->registered['jquery'];
		
 if ( $script->deps ) { // Check whether the script has any dependencies
 	$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
 }
}
}

add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
	wp_dequeue_style( 'wp-block-library' );
}