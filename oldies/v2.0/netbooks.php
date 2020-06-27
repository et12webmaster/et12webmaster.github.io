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
		<p><strong>Entrega de Netbooks - Programa Conectar Igualdad</strong><br />
          <br />
Las Netbooks del programa Conectar Igualdad se entregarán a los
      alumnos que en el año 2010 cursaron  6to Año de todas las
      especialidades de los tres Turnos.<br />
El horario de entrega durante el mes de Diciembre será:<br />
Desde el Lunes 13 hasta el Viernes 17, en el horarios de 9:30 a 12:00,
      de 14:00 a 17:00 hs, y de 18:30 a 20:30, en la Escuela, 3er Piso.<br />
      <br />
La documentacion requerida sera:<br />
DNI del Alumno<br />
CUIL del Alumno<br />
<br />
Si el alumno es menor de edad deberá concurrir acompañado de padre /
      madre o adulto responsable acreditado en la escuela, quien deberá
    traer:<br />
    <br />
CUIL del Padre/ Madre o adulto responsable<br />
DNI del Padre/ Madre o adulto responsable.<br />
<br />
Es importante concurrir con la documentación, pues si el CUIL/DNI no
	  se encuentra registrado en la página del ANSES, la maquina no puede
	  ser ingresada.<br />
      <br />
Si toda la documentación esta en orden, se entregarán en el acto en
	  COMODATO la Netbook y un Pendrive al alumno, firmandose 3 copias del
	  Contrato por parte del alumno el mismo si es mayor de edad o su
  padre/madre si es menor.<br />
La Netbook y el pendrive se entregarán en Comodato mientras el alumno
	  este cursando, y sera de su propiedad en el momento de recibirse si no
	  adeuda materias al momento del llamado de Marzo 2011.</p>
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
