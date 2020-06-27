<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bluedream.css" type="text/css" />
<style type="text/css">
body {
	background: #ffffff;
	text-align: justify;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
	-x-system-font:none;
	
}
</style>
<script language="JavaScript" for="window" event="onload">
var docAncho=document.documentElement.scrollWidth;
var docAlto=document.body.scrollHeight;
window.resizeTo(docAncho,docAlto);
</script>
</head>
<body>
<?php
$flag=0;
if ($_REQUEST['buscar']==1) 
  { 
    $busqueda='apellido';  
  } 
  else 
  { 
    if ($_REQUEST['buscar']==2) 
    { 
      	$busqueda='nombre'; 
    } 
  else
    if ($_REQUEST['buscar']==3)
    {
	$busqueda='egreso';
    } 
  }


$valor = $_REQUEST['buscar'];
if ($valor == null) {
echo "";
}
else {

//valida datos de ingreso
$texto_ingreso=(isset($_REQUEST['texto_ingreso'])) ? trim(strip_tags($_REQUEST['texto_ingreso'])) : "";

$texto_limpio = $texto_ingreso;
//Luego de Horas de busqueda encontre el codigo de transformar string UTF-8 a Latin-1 para poder buscar palabras con acentos y enies en la BD
$texto_limpio = mb_convert_encoding($texto_limpio, "ISO-8859-1", "UTF-8");



$conexion=mysql_connect("mysql9.000webhost.com","a7656745_prueba","franchela**") or 
  die("Problemas en la conexion");
mysql_select_db("a7656745_prueba",$conexion) or
  die("Problemas en la selección de la base de datos");
$registros=mysql_query("select * 
                       from egresados where $busqueda like '%$texto_limpio%'",$conexion) or
  die("Problemas en el select:".mysql_error());
while ($reg=mysql_fetch_array($registros))
{
  if ($flag==0)
  {
	echo "<p><b>Personas encontradas:</b></p><div align='center'><table border='1'>";
	echo "<tr><td width='150px'><b>Nombre</b></td><td width='150px'><b>Apellido</b></td><td width='63px'><b>Año de Egreso</b></td><td width='63px'><b>Año</b></td><td width='63px'><b>División</b></td></tr>";
  }
  $flag=1;
  
  echo utf8_encode("<tr><td>".$reg['nombre']."</td>");
  echo utf8_encode("<td>".$reg['apellido']."</td>");
  echo utf8_encode("<td>".$reg['egreso']."</td>");
  echo "<td>".$reg['anio']."</td>";
  echo "<td>".$reg['div']."</td>";
}
if ($flag==0)
{
  echo "Su busqueda ha finalizado sin éxitos.<br>";
}
else
{
 echo"</tr></table></div>";
}

mysql_close($conexion);

}
?>
<br>
<div align="center"><a href="http://et12.host56.com/iframea.php">Regresar al buscador</a></div>
</body>
</html>
