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
		<h2>Apuntes</h2>
		    <table style="width: 481px; height: 157px;" bordercolorlight="#666633" bordercolordark="#665633" border="5" cellspacing="0">
      <caption align="center">
        4º Año&nbsp; Electronica
      </caption>

      <tbody>
        <tr>
          <td>Materia</td>

          <td colspan="2">
            <p align="center">Disponible</p>
          </td>
        </tr>

        <tr>
          <td rowspan="4">Taller</td>

          <td rowspan="2">Dispositivos Programables</td>

          <td>
            <center>
              <font size="4">Microcontroladores 908</font>

            </center>
          </td>
        </tr>

        <tr>
          <td>
            <p><a href="http://www.et12.edu.ar/apuntes/ano4/micro908.doc"><font size="2">Introduccion a los Microcontroladores</font></a><br>
            <a href="http://www.et12.edu.ar/apuntes/ano4/Set_inst908.doc"><font size="2">Set de Instrucciones 908</font></a><br>

            <a href="http://www.et12.edu.ar/apuntes/ano4/Codestruc908.doc"><font size="2">Codificacion de estructuras en 908</font></a></p>
          </td>
        </tr>

        <tr>
          <td>Dispositivos Analogicos</td>

          <td>
            <p align="center">-</p>

          </td>
        </tr>

        <tr>
          <td>Dispositivos Digitales</td>

          <td>
            <p align="center">-</p>
          </td>

        </tr>
      </tbody>
    </table>
  </center>

  <p>&nbsp;</p>
<center>

  <table style="width: 481px; height: 157px;" bordercolorlight="#666633" bordercolordark="#665633" border="5" cellspacing="0">
    <caption align="center">
      5º Año&nbsp; Electronica
    </caption>

    <tbody>
      <tr>
        <td>Materia</td>

        <td colspan="2">
          <p align="center">Disponible</p>
        </td>
      </tr>

      <tr>
        <td rowspan="4">Taller</td>

        <td rowspan="2">Dispositivos Programables</td>

        <td>
          <center>
            <font size="4">Microcontroladores 908</font>
          </center>
        </td>
      </tr>

      <tr>
        <td><font size="2"><a href="http://www.freescale.com/files/microcontrollers/doc/data_sheet/MC68HC908JL8.pdf?fsrch=1&amp;WT_TYPE=Data%20Sheets&amp;WT_VENDOR=FREESCALE&amp;WT_FILE_FORMAT=pdf&amp;WT_ASSET=Documentation" target="blank">Datasheet MC68HC908jl8 en PDF</a></font></td>
      </tr>

      <tr>
        <td>Dispositivos Analogicos</td>

        <td>

          <p align="center">-</p>
        </td>
      </tr>

      <tr>
        <td>Dispositivos Digitales</td>

        <td>
          <p align="center">-</p>

        </td>
      </tr>

      
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
