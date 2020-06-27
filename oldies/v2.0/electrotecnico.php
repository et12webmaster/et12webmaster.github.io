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
	<table summary="Submitted table designs">
			<caption>ELECTRICIDAD OEI (orientacion electronica industrial)</caption>
		<tr><td>
                <p><strong>Titulo:</strong></td><td> Electrotécnico con Orientación Electrónica Industrial </p></td>
          </tr>
          <tr>
            <td valign="top" width="80"><b>Perfil del egresado: </b> </td>
            <td><p>El técnico estará capacitado para:<br />
              1. Proyectar, calcular y dirigir las instalaciones eléctricas o  industriales en las áreas de iluminación, señalamiento, comunicaciones,  fuerza motriz, servomecanismos y automatización (tanto mediante  dispositivos electromecanicos y/o componentes electrónicos.<br />
              2.	Diagramar, programar y operar controladores logicos programables PLC.<br />
              3.	Asesorar técnicamente en control de calidad, montaje y producción.<br />
              4.	Efectuar mantenimiento de equipos eléctricos y electrónicos.<br />
              5.	Realizar arbitrajes, pericias y relevamiento de obras. </p>
                <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td valign="top" width="80"><b>Materias: </b></td>
            <td><p><b>4º año</b><br />
              -Análisis Matemático<br />
              -Electrónica General 1<br />
              -Electrotécnia 1<br />
              -Ingles Técnico 1<br />
              -Instrucción Cívica<br />
              -Introducción a la Computación<br />
              -Laboratorio de Mediciones Eléctricas 1<br />
              -Literatura<br />
              -Mecánica<br />
              -Educación Física<br />
              -Taller : Electricidad - Electrónica</p>
                <p><br />
                    <b>5º año</b><br />
                  -Computación 1<br />
                  -Electrónica General 2<br />
                  -Electrotécnia 2<br />
                  -Hidraúlica, Termodinámica y Máquinas Motrices<br />
                  -Inglés Técnico 2<br />
                  -Laboratorio de Mediciones Eléctricas 2<br />
                  -Máquinas Eléctricas y Ensayos<br />
                  -Organización industrial<br />
                  -Educación Física <br />
                  -Taller: Electricidad-Electrónica</p>
              <p><br />
                   <b>6º año</b><br />
                -Centrales y Canalizaciones Eléctricas<br />
                -Computación 2<br />
                -Electrónica Aplicada<br />
                -Instalaciones Eléctricas<br />
                -Legislación del Trabajo<br />
                -Máquinas Asincrónicas y Ensayos<br />
                -Máquinas Sincrónicas y Ensayos<br />
                -Educación Física<br />
                -Taller : Electricidad - Electrónica</p></td>
          </tr>
        </table>
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
