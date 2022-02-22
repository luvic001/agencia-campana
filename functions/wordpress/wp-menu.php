<?php

if (!defined('PATH')) exit;

function menu($param = 'menu-principal')
{
    wp_nav_menu(
        array( 
            'theme_location'  => $param
        )
    );
}