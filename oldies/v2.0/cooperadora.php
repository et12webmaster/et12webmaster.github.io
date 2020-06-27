<?php 
header('Content-Type: text/html; charset=utf-8'); 
?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
		<div>
		  <h2>Cooperadora</h2>
	
		  	<p>	En  el marco de una serie de acciones tendientes a asistir únicamente y  colaborar con la tarea de las Asociaciones Cooperadoras Escolar del  Gobierno de la Ciudad de Buenos Aires, la Dirección General de  Cooperadoras y Comedores Escolares pone en marcha el <b>PROGRAMA DE APOYO  A LAS COOPERADORAS</b> que implementaron tres módulos de capacitación  desarrollados en función de las demandas recibidas por las  Cooperadoras. Estos módulos se desarrollon en tres encuentros que  concentraron los siguientes temas:<br>
		  <ol>
		    <li>Alimentación y Nutrición (Funcionamiento de las Comisiones de Becas y Comedores).</li>

		    <li>Rendición  de Subsidios y manejo contable (Actualización de normativa,  requerimientos impositivos, actualización de plantillas, etc.).</li>
		    <li>Participación  y fortalecimiento institucional (Promocion de la participación en el  nivel comunitario, desarrollo local, mediación, constitución de redes).</li>
	      </ol>
	  </div>
		Durante  el dictado de los módulos de capacitación se realizará un relevamiento  de las demandas de las Asociaciones Cooperadoras para articularlas con  las principales actividades desarrolladas dentro del ámbito de la  Secretaría de Educación y de otros organismos del Gobierno de la Ciudad  de Buenos Aires.<br>
		A su vez, desde septiembre de 2002, está en  funcionamiento la MESA DE AYUDA que contribuye y colaborara en la  detección de las demandas de los cooperadores y su posterior  articulación:<br></p>

		<div align="center"><br>
		  <b>NUTRICION</b><br>
		  Lunes a Viernes de 7:30 a 16:00 hs.<br>
		  4339-7825/7742<br>
		  <a id="email">nutriciongcba@yahoo.com.ar</a><br>
  <br>
  <br>

		  <b>COOPERADORAS</b><br>
		  Lunes a Viernes de 11:00 a 15:00 hs.<br>
		  4339-7749/7812<br>
		  <a id="email">cooperadoras@buenosaires.gov.ar</a><br>
  <br>
		  <b>SUBSIDIOS<br></b>
		  Lunes a Viernes de 11:00 a 15:00 hs.<br>
		  4339-7818/14<br>
		  <a id="email">subsid_se@buenosaires.gov.ar</a></div>
		<br>
		<div>
		  <div><br>
	      </div>

		  <br>
	  </div>
		<br>
		<h2>&nbsp;</h2>
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
