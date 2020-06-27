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
		<h2>Cursos de Formación Profesional <br />
</h2>
        <table cellspacing="0" cellpadding="3" width="100%" border="0">
          <tbody>
            <tr>
              <td valign="top"><b>Duración:</b> </td>
              <td>Un cuatrimestre<br /></td>
            </tr>
            <tr>
              <td valign="top"><b>Horarios:</b> </td>
              <td>Cuatro dias a la semana de 18.50 a 22.35 hs. </td>
            </tr>
            <tr>
              <td valign="top"><b>Condiciones de ingreso:<b></td>
              <td>Adultos con ciclo primario completo.
              </td>
            </tr>
          </tbody>
        </table>
        <br />
	<h2>
         Especialidades
        </h2>
        
	<table summary="Submitted table designs">
			<caption><a id="e1">ELECTRICISTA INSTALADOR<br>(Instalaciones domiciliarias)</a> </caption>
             
            <tr>
              <td><b>Título:</b> </td>
              <td>Instalador electricista </td>
            </tr>
            <tr>
              <td valign="top"><b>
                  Perfil del egresado: </b></td>
              <td>
                Montar, fijar, armar y conectar instalaciones eléctricas   domiciliarias.<br />
                Descubrir defectos y problemas en las instalaciones utilizando   instrumental de medición y repararlas.<br />
                Interpretar planos eléctricos y   efectuar replanteos.<br />
                Preparar cómputos de materiales y   presupuestos.<br />
                Instalar porteros eléctricos </td>
            </tr>
          </tbody>
        </table>

        <br />
        <table summary="Submitted table designs">
			<caption><a id="e2">ELECTRICISTA INSTALADOR (De obras)</a></caption>
  
            <tr>
              <td><b>Título:</b> </td>
              <td>Instalador electricista </td>
            </tr>
            <tr>
              <td valign="top"><b>
                Perfil del egresado:</b> </td>
              <td>               
                Montar, fijar cañerías y cajas sobre encofrados y   paredes.<br />
                Cablear instalaciones por acometidas embutidas, subterraneas o   exteriores y conectar.<br />
                Montar y fijar tableros secciónales.<br />
                Interpretar   planos eléctricos y efectuar replanteos.<br />
                Preparar cómputos de materiales y   presupuestos según planos. </td>
            </tr>
          </tbody>
        </table>
        <br />

        <table summary="Submitted table designs">
			<caption><a id="pc">OPERADOR DE PC (Computadora Personal)</a></caption>
            <tr>
              <td><b>Título:</b> </td>
              <td>Operador de computadora personal </td>
            </tr>
            <tr>
              <td valign="top"><b>
                Perfil del egresado: </b></td>
              <td>
                Utilizar la computadora como herramienta de   trabajo.<br />
                Confeccionar textos, correspondencia, planillas de calculo y tareas   donde se requiera manejo de la información.<br /></td>
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
