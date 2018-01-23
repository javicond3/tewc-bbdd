<!DOCTYPE html>
<html>
<head>
<meta charset="utf8" />
<title>Ejemplo PHP-JQuery</title>
<link href="css/listado.css" type="text/css" rel="stylesheet" >
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">	
$("document").ready(function () {
    var url = window.location.pathname;
    var dir = url.substring(0, url.lastIndexOf('/')); // url del servidor, p.ej. http://localhost/departamentosSQL
    $.getJSON(dir + '/jsonp.php?callback=?', function (data) {
        $("#content").html('');
        $.each(data, function (i, item) {

            $("#content").append('<div class="depto"><img src="' + dir + '/images/' 
                    + item.imagen + '" width="50" height="50"/><div class="acronimo">' 
                    + item.acronimo + '</div><div class="nombre">' 
                    + item.nombre + '</div><div class="description">' 
                    + item.descripcion + '</div><div class="clear"></div></div>');

        });


    });
    $("#content").fadeIn(2000);
});
</script>
</head>
<body>
<div class="main">
<div id="content"><img src="images/ajax-loader.gif" alt="Cargando..." /></div>
</div>
<div class="clear"></div>
</body>
</html>

