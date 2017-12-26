<?php
mysql_connect ("localhost","cajasdec_victor","Vitorio1");
mysql_select_db("cajasdec_carrito");
$resultados=mysql_query("SELECT * FROM `categorias`");
echo $resultados;

?>
<html>
<head>
</head>
<body>
<h1>Categor�as</h1>
<?php
     while ($fila = mysql_fetch_array($resultados) ){
 ?>
 <img width="100" src="<?php echo $fila["foto"];?>"/>
  <a href="productos.php?id_categoria=<?php echo $fila["id_categoria"]; ?>">
  <?php echo $fila["categoria"]; ?>
  </a></br>
 <?php
   }
mysql_close();
?>
</body>
</html>