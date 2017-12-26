<html>
<head>
	<title>Inicio</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/stylesl1.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
	<link rel="stylesheet" type="text/css" href="css/stylemenu.css" />
	
</head>
<body>
<div id="logo">
<img src="ima/logo.png" id="ima1"><label>Descargar Archivos</label>
<br />
<br />


<?php
header('Content-Type: text/html; charset=utf-8');//caracteres de acento para visualizar
mysql_connect ("localhost","cajasdec_userhep","Historias2016");
mysql_select_db("cajasdec_listas");
$tienda=$_REQUEST['tienda'];
$tienda2="\"$tienda \"";
//"<font color='blue'><h1>Datos actualizados </h1></font><br>"
echo "<font color='blue'><h1> $tienda2 </h1></font><br>";
// echo es la consulta a realizar para llamar los datos
$resultados=mysql_query("SELECT * FROM `rotulacion` WHERE `Tienda`=$tienda2 AND `recibida` !='descargada'");

//llamado de la url para la busqueda del archivo
$url="/listasrotulacion/";

//variable a guardar
$status="descargado";

?>


<h1>Listas de rotulacion</h1>
<table>
<tr><td width='100px' align=center><font color='blue'><h3>N Lista</h3></font></td>
<td width='100px'><font color='blue'><h3>N Orden</h3></font></td>
<td width='400px'><font color='blue'><h3>Nombre del archivo</h3></font></td>
<td width='200px'><font color='blue'><h3>Descarga</h3></font></td>
</table>
<?php
     while ($fila = mysql_fetch_array($resultados) )/*un ciclo para la busqueda de todos los datos*/
     {

  echo "<table><tr><td width='100px' align=center>";
  echo $fila["numlista"]."</td>";
  echo "<td width='100px'>".$fila["odt"]."</td>";
  echo "</td>";
  echo "<td width='400px'>";
  echo $fila["archivo"];
  echo "</td>";
  echo "<td width='200px'>";
  //echo $fila["recibida"];
  //echo "</td>";
  //echo "<td>";
  //convinacion del nombre y la ruta
  $redirec=$url.$fila["archivo"];
 ?>
 <a href="actualizar.php?archivos=<?php echo $fila["archivo"];?>&&tienda=<?php echo $fila["Tienda"];?>">
   <?php

  echo "<input type='submit' value='Descargar' ></a></td>";
//  echo "<td><a href='".$redirec."' download='".$fila["archivo"]."' >";
  
//  echo "<input type='submit' value='Descargas'></a></td>";

  echo "</tr></table>";
  echo "<br>";
  ?>
 <?php
   }
mysql_close();
?>

</body>
</html>
