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
		<h2>¿Dónde estamos?</h2>
		<p>Nos encontramos ubicados en Av. Libertador 238, barrio de Retiro de la Ciudad Autónoma de Buenos Aires.</p>
		<p align="center"><a id="single_image" href="./img/comollegar.jpg"><img style="width: 484px; height: 336px;" src="./img/comollegar.jpg" /></a></p><p align="center"><a href="http://maps.google.com/maps/ms?t=h&hl=es&ie=UTF8&vps=1&jsv=180e&oe=UTF8&msa=0&msid=114441547412401686295.00047587be361192b6678">Observanos desde Google Maps</a>
	<table summary="Submitted table designs">
			<caption>Medios de transporte</caption>
			<thead>
				<tr>
					<th scope="col">Tipo</th>
					<th scope="col">Línea</th>
					<th scope="col">Distancia</th>

				</tr>
			</thead>	
			
			<tbody>
				<tr>
					<th rowspan="3" scope="row" id="r101"><a href="index.php?css=101#r101">Trenes</a></th>
					<td ><a href="twitter.com/radubilei">Mitre TBA</a></td>
					<td >250 m</td>

				</tr>
				<tr>
					<td>Belgrano Norte</td>
					<td>400 m</td>

				</tr>
				<tr>
					<td>San Martín</td>
					<td>500 m</td>

				</tr> 	 			

				<tr class="odd" >
					<th scope="row" id="r100"><a href="index.php?css=100#r100">Subte</a></th>
					<td><a href="www.adobati.it">Linea "C"</a></td>
					<td>250 m</td>
					
				</tr>
				<tr >
					<td>Colectivos</td>
					<td>5-6-7-9-20-23-26-28-33-(54)-50-<br>56-70-75-91-92-93-100-101-106-<br>108-115-126-129-130-132-143-<br>150-152-195</td>
					<td>En un radio maximo de 400 metros.</td>
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


</body></html>
