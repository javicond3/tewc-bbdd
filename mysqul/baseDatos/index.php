<!DOCTYPE html>
<html>
<head>
<meta charset="utf8" />
<title>Ejemplo PHP-JQuery</title>
<link href="css/plantilla.css" type="text/css" rel="stylesheet" >
</head>
<body>
<?php require_once 'html/cabecera.html';?>

<div id="content">
<h1>Ejemplos Acceso Bases de Datos</h1>
<ul>
<li>Primero tienes que importar <a href="sql/demo_departamentos.sql">demo_departamentos.sql</a> en mySQL usando phpMyAdmin o desde el terminal.</li>
<li>Ejemplo conectarse a base de datos: <a href="conectar.php">conectar.php</a></li>
<li>Listar, versión simple: <a href="lista_departamentos_simple.php">lista_departamentos_simple.php</a></li>
<li>Listar con sentencias preparadas: <a href="lista_departamentos_preparado.php">lista_departamentos_preparado.php</a></li>
<li>Insertar, versión simple: <a href="insertar_simple.php">insertar_simple.php</a></li>
<li>Insertar, con sentencias preparadas: <a href="insertar_preparado.php">insertar_preparado.php</a></li>
<li>Crear un json con <i>json_encode</i>: <a href="publica_json.php">publica_json.php</a></li>
<li>Listado con JSONP: <a href="listado_json.php">listado_json.php</a> que hace uso de <a href="jsonp.php">jsonp.php</a></li>
<li>Formulario <a href="formulario_depto.php">formulario_depto.php</a></li>
</ul>
</div>
<?php require_once 'html/pie.html';?>
</body>
</html>