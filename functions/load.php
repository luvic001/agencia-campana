<?php

if (!defined('PATH')) exit;

$files = glob(PATH . '/functions/**/*.php');

foreach ($files as $file)
  require($file);