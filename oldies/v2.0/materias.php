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
		<h2>Materias según departmento</h2>
		<p>A continuación se listan las materias incluidas en los programas de enseñanza, clasificadas según el departamento correspondiente.<br><br><b>Nota</b>: Algunas materias poseen un link para la descarga de su  programa, solo deben hacer un click sobre el mismo.<br /></p>
		<p><h3>Taller</h3></p>
        <p>Carpintería<br>Ajuste<br>Herrería y soldadura<br>Maquinas y herramientas<br>Electricidad<br>Electrónica<br>Maquinas eléctricas<br>Dispositivos analógicos<br>Dispositivos digitales<br>Instalaciones eléctricas<br>Proyectos<br>Automatización<br>Microcontroladores<br></p>
		<br>
		<p><h3>Departamento de Castellano</h3></p>
		<p>Castellano de 1er, 2do y 3er año<br>Castellano y Literatura<br>Literatura<br>Ingles<br></p><br>
		<p><h3>Departamento de Ciencias Exactas y Naturales </h3></p>
		<p>Biología<br>Matemática<br>Física<br>Química<br>Matemática  I, II, III<br>Análisis de matemática</p><br>
        <p><h3>Departamento de Ciencias Sociales</h3></p>
		<p>Historia<br>Educación cívica<br>Instrucción cívica<br>Geografía<br>Historia universal<br>Historia argentina<br>Organización industrial<br>Legislación del trabajo<br>Relaciones Humanas<br>Geografía Regional Argentina<br>Geografía Económica</p><br>
        <p><h3>Departamento de Dibujo</h3></p>
		<p>Dibujo Técnico 1ero, 2do y 3ero año<br>Instalaciones eléctricas<br>Taller</p><br>
        <p><h3>Departamento de Educación Física</h3></p>
        <p>Educación Física de 1º a 6º año<br>
		<p><h3>Departamento de Electrotécnia</h3></p>
		Electrotecnia I,II
		<br>Electrónica General I,II
		<br>Electrónica Aplicada<br>Introduc. A la Computación<br>Computación I, II<br>
		Mecánica Técnica<br>Laboratorio de Mediciones Eléctricas I , II<br>Hidráulica Termodinámica Y Maquinas Motrices <br>Instalaciones Eléctricas<br> Máquinas Eléctricas y ensayos<br>Máquinas Asincrónicas y ensayos<br>Máquinas Sincrónicas y ensayos<br>Centrales y Canalizaciones<br>Organización Industrial<br>Legislación del Trabajo</p>
		<p><h3>Departamento de Electrónica</h3></p>
		<p><a href="./docs/electronica/ELECTRONICA_GENERAL1.doc" >Electrónica General I</a>, <a href="./docs/electronica/ELECTRONICA_GENERAL2.doc" >II</a><br><a href="./docs/electronica/ELECTRONICA_APLICADA.doc" >Electrónica Aplicada</a><br><a href="./docs/electronica/TEORIA_DE_CIRCUITOS1.doc" >Teoría de los circuitos I</a>, <a href="./docs/electronica/TEORIA_DE_CIRCUITOS2.doc" >II</a><br><a href="./docs/electronica/ELECTRONICA 1.doc" >Electrónica I</a>,<a href="./docs/electronica/ELECTRONICA 2.doc" > II</a><br><a href="./docs/electronica/COMUNICACIONES.doc" >Comunicaciones</a><br><a href="./docs/electronica/TEC._DE_LOS_COMPONENTES.doc" >Tecnología de los Componentes electrónicos</a><br><a href="./docs/electronica/INSTRUMENTACION.doc" >Instrumentación</a><br><a href="./docs/electronica/TECNICAS DIGITALES.doc" >Técnicas Digitales</a><br>Laboratorio I, II y<a href="./docs/electronica/LABORATORIO_lll.doc" > III</a><br><a href="./docs/electronica/SISTEMAS_DE_COMUNICACIONES.doc" >Sistemas de Comunicaciones</a><br><a href="./docs/electronica/SISTEMA_DE_TELEVISION.doc" >Sistemas de TV.</a><br><a href="./docs/electronica/SISTEMA_DE_CONTROL.doc" >Sistemas de Control</a><br><a href="./docs/electronica/COMPUTADORAS_ELECTRONICAS.doc" >Computadoras Electrónicas</a><br>Laboratorio de Computadoras<br><a href="./docs/electronica/TECNICAS DIGITALES.doc" > Técnicas digitales</a></p><br>
		<p><h3>Departamento de Computación</h3></p>
		<p>Programación I, II y III<br>Contabilidad I, II y III<br>Lógica<br>Organización de la Empresa<br>Eléctrica y Técnicas Digitales<br>Psicología<br>Sistemas Administrativos<br>Sistemas de procesamiento de datos I, II<br>Laboratorio I, II y III<br>Psicología aplicada a la Empresa<br>Algoritmos<br>Administración de sistemas<br>Introducción a la Economía Política<br>Investigación Operativa<br>Simulación</p>
		</div>
<!--Columna 2 !-->
	<div id="colTwo">
		<p></p>
		<p><a href="http://www.buenosaires.gov.ar/"><img src="css/images/gcba.jpg" border="0"></p>
		<p><a href="http://www.me.gov.ar/"><img src="css/images/nacion.jpg" border="0"></a></p>
	<h3>Contáctenos</h3><br>Puede contactarnos a través de nuestro <a href="./contactenos.html">formulario online</a> o enviar un mail a alguna de las siguientes direcciones:<br>
	<br><b>E-mail del Establecimiento:</b><br>
	<p id="email">tec12de1@buenosaires.edu.ar</p>	
	<b>E-mail de la Oficina de Alumnos:</b><br>
	<p id="email">of.alumnostecnica12@yahoo.com.ar</p>
	<p><b>Dirección:</b><a href="./donde.html"> Av. del Libertador 238  Ciudad Autónoma de Buenos Aires</p></a>
	<p><b>TE.:</b> 4328-4433/9421</p>
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
