<?php 

if (!defined('PATH')) exit;

function registrarMenu()
{
    
    global $REGISTERED_MENUS;
	register_nav_menus($REGISTERED_MENUS);

}
add_action('init', 'registrarMenu');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) 
{
    if (in_array('current-menu-item', $classes) )
    {
        $classes[] = 'active ';
    }
    return $classes;
}