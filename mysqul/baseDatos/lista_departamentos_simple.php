<?php
	require_once 'conectar.php';
	$sql = "SELECT acronimo, nombre, descripcion, imagen FROM departamentos LIMIT 6";
	foreach ($db->query($sql) as $fila) {
		print "<br>";
		print $fila['acronimo'] . "\t";
		print $fila['nombre'] . "\t";
		print $fila['descripcion'] . "\t";
		print $fila['imagen'] . "\t";
	}
?> 

