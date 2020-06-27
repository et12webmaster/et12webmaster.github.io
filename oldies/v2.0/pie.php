<!--Comienzo Pie!-->
<div id="footer" class="bg3">
	<ul class="links">
		<li><a href="./index.php">Principal</a></li>
		<li>|</li>
		<li><a href="./especialidades.php">Especialidades</a></li>
		<li>|</li>
		<li><a href="./galeria.php">Galer&iacute;a de Fotos</a></li>
		<li>|</li>
		<li><a href="./mapa.php">Mapa del sitio</a></li>
		<li>|</li>
		<li><a href="./donde.php">&iquest;D&oacute;nde estamos?</a></li>
		<li>|</li>
		<li><a href="./contactenos.php">Cont&aacute;ctenos</a></li><br/>
	</ul>
	<div id="PieFinal">® Sitio dise&ntilde;ado por los alumnos de computaci&oacute;n 6to 8va. Egresados 2009  | <?
    				$fechaModificacion = filemtime("index.php");
    				print("&#218;ltima actualizaci&oacute;n: ");
    				print(date("M Y", $fechaModificacion));
  			  ?> </div>
</div>
<!--Fin Pie!-->
