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
			<caption>COMPUTACIÓN</caption>		
	<td><p><b>Titulo:</b></td><td>Técnico en Computación </p></td>
          </tr>
          <tr>
            <td valign="top" width="80"><b>Perfil del egresado: </b></td>
            <td><p>El técnico estará capacitado para :<br />
              1. Elaborar los digramas de flujo y programas en los lenguajes más  utilizados y preparar la documentación correspondiente a los mismos.<br />
              2. Colaborar con el profesional en el análisis, estudio y preparación  de los medios o documentación necesarios para mecanizar la resolución  de problemas administrativos, contables y técnicos.<br />
              3.	Operar minicomputadoras.<br />
              4.	Interpretar la información y datos específicos de los manuales técnicos.</p>
              <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td valign="top" width="80"><b>Materias:</b></td>
            <td><p><b>4º año</b><br />
              -Contabilidad 1<br />
              -Eléctrica y Técnicas Digitales 1<br />
              -Geografía Regional Argentina<br />
              -Historia Económica y Social Universal<br />
              -Inglés Técnico 1<br />
              -Lógica<br />
              -Matemática 1<br />
              -Organización de empresas y Legislación del Trabajo<br />
              -Programación 1<br />
              -Sistemas de Procesamientos de Datos 1<br />
              -Educación Física<br />
              -Laboratorio</p>
              <p><br />
                <b>5º año</b><br />
                -Contabilidad 2<br />
                -Geografía Económica General<br />
                -Historia Económica y Social Argentina<br />
                -Inglés Técnico 2<br />
                -Literatura<br />
                -Matemática 2<br />
                -Programación 2<br />
                -Psicología<br />
                -Sistemas de Procesamientos de Datos 2<br />
                -Sistemas Administrativos<br />
                -Técnicas Digitales 2<br />
                -Educación Física<br />
                -Laboratorio</p>
              <p><br />
                <b>6º año</b><br />
                -Algoritmos estadísticos por Computadoras<br />
                -Análisis de Sistemas<br />
                -Contabilidad de Costos<br />
                -Inglés Técnico 3<br />
                -Instrucción Cívica<br />
                -Introducción a la Economía Política<br />
                -Investigación Operativa<br />
                -Matemática 3<br />
                -Programación 3<br />
                -Psicología Aplicada a la Empresa<br />
                -Simulación<br />
                -Educación Física<br />
                -Laboratorio</p></td>
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
