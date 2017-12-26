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
//llamar las variables a mostrar
$archivo=$_REQUEST['archivos'];
$tienda=$_REQUEST['tienda'];
//echo $tienda;

//muestra el titulo de inicio en la pantalla
echo "<font color='blue'><h1>Datos actualizados </h1></font><br>";

//llamado de la url para la busqueda del archivo
$url="/listasrotulacion/";

//conectar a la base de datos
$enlace = mysql_connect ("localhost","cajasdec_victor","Vitorio1");
mysql_select_db("cajasdec_listas");
$resultados=mysql_query("SELECT * FROM `rotulacion` WHERE `archivo`='".$archivo."' AND `Tienda`='".$tienda."' ");

//actualizar datos 
$act="UPDATE `rotulacion` SET `recibida`='descargada' WHERE `archivo`='".$archivo."' AND `Tienda`='".$tienda."' ";
$rs= mysql_query($act);
?>

<?php
//metodo para llamar los odt de cada consulta
while ($fila = mysql_fetch_array($resultados) ){//un ciclo para la busqueda de todos los datos
    //poner los datos en la base de datos
echo "<table><tr><td width='200px'><font color='blue'><h3>Id</h3></font></td><td width='200px'><font color='blue'><h3>Nombre del archivo</font></h3></td><td width='200px'><font color='blue'><h3>Odt</h3></font></td><td width='200px'><font color='blue'><h3>Tienda</h3></font></td></tr><tr>";
    echo "<td><input type='text' value='".$fila["Idrotulacion"]."' disabled></td>";
    echo "<td><input type='text' value='".$fila["archivo"]."' disabled ></td>";
    echo "<td><input type='text' value='".$fila["odt"]."'disabled></td>";
    echo "<td><input type='text' value='".$fila["Tienda"]."' disabled ></td>";
//    echo "<td><input type='text' value='".$fila["recibida"]."' disabled></td>";

//convinacion del nombre y la ruta
  $redirec=$url.$fila["archivo"];
?>
<?php
    echo "<td><a href='".$redirec."' download='".$fila["archivo"]."''><input type='button' value='Descargar'></a>";
    echo "</td></tr></table>";
?>
    <a href="tiendas.php">
<?php

echo "<br /><input type='button' value='Regresar'></a>";
}
mysql_close($enlace);
?>
</body>
</html>
