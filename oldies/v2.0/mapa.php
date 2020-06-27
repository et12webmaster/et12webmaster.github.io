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
<div id="content" class="bg2">

	<div id="colOne">
		<h2>Mapa del sitio</h2>
	<!--Menu de la pagina !-->

<ul >
	<li ><a title="Principal" href="index.php" >Principal</a>
		<ul>
			
			<li><a href="./reglamento.php">Reglamento de<br>Convivencia</a></li>
			<li><a href="./orientacion.php">Dpto.Orientaci&oacute;n</a></li>			
			<li><a href="./inscripcion.php">Info para Inscripci&oacute;n</a></li>
			<li><a href="./biblioteca.php" >Biblioteca</a>
				<ul>
					<li ><a href="./rbiblioteca.php">Reglamento de<br>biblioteca</a></li>
					<li><a href="./ribiblioteca.php">Reglamento del uso<br>de internet</a></li>
				</ul>
			</li>	
			<li><a href="./cooperadora.php">Cooperadora</a></li>
			
		</ul>
	</li>

	<li>
		<a title="Click sobre para mas info" href="./institucion.php" >La Institución</a>
		<ul>
			<li ><a href="./rhistorica.php">Rese&ntilde;a Hist&oacute;rica</a></li>
			<li><a href="./autoridades.php">Autoridades</a></li>			
			<li><a href="./infraestructura.php" >Infraestructura</a></li>
			<li><a href="./materias.php" >Departamentos</a></li>
			<li><a href="./galeria.php">Galer&iacute;a de Fotos</a></li>
			
		</ul>
	</li>


	<li>
		<a  title="Click sobre para mas info" href="./educacion.php">Educación</a>
		<ul>
		<li><a href="./especialidades.php">Ciclo básico</a></li>
		<li>
		<a title="Click sobre para mas info" href="./superior.php" >Ciclo superior</a>
		<ul>
			<li><a href="./electronico.php">T&eacute;cnico Electr&oacute;nico</a></li>
			<li><a href="./electrotecnico.php">Electrot&eacute;cnico (OEI)  </a></li>
			<li><a href="./computacion.php">T&eacute;cnico en Computaci&oacute;n</a></li>
		</ul>
		</li>
	
	<li>
		<a title="Click sobre para mas info" href="./cursos.php" >Cursos</a>
		<ul>
			<li>
				<a href="./fprofesional.php">Formacion Profesional</a>
				<ul>
					<li>
						<a href="#" >Electricista</a>
						<ul>
							<li class="topline"><a href="./fprofesional.php#e1">Instalador domiciliario</a></li>
							<li><a href="./fprofesional.php#e2">Instalador de Obras</a></li>
						</ul>
					</li>
					<li><a href="./fprofesional.php#pc"">Operador de pc</a></li>
				</ul>
			</li>
			<li><a href="./reconversion.php">Reconversi&oacute;n</a></li>
		</ul>
		</ul>	
	</li>
	
	<li>
		<a title="Click sobre para mas info" href="./alumnos.php" >Alumnos</a>
		<ul>			
			<li>
				<a href="./fechas.php">Fechas de Exámen</a>
			</li>			
			<li>
				<a href="./egresados.php">Egresados</a>
			</li>
			<li>
				<a href="./apuntes.php">Apuntes</a>
			</li>
			<li>
				<a href="./trabajos.php">Trabajos hechos por<br> alumnos</a>
			</li>
		</ul>
	</li>
	<li>
		<a title="Click sobre para mas info" href="./contactenos.php" >Cont&aacute;ctenos</a>
		<ul>
			<li>
				<a href="./donde.php" >&iquest;D&oacute;nde estamos?</a>
			
			</li>
			
		</ul>
	</li>
	
</ul><br><br>
<p align="center"><strong><a href="./mapa2.php">Ver en forma gráfica</a></strong></p>
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
