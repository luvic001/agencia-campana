<?php 

if (!defined('PATH')) exit;

function wp_get_image($image_id = null, $image_size = 'full', $image_tag = null, $image_class = null) {

  if (!$image_id) return false;

  $image_data = wp_get_attachment_image_src($image_id, $image_size);
  if (!$image_data) return false;

  if (!$image_tag) return $image_data[0];
  
  $image_tag = sprintf(
    '<img src="%1$s" class="%2$s" width="%3$s" height="%4$s">',
    $image_data[0], #url
    $image_class,
    $image_data[1], #width
    $image_data[2] #height
  );
  
  return $image_tag;

}