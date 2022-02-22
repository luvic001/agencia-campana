<?php

if (!defined('PATH')) exit;

get_header();

// Inicializando a homepage
get_modules('Content', 'page/home');

get_footer();