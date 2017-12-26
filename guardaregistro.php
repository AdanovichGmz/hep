<html>
<head>
  <meta charset="utf-8" /></head> 
<h2>
<?php
header('Content-Type: text/html; charset=utf-8');//caracteres de acento para visualizar
$titulo=$_REQUEST['titulo'];
echo"No de Orden:  " . $titulo,"</br>";
$noticia=$_REQUEST['noticia'];
echo"Comentarios:  " . $noticia,"</br>";
$archivo=$_FILES['foto']['tmp_name'];
//echo "Archivo:  " . $archivo,"</br>";
$foto=$_FILES['foto']['name'];
echo "Archivo:  " . $foto,"</br>";
$tamano=$_FILES['foto']['size'];
echo "Size:  " . $tamano,"</br>";

$ubicacion="archivos/".$foto;
//echo $ubicacion;


if (move_uploaded_file($_FILES['foto']['tmp_name'],$ubicacion)){ 
//if ($tamano > "0")){
        echo "</br>";
      	echo "El archivo ha sido cargado correctamente."; 
   	}
   	else{ 
   	echo "</br>";
      	echo "Ocurrio algun error al subir el archivo";
      	echo "</br>";
      	echo "No pudo guardarse"; 
      	echo "</br>";
      	echo "</br>";
      	echo "Intente de nuevo"; 
      	 
   	} 
move_uploaded_file($archivo,$ubicacion);

$enlace = mysql_connect ("localhost","cajasdec_userhep","Historias2016");
mysql_select_db("cajasdec_listas");
mysql_query("insert into archivos (odt, cliente, archivo) VALUES ('$titulo','$noticia','$foto')");

$enlace =  mysql_connect('localhost', 'cajasdec_victor', 'Vitorio1');
//if (!$enlace) {
//   die('No pudo conectarse: ' . mysql_error());
//}
//echo "</br>";
//echo 'Conectado satisfactoriamente';
//mysql_close($enlace);
mysql_close($enlace);
echo "</br>";
echo "</br>";
//echo"Archivo Guardado";
echo "</br>";
?>

</h2>
</br>
<h1>
<a href="index.html">Inicio</a>
</h1>
</html>