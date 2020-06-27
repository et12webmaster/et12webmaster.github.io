<div id="header">
	<div id="ContFecha">
		 <img id="hora" src="./css/images/time.gif">
		
		<div id="fecha">
		<script language="JavaScript" type="text/JavaScript">
    		var Hoy = new Date("<?php echo date("d M Y G:i:s");?>");
		function Reloj(){ 
    			Hora = Hoy.getHours() 
    			Minutos = Hoy.getMinutes() 
    			Segundos = Hoy.getSeconds() 
    			if (Hora<=9) Hora = "0" + Hora 
    			if (Minutos<=9) Minutos = "0" + Minutos 
    			if (Segundos<=9) Segundos = "0" + Segundos 
    			var Dia = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"); 
    			var Mes = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
    			var Anio = Hoy.getFullYear(); 
    			var Fecha = Dia[Hoy.getDay()] + " " + Hoy.getDate() + " de " + Mes[Hoy.getMonth()] + " de " + Anio; 
    			var Inicio, Script, Final, Total 
    			Inicio = "<font size=3 color=black>" 
    			Script = Hora + ":" + Minutos + ":" + Segundos + " | " + Fecha 
    			Final = "</font>" 
    			Total = Inicio + Script + Final 
    			document.getElementById('Fecha_Reloj').innerHTML = Script 
    			Hoy.setSeconds(Hoy.getSeconds() +1)
    			setTimeout("Reloj()",1000)
		} 
</script>
		<div id="Fecha_Reloj">
		</div>
		</div>
		<div id="marca">
			<marquee>
			<a href="videos.php">Video 75º Aniversario</a> , 	
	        <a href="fechas.php">Fechas de examen</a> ,
			<a href="materias.php">Descargar programas de materias</a> ,
			<a href="superior.php">Ciclo superior</a> , 
			<a href="galeria">Galeria de Fotos</a>
			</marquee>
		</div>
	</div>
	<img id="banner" src="./css/images/main.jpg">
</div>
