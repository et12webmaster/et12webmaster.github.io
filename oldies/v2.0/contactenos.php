<?php 
header('Content-Type: text/html; charset=utf-8'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head de la pagina-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="Braian Leiva, Pino Matias, Eric Franicevich, Juan Pappalardo, Matias Ortiz, Maksym Vlasenko, Rodrigo Garcia, Ailin Vergara, Claudio Fretes" name="author">	
<meta content="15-Oct-09" name="creation_date">
<meta content="Argentina" name="country">
<meta content="A mano" name="generator">
<meta content="Se brinda informacion relacionada con la Escuela Tecnica N 12 Libertador Gral. Jose de San Martin, asi como tambien apuntes y proyectos desarrollados en la misma" name="description">
<meta content="et n12, 12, et12, ET N12, ET12, tecnica 12, Tecnica 12, escuela tecnica, Escuela Tecnica, San Martin, libertador, computacion,electrotecnia, electronica, cursos, formacion profesional, educacion tecnica, escuela media, secundaria, electricidad, electricista, electrotecnico"	name="keywords">

<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico">
<link rel="stylesheet" href="css/default.css" type="text/css" />
<link rel="stylesheet" href="css/bluedream.css" type="text/css" />
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
		<h2>Contáctenos</h2>
		A continuación se listan e-mails y blogs que forman parte de nuestra institución:<br><br>
		<table summary="Submitted table designs">
			<caption>E-mails</caption>
			<tbody>
				<tr>

					<th scope="row" id="r101" width="300px">E-mail del Establecimiento:</th>
					<td width="380px" ><a id="mail">det_12_de1@bue.edu.ar</a></td>
				</tr>	 			
				<tr class="odd">

					<th scope="row" id="r100" width="300px">E-mail de la Oficina de Alumnos:</th>
					<td><a id="mail">of.alumnostecnica12@yahoo.com.ar</a></td>	
				</tr>
				<tr>

					<th scope="row" id="r101" width="300px">E-mail del departamento de electrónica:</th>
					<td width="380px" ><a id="mail">tecnica12electronica@gmail.com</a></td>
				</tr>
			</tbody>
		</table>
<br><br>
		<table summary="Submitted table designs">
			<caption>Blogs</caption>
			<tbody>
				<tr>

					<th scope="row" id="r101" width="300px">Biblioteca</th>
					<td width="380px" ><a id="mail" href="http://bibliotecaet12.blogspot.com/">http://bibliotecaet12.blogspot.com/</a></td>
				</tr>	 			
				<tr class="odd">

					<th scope="row" id="r100" width="300px">Departamento de comunicación y expresión</th>
					<td><a id="mail" href="http://et12comunicacion.blogspot.com/">http://et12comunicacion.blogspot.com/</a></td>	
				</tr>
				<tr>

					<th scope="row" id="r101" width="300px">Departamento de informática</th>
					<td width="380px" ><a id="mail" href="http://et12informatica.blogspot.com/">http://et12informatica.blogspot.com/</a></td>
				</tr>
			</tbody>
		</table>


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
