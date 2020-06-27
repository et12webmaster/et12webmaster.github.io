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
<script type="text/javascript">
			function startGallery() {
				var myGallery = new gallery($('myGallery'), {
					timed: false,
					useReMooz: true,
					embedLinks: false
				});
			}
			window.addEvent('domready',startGallery);
</script>
<div id="content" class="bg2">
	<div id="colOne">
		<h2>Información sobre las carreras</h2>
<table width="100%" border="0" cellpadding="3" cellspacing="0">
	<caption>La carrera de técnico se compone de dos ciclos:</caption>
	<tfoot>
				<tr>
					<th scope="row" colspan="2">Al finalizar ambos, se otorga el Título de Técnico.</th>
				</tr>
	</tfoot>

      <tbody><tr>
		<td ><b>Ciclo<br> básico</b>	</td>

		<td > (Duración 3 años)<br>
Todas las escuelas técnicas tienen el mismo plan.</td>
      </tr>
	  <tr>
		<td><b>Ciclo<br> superior</b> 	</td>
		<td>  (Duración 3 años)<br>

Se necesita tener aprobado el ciclo básico <p>    </p></td>    
      </tr>	
</tbody></table>
<br>
<b>Se puede cursar en diferentes turnos con estas modalidades:<p></b>

<table width="100%" border="0" cellpadding="3" cellspacing="0">
      	<tbody><tr><td ><b>Turnos: Mañana y Tarde</b> 	</td>
		<td>

 Los alumnos de 1º año concurren en jornada completa que incluye las materias curriculares y las clases de apoyo. <br>
Todos los alumnos de 1º año reciben una vianda suministrada por el GCBA<br>
 Los alumnos de 2° a 6° año  concurren tres dias por semana a jornada completa (Teoría-Taller o educacion fisica) y los dias restantes en el horario del turno correspondiente<br>
Horarios: 07.45 a 12.05hs(Mañana) 13.30 a 17.50hs(Tarde)
     </td>     </tr>		
<tr>
		<td ><b>Turno: Noche</b>	</td>

		<td>
 En este turno se dictan todas las materias curriculares incluidas las de taller en el horario: 
              18 .50 a 23.05hs.  <p>
     </p></td>    </tr>	
</tbody></table>
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
