<?php
	require_once 'conectar.php';
	$sql_insert = "INSERT INTO `departamentos` (acronimo, nombre, descripcion, imagen) " . "
			      VALUES (:acronimo, :nombre, :descripcion, :imagen)";
	try {
		$sentencia = $db->prepare($sql_insert);
		$sentencia->execute(array(
				'acronimo' => 'FIS',
				'nombre' => 'Departamento de Física aplicada a las Tecnologías de la Información',
				'descripcion' => 'Departamento de física de la ETSIT.',
				'imagen' => 'etsit.jpg')
		);
		echo "Insertado";
	}catch(PDOException $error) {
		die("Error a insertar " . $error->getMessage());
	}
?> 

