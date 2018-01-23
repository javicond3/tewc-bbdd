<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Añadir departamento</title>
<!--  estilo de http://alistapart.com/article/prettyaccessibleforms  -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script src="js/cmxform.js" type="text/javascript"></script>
<link href="css/formulario.css" type="text/css" rel="stylesheet">
<link href="css/plantilla.css" type="text/css" rel="stylesheet">
</head>
<body>
	<?php 
	require_once 'html/cabecera.html';
	require_once 'funciones_ficheros.php';
	
	if (!empty($_REQUEST['error'])) {
		echo "<p class='error'>" . $_REQUEST['error'] . "</p>";
	}  
	?>
	<div id="content">
	
		
		<form action="annade_departamento.php" method="post" enctype="multipart/form-data" class="cmxform">
			<fieldset>
				<legend>Alta departamentos</legend>
				<ol>
					<li>
						<label for="acronimo">Acrónimo</label> <input type="text"
						name="acronimo" id="acronimo">
					</li>
					<li>
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" id="nombre" >
					</li>
					<li>
						<label for="imagen">Logo</label>
						<input type="file" name="imagen" id="imagen">
					</li>
					<li>
						<label for="descripcion">Descripción</label>
						<textarea rows="4" cols="10" name="descripcion" id="descripcion"></textarea>
					</li>
				</ol>
				<button type="submit">Añadir departamento</button>
			</fieldset>
		</form>
	</div>
	<?php require_once 'html/pie.html';?>
</body>
</html>
