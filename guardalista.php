<?php

$titulo=$_REQUEST['titulo'];
echo"No de Orden:  " . $titulo,"</br>";
$noticia=$_REQUEST['noticia'];
echo"Comentarios:  " . $noticia,"</br>";
$tienda=$_REQUEST['tienda'];
echo"Tienda:  " . $tienda,"</br>";
$numlista=$_REQUEST['numlista'];
echo"Lista Número:  " . $numlista,"</br>";
$cantidad=$_REQUEST['cantidad'];
echo"cantidad:  " . $cantidad,"</br>";
$archivo=$_FILES['foto']['tmp_name'];
//echo "Archivo:  " . $archivo,"</br>";
$foto=$_FILES['foto']['name'];
echo "Archivo:  " . $foto,"</br>";
$tamano=$_FILES['foto']['size'];
echo "Size:  " . $tamano,"</br>";

$ubicacion="listasrotulacion/".$foto;
echo $ubicacion;

move_uploaded_file($archivo,$ubicacion);


$enlace = mysql_connect ("localhost","cajasdec_userhep","Historias2016");
mysql_select_db("cajasdec_listas");
mysql_query("insert into rotulacion (odt, cliente, archivo, tienda, numlista, cantidadrot) VALUES ('$titulo','$noticia','$foto','$tienda','$numlista','$cantidad')");
mysql_close($enlace);


//$enlace =  mysql_connect('localhost', 'cajasdec_victor', 'Vitorio1');
//if (!$enlace) {
//    die('No pudo conectarse: ' . mysql_error());
//}
//echo 'Conectado satisfactoriamente';
//mysql_close($enlace);
echo "</br>";
echo "</br>";
echo"Archivo Guardado";
echo "</br>";
?>

<html>
<head>
    <meta charset="utf-8" />
</head> 
</br>
<a href="index.html">Inicio</a>
</html>