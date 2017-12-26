<?php
header('Content-Type: text/html; charset=utf-8');//caracteres de acento para visualizar
mysql_connect ("localhost","cajasdec_victor","Vitorio1");
mysql_select_db("cajasdec_listas");
$tienda=$_REQUEST['tienda'];
$tienda2="\"$tienda \"";
echo $tienda2;
// echo es la consulta a realizar para llamar los datos
$resultados=mysql_query("SELECT * FROM `rotulacion` WHERE `Tienda`=$tienda2");
//$resultados=mysql_query("SELECT * FROM `rotulacion` WHERE `Tienda`=\"polanco\"");
//$resultados=mysql_query("select * from 'rotulacion' where 'tienda'=$tienda");

//llamado de la url para la busqueda del archivo
$url="/listasrotulacion/";

//variable a guardar
$status="descargado";

?>
<html>
<body>
<h1>Listas de rotulacion</h1>
<?php
     while ($fila = mysql_fetch_array($resultados) )/*un ciclo para la busqueda de todos los datos*/
     {
 ?>
 <?php
  echo "<table><tr><td width='100px'>N de orden</td><td>Nombre del archivo</td><td width='200px'>Status</td><td width='200px'></td></tr><tr><td>";
  echo $fila["odt"];
  echo "</td>";
  echo "<td width='450px'>";
  //convinacion del nombre y la ruta
  $redirec=$url.$fila["archivo"];
 ?>
  <?php
  if($fila["archivo"]==NULL){//si hay un campo o registro sin el nombre del archivo
      echo "No existe archivo";
  }
  else{
      echo $fila["archivo"];
  }
  echo "</td>";
  echo "<td>";
  echo $fila["recibida"];
  echo "</td>";
  echo "<td><a href='".$redirec."' download='".$fila["archivo"]."' >";

  echo "<input type='submit' value='Descargas'></a></td>";
  echo "</tr></table>";
  echo "<br>";
  ?>
 <?php
   }
mysql_close();
?>
</body>
</html>