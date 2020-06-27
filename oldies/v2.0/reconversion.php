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
		<h2>Cursos de Reconversión<br />
</h2>
        <table cellspacing="0" cellpadding="3" width="100%" border="0">
          <tbody>
            <tr>
              <td valign="top"><b>Duración:</b> </td>
              <td>Tres cuatrimestre<br /></td>
            </tr>
            <tr>
              <td valign="top"><b>Horarios:</b></td>
              <td>Todos los días de 18.50 a 23.05hs. </td>
            </tr>
            <tr>
              <td valign="top"><b>Condiciones de ingreso:</b> </td>
              <td>Estudios secundarios completos<br />
                Acreditación de tres años de experiencia laboral en la especialidad eléctrica.<br />
                Entrevista personal.
                </td>
            </tr>
          </tbody>
        </table><br />
        <table summary="Submitted table designs">
			<caption>CURSO DE FORMACIÓN DE ELECTROTÉCNICOS</caption>
            <tr>
              <td><b>Titulo:</b> </td>
              <td>Electrotécnico </td>
            </tr>
            <tr>
              <td valign="top"><b>
                Perfil del egresado:</b></td>
              <td>El egresado esta capacitado para:<br />
                * Proyectar, calcular y dirigir las instalaciones eléctricas domiciliarias y/o industriales <br />
                *   Asesorar técnicamente en control de calidad montaje y producción<br />
                * Efectuar   mantenimiento de equipos eléctricos electrónicos<br />
                * Realizar arbitrajes,   pericias y relevamiento de obras<br />
                * Dibujar y proyectar planos de   instalaciones eléctricas<br />
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
