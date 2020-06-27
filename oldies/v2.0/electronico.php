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
			<caption>ELECTRÓNICA</caption>
            <td><p><b>Titulo:</b></td><td> Técnico en Electronica </p></td>
          </tr>
          <tr>
            <td valign="top" width="80"><p><b>Perfil del egresado:</b></p>
            </td>
            <td><p>El técnico estará capacitado para :<br />
              1. Realizar análisis, cálculos, verificaciones, proyectos bajo  dirección, ensayos, construcciones e instalaciones de equipos o partes  componentes de un sistema electrónico puro o híbrido.<br />
              2. Efectuar asesoramientos y representaciones técnicas, control de  calidad, supervisión en líneas de montaje y producción, y  especificaciones técnicas de equipos o partes componentes de sistemas  electrónicos puros o híbridos, acordes a su nivel.<br />
              3. Efectuar tareas relacionadas con la programación, planificación,  cómputos, costos, ensayos, controles, reformas correspondientes a la  naturaleza y nivel de los equipos y/o partes componentes de un sistema  electrónico puro o híbrido.</p>
              <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td valign="top" width="80"><b>Materias: </b> </td>
            <td><p><b>4º año</b><br />
              -Análisis Matemático<br />
              -Electrónica 1<br />
              -Inglés<br />
              -Instrucción Cívica<br />
              -Laboratorio 1<br />
              -Literatura<br />
              -Tecnología de los Componentes Electrónicos<br />
              -Teoría de los Circuitos 1<br />
              -Educación Física<br />
              -Taller : Dispositivos Analógicos – Dispositivos Digitales - Dispositivos -Programables</p>
              <p><br />
                <b>5º año</b><br />
                -Comunicaciones<br />
                -Electrónica 2<br />
                -Instrumentación<br />
                -Laboratorio 2<br />
                -Máquinas Eléctricas<br />
                -Técnicas Digitales<br />
                -Teoría de los Circuitos 2<br />
                -Educación Física<br />
                -Taller : Dispositivos Analógicos – Dispositivos Digitales - Dispositivos -Programables</p>
              <p><br />
                <b>6º año</b><br />
                -Computadoras Electrónicas<br />
                -Laboratorio 3<br />
                -Laboratorio de Computadoras<br />
                -Organización Industrial<br />
                -Relaciones Humanas<br />
                -Sistemas de Comunicaciones<br />
                -Sistemas de Control<br />
                -Sistemas de Televisión<br />
                -Educación Física</p></td>
          </tr>
	  </table>
		<h2>&nbsp;</h2>
  </div>
<?php
include("col2.php");
?>
	<div style="clear: both;">&nbsp;</div>
<?php
include("pie.php");
?>



</div>
</body>
</html>
