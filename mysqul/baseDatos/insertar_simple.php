<?php
	require_once 'conectar.php';
	$sql_insert = "INSERT INTO `departamentos` (acronimo, nombre, descripcion) VALUES ('MAT', 
			'Departamento de Matemáticas aplicadas a las Tecnologías de la Información', 
'Departamento de docencia e investigación de matemáticas de la ETSIT.')";
	try {
		$resultado = 	$db->query($sql_insert); // query para insert, update, delete
	}catch(Exception $error) {
		echo "Fallo al insertar " . $error->getMessage();
	}
?> 

