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
		<h2>Oferta Educativa</h2>
		<h3><u>Carrera Técnico</u></h3>
La carrera de técnico se compone de dos ciclos:</b><br><br>
<table><tfoot>
				<tr>
					<th scope="row" colspan="2">Al finalizar ambos, se otorga el Título de Técnico.</th>
				</tr>
	</tfoot>
<tr><td><b>Ciclo básico: (Duración 3 años)</b><br>
Todas las escuelas técnicas tienen el mismo plan.<br></td>
<td><b>Ciclo superior: (Duración 3 años)<br></b>
Se necesita tener aprobado el ciclo básico.<br></td></table><br>
<p>A continuación se listan las especialidades que brinda el establecimiento:</p>
<table><tr><td><b>Especialidades</b>
		<td style="width: 380px;"><ul>
			<li><a href="./electronico.php">T&eacute;cnico Electr&oacute;nico</a></li>
			<li><a href="./electrotecnico.php">Electrot&eacute;cnico (OEI)</a></li>
			<li><a href="./computacion.php">T&eacute;cnico en Computaci&oacute;n</a></li>
		     </ul>
		</td></tr>
</table><br>
Se puede cursar en diferentes turnos con estas modalidades:<br><br>
<b>Turnos: Mañana y Tarde<br></b>
<b>Horarios:</b>
07.45 a 12.05hs. (Mañana). 
13.30 a 17.50hs. (Tarde)<br><br>
	<ul>
	<li>Los alumnos de 1º año concurren en jornada completa que incluye las materias curriculares y las 		clases de apoyo.</li>
	<li>Todos los alumnos de 1º año reciben una vianda suministrada por el GCBA.</li>
	<li>Los alumnos de 2° a 6° año  concurren tres dias por semana a jornada completa (Teoría-Taller o 		educacion fisica) y los dias restantes en el horario del turno correspondiente</li>
	</ul>

<b>Turno: Noche<br></b>
En este turno se dictan todas las materias curriculares incluidas las de taller en el horario: 18.50 a 23.05hs.<br><br>

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
