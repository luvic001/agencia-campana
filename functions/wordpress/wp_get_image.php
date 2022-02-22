<?php 

if (!defined('PATH')) exit;

function wp_get_image($id, $size = "large", $imgtag = false) {
	
		$imGenerated = wp_get_attachment_image_src($id, $size);
		
		$imagem = @$imGenerated[0];
		
		if($imgtag){
			$cont = '<img src="' . $imagem . '" alt="Imagem '. $id .' " />';
		}
		else {
			$cont = $imagem;
		}
		
		return $cont;
		
	}