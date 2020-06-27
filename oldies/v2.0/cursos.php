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
		<h2>Cursos</h2>
		<p>Cursos que se dictan en nuestra institución</p>		
		<h3><u>Cursos de Formación Profesional:</u></h3><br>
<b>Condiciones de ingreso:</b> Adultos con ciclo primario completo.<br>

<b>Duración</b>: Un cuatrimestres.<br>
<b>Horario</b>: Cuatro dias a la semana de 18.50 a 22.35 hs.<br>
<table><tr><td><b>Especialidades:</b></td>
		<td style="width: 380px;"><ul>
			<li><a href="./fprofesional.php#e1">Electricista Instalador (Instalaciones domiciliarias)</a></li>
			<li><a href="./fprofesional.php#e2">Electricista Instalador (De obras)</a></li>
			<li><a href="./fprofesional.php#pc">Operador de Pc (Computadora Personal)</a></li>
		</ul></td></table><br>

<h3><u>Cursos de Reconversión</u></h3><br>
<b>Condiciones de ingreso:</b> Estudios secundarios completos.Acreditación de tres años de experiencia laboral en la especialidad eléctrica. Entrevista personal.<br>

<b>Duración</b>: Tres cuatrimestres.<br>
<b>Horario</b>: Todos los días 18.50 a 23.05hs.<br>
<table><tr><td><b>Especialidades:</b></td>
		<td style="width: 380px;">
		<ul>
			<li><a href="./reconversion.php">Electrotécnico</a></li>
		</ul>
	    	</td>
	</tr>
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
