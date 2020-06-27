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
		<h2>Información para Inscripción<br />
</h2>
		<table width="100%" border="0" cellpadding="3" cellspacing="0">
          <tbody>
            <tr>
              <td valign="top" width="140"><b>Periodo:</b></td>
              <td>Se realiza en la Secretaría de la escuela durante todo el año.<br /></td>
            </tr>
            <tr>
              <td valign="top"><b>Horarios:</b></td>
              <td>Días habiles de:<br />
                09 hs. a 11 hs.<br />
                14 hs. a 16 hs.<br />
                19 hs. a 21 hs.</td>
            </tr>
          </tbody>
        </table>
		<br />

	<table border="1" summary="Submitted table designs">
			<caption>INSCRIPCIÓN PARA ALUMNOS DE 1° AÑO:</caption>
        <tbody>
		<tr>
			<th scope="row" id="r101">DOCUMENTACIÓN:</th>
			<td>	Solicitud de inscripción (solicitarla en la escuela)<br /><br />
                		Constancia de alumno regular (expedida por la escuela primaria)<br /><br />
                		Diploma de 7° grado (original y fotocopia) para alumnos que cursan en  					capital. Constancia de finalización de 7° grado para alumnos de  EGB.(ambas 					presentarlas una vez finalizado el ciclo)<br /><br />
                		Partida de Nacimiento (original y fotocopia)<br /><br />
                		Documento Nacional de Identidad (original y fotocopia)<br /><br />
                		Libreta Sanitaria (original y fotocopia)<br /><br />
                		Ficha de Salud (solicitarla en la escuela)<br /><br />
                		4 fotos 4 X 4<br /><br />
                		Carpeta de tres solapas (cartulina)<br /><br />
                		Los padres registrarán las firmas en el momento de la inscripción.
                	</td>
		</tr>
	</tbody>
        </table>
        <br />
	<table border="1" summary="Submitted table designs">
			<caption>INSCRIPCIÓN PARA ALUMNOS DE 2º a 6º AÑO:</caption>
        <tbody>
		<tr>
			<th scope="row" id="r101">DOCUMENTACIÓN:</th>
			<td >	Solicitud de inscripción (solicitarla en la escuela)<br />
				Boletines anteriores (fotocopia)<br /><br />
				Constancia de certificado analítico en trámite<br /><br />
				Diploma de 7° grado (original y fotocopia)<br /><br />
				Partida de Nacimiento (original y fotocopia)<br /><br />
				Documento Nacional de Identidad (original y fotocopia)<br /><br />
				Libreta Sanitaria (original y fotocopia)<br /><br />
				Ficha de Salud (solicitarla en la escuela)<br /><br />
				4 fotos 4 X 4<br /><br />
				Carpeta de tres solapas (cartulina)<br /><br />
				Los padres registrarán las firmas en el momento de la inscripción. 
                	</td>
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
