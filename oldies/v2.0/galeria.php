<?php 
header('Content-Type: text/html; charset=utf-8'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head de la pagina-->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
<meta content="Braian Leiva, Pino Matias, Eric Franicevich, Juan Pappalardo, Matias Ortiz, Maksym Vlasenko, Rodrigo Garcia, Ailin Vergara, Claudio Fretes" name="author">	
<meta content="15-Oct-09" name="creation_date">
<meta content="Argentina" name="country">
<meta content="A mano" name="generator">
<meta content="Se brinda informacion relacionada con la Escuela Tecnica N 12 Libertador Gral. Jose de San Martin, asi como tambien apuntes y proyectos desarrollados en la misma" name="description">
<meta content="et n12, 12, et12, ET N12, ET12, tecnica 12, Tecnica 12, escuela tecnica, Escuela Tecnica, San Martin, libertador, computacion,electrotecnia, electronica, cursos, formacion profesional, educacion tecnica, escuela media, secundaria, electricidad, electricista, electrotecnico"	name="keywords">

<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico">
<link rel="stylesheet" href="css/default.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />

<script src="scripts/script.js"	type="text/javascript" ></script>
<script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.fancybox-1.2.1.pack.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$("a#single_image").fancybox();
		});
</script>

<title>Escuela Tecnica Nº12 Libertador Gral. Jose de San Martin</title>

</head>
<!--Fin Head de la pagina!-->
<body onload="Reloj()">
<?php
include("header.php");
include("menu.php");
?>
<script type="text/javascript">
	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");
</script>
<div id="content" class="bg2">

	<div id="colOne">
		<h2>Galería de Fotos</h2>
		<p>&nbsp;</p>
		<p>Fotos del Acto Conmemoración del 75º Aniversario de la Escuela</p>
		<p>
		  <embed type="application/x-shockwave-flash" src="http://picasaweb.google.com/s/c/bin/slideshow.swf" width="490" height="267" flashvars="host=picasaweb.google.com&captions=1&hl=es&feat=flashalbum&RGB=0x000000&feed=http%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2Fet12webmaster%2Falbumid%2F5507176463994708273%3Falt%3Drss%26kind%3Dphoto%26hl%3Des" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
		</p>
		<p>&nbsp;</p>
		<p>Fotos de la institución, de profesores y alumnos en diferentes actividades.</p>
		<p><embed wmode=transparent type="application/x-shockwave-flash" src="http://picasaweb.google.com/s/c/bin/slideshow.swf" width="490" height="267" flashvars="host=picasaweb.google.com&hl=es&feat=flashalbum&RGB=0x000000&feed=http%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2Fet12webmaster%2Falbumid%2F5395902756278256385%3Falt%3Drss%26kind%3Dphoto%26hl%3Des" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed></p>
		
	</div>
<?php
include("col2.php");
?>

	<div style="clear: both;">&nbsp;</div>
</div>
<?php
include("pie.php");
?>


</div>
</body>
</html>
