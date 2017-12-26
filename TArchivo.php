<?php
//conexion a la base de datos
mysql_connect ("localhost","cajasdec_victor","Vitorio1");
mysql_select_db("cajasdec_listas");//uso de la base de datos
$resultados=mysql_query("SELECT * FROM `archivos`");//llamado de la tabla a utilizar

?>
<html>
<body>
<h1>Tiendas</h1><br>
<?php
     while($fila1=mysql_fetch_array($resultados) )
     {
?>
<a href="archivos.php?tienda=<?php echo $fila1["tienda"]; ?>">
<?php
   echo $fila1['Tienda'];
?>
</a><br />
<?php
   }
mysql_close();
?>
</body>
</hrml>