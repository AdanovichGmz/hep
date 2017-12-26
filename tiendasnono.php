<?php
mysql_connect ("localhost","cajasdec_victor","Vitorio1");
mysql_select_db("cajasdec_listas");
$resultados=mysql_query("SELECT * FROM `tiendas`");

?>
<html>
<head>
</head>
<body>
<h1>Tiendas</h1>
<?php
     while ($fila = mysql_fetch_array($resultados) )
     {
 ?>
  <a href="archivostienda.php?tienda=<?php echo $fila["tienda"]; ?>">
  <?php echo $fila["tienda"]; 
  ?>
  </a></br>
 <?php
   }
mysql_close();
?>
</body>
</html>