<?php
function find_spaces($name) {
	return strpos($name, ' ');
}
function is_valido($fichero) {
	$extValidas = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES[$fichero]["name"]);
	$extension = end($temp);
	$tipo = $_FILES[$fichero]["type"];
	$tiposValidos = array("image/jpeg", "image,jpg", "image/pjpeg", "image/x-png", "image/png");
	$maxTamano = 100000;
	return (in_array($extension, $extValidas) && in_array($tipo, $tiposValidos) && ($_FILES[$fichero]['size'] < $maxTamano));
}

function muestra_fichero($fichero) {
	echo "<p>Subido: " .  $_FILES[$fichero]['name'] . "</p>";
	echo "<p>Tipo: " . $_FILES[$fichero]['type'] . "</p>";
	echo "<p>Tamaño: " .  $_FILES[$fichero]['size'] . "</p>";
	echo "<p>Fichero temporal: " . $_FILES[$fichero]['tmp_name'] . "</p>";
}

function mueve_fichero($origen, $destino) {
	move_uploaded_file($origen, $destino);
}

function existe_directorio($destino) {
	return file_exists($destino) && is_dir($destino);
}

function error_procesa_fichero($f, $d) {
	if (!is_valido($f)) {
		return "Fichero inválido";
	} elseif (find_spaces($_FILES[$f]['name']) != false) {
		return "Nombre con espacios";
	} elseif  ($_FILES[$f]["error"] > 0) {
		return "Error: ". $_FILES[$f]['error'];
	} else {
		$fichero_movido = $d . $_FILES[$f]['name'];
		if (!existe_directorio($d)) {
			return "Error: no existe el directorio destino $d";
			// mkdir $d;
		}elseif (file_exists($fichero_movido)) {
			return "Ya existe el fichero " . $fichero_movido;
		} else {
			mueve_fichero($_FILES[$f]['tmp_name'], $fichero_movido);
			return false;
		}	
	}
}



?>