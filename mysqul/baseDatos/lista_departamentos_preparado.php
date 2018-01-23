<?php
require_once 'conectar.php';
$sql = "SELECT acronimo, nombre, descripcion, imagen FROM departamentos LIMIT 6";
$statement = $db->prepare($sql);
$statement->execute();

while ($fila = $statement->fetch()) {
	print_r($fila);
}
?>
