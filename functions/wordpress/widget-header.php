<?php

if (!defined('PATH')) exit;

function WidgetHeader1(){
    register_sidebar(array(
        'name'          => __( 'Widget Header 1', 'text_domain' ),
        'id'            => 'widget_header_1',
        'description'   => 'Região do cabeçalho onde ficam os links e elementos adicionados.',
        'class'         => '',
        'before_widget' => '<nav id="%1$s" class="menu-widget %2$s">',
        'after_widget'  => '</nav>',
        'before_title'  => '<p>',
        'after_title'   => '</p>'
    ));
}
add_action('widgets_init', 'WidgetHeader1');
