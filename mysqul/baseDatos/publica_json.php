<?php
require_once 'conectar.php';
$sql = "SELECT acronimo, nombre, descripcion, imagen FROM departamentos LIMIT 6";
$statement = $db->prepare($sql);
$statement->execute();

while ($fila = $statement->fetch()) {
	$filas[] = array(
			"acronimo" => $fila['acronimo'],
			"nombre" => $fila['nombre'],
			"descripcion" => $fila['descripcion'],
			"imagen" => $fila['imagen']);
}

$json = json_encode($filas);
echo $json;
?>

