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
		<h2>Biblioteca</h2>
		
		La Biblioteca de la Escuela Técnica N° 12 “Libertador Gral. José de San Martín<br>
                desea formar parte en tu camino hacia la formación 
                de habilidades que te permitan desenvolverte satisfactoriamente ante las demandas del mundo actual, para ello......<br>
	        <ul>
			<li>Mantiene abiertas sus puertas en los tres turnos.</li>
			<li>Actualiza el material bibliográfico 
                acorde a los constantes cambios y necesidades 
                de las materias que se dictan en las tres especialidades 
                que posee nuestra escuela: Electricidad, Electrónica 
                 y Computación.</li>
		</ul>

                Los préstamos de los libros pueden hacerse en:<br>
		<ul>
                          <li>Sala</li>
                          <li>Aula</li>
                          <li>Domicilio</li>
                </ul>       

                <b>Cada usuario deberá tramitar su carnet de lector.</b><br><br>
               Para facilitarte la tarea de búsqueda y selección de información contamos 
               con una base de datos que podés consultar por:<br>
                <ul>            
			<li>Autor</li>
                        <li>Título</li>
                        <li>Materia</li>
			<li>Tema</li>
		</ul>
	También tenemos una máquina para Internet allí podrás completar tu necesidad de información.<br><br><div align="center"><img src="./img/biblio.jpg" width="250px" height="200px" ></div><br>                         
                                <b>“No estarás solo estaremos a tu lado 
                                para guiarte y satisfacer tus necesidades”.</b><br><br>
                              <b>BIBLIOTECARIOS:</b>
				<ul>
			
                            <li>Elena Insua</li>
                            <li>Juliana Pacheco</li>
                            <li>Marcela Suárez</li>
                        </ul>
	<p><b>HORARIO DE ATENCION</b><br>
Lunes a Viernes : 8.00 a 22.00 hs.</p>
	<p><b>Blog</b><br>
	<a href="http://bibliotecaet12.blogspot.com/">http://bibliotecaet12.blogspot.com/</a>
	</p><br>
	<h3>Secciones</h3>
	<ul>
		<li><a href="./rbiblioteca.php">Reglamento de biblioteca</a></li>
		<li><a href="./ribiblioteca.php">Reglamento del uso de internet en biblioteca</a></li>
	</ul>
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
