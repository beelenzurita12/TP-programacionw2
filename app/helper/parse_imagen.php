<?php

	function parseImagen($imagen){
		// Read image path, convert to base64 encoding
		$imageData = base64_encode(file_get_contents(__DIR__ . "/../../public/upload/$imagen"));

		// Format the image SRC:  data:{mime};base64,{data};
		$src = 'data: '.mime_content_type(__DIR__ . "/../../public/upload/$imagen").';base64,'.$imageData;

		return $src;
	}
?>