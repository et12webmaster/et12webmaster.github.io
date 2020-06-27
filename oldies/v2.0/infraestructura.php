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
		<h2>Infraestructura</h2>
<p>En esta sección veremos la
infraestructura de nuestro
establecimiento.
</p>

<div id="flash">

<object
      type="application/x-shockwave-flash" data="img/et12.swf"
      width="490px" height="490px">
<param name="movie" value="img/et12.swf" />
<param name="wmode" value="transparent">
</object>

</div>

<table border="1">
<caption>Infraestructura</caption>
<tbody>
<tr>
<td style="font-weight: bold;">Subsuelo</td>
<td>Talleres<br />
Garage</td>
</tr>
<tr>
<td style="font-weight: bold;">Planta Baja</td>
<td>Talleres<br />
Portería<br />
Baños de Taller<br />
Entrada</td>
</tr>
<tr>
<td style="font-weight: bold;">Primer Piso</td>
<td>Rectoría<br />
Vicerrectoría<br />
Oficina de asesoría pedagógica<br />
Regencia<br />
Secretaría<br />
Gabinete pedagógico<br />
Jefatura de preceptores<br />
Sala de Profesores<br />
Biblioteca<br />
Archivo<br />
Baños para el personal<br />
Preceptoría<br />
Baño para alumnos<br />
5 Aulas comunes<br />
Aula taller<br />
Sala de calefacción central</td>
</tr>
<tr>
<td style="font-weight: bold;">Segundo Piso</td>
<td>
<p>12 Aulas comunes<br />
Baño de alumnos<br />
Baño de alumnas<br />
2 Preceptorías<br />
Sala de calefacción central</p>
</td>
</tr>
<tr>
<td style="font-weight: bold;">Tercer Piso</td>
<td>Cocina<br />
Buffet<br />
Salón comedor y fotocopiadora<br />
Baños del personal<br />
2 Laboratorios de computación<br />
Gabinete de medios audiovisuales<br />
Laboratorio de ciencias naturales<br />
Laboratorio de multimedia<br />
Sala de calefacción centra</td>
</tr>
<tr>
<td style="font-weight: bold;">Cuarto Piso</td>
<td>
<p>Oficina de empleo y práctica laboral<br />
Sala de dibujo técnico<br />
Laboratorio de máquinas eléctricas<br />
Laboratorio de reparaciones eléctricas<br />
Laboratorio de reparación de computadoras y materiales eléctricos<br />
Asociación cooperadora<br />
Salón de Manuf<br />
Sala de calefacción central<br />
2 Baño de personal</p>
</td>
</tr>
<tr>
<td style="font-weight: bold;">Quinto Piso</td>
<td>Laboratorio ecológico<br />
3 Laboratorios de electrónica<br />
Aula de dibujo técnico<br />
2 Baño de personal<br />
Sala de calefacción central</td>
</tr>
<tr>
<td style="font-weight: bold;">Sexto Piso</td>
<td>Gimnasio<br />
Vestuarios</td>
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
