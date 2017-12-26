<?php
mysql_connect ("localhost","cajasdec_victor","Vitorio1");
mysql_select_db("cajasdec_PruebasETE");
$resultados=mysql_query("SELECT * FROM `procodt`");
echo $resultados;

?>
<html>
<head>
</head>
<body>
<h1>Categorias</h1>
<?php
     while ($fila = mysql_fetch_array($resultados) ){
  
// ?>
 
// <img width="10" src="<?php echo $fila["proc2"];?>"/>
  
//  <?php
   echo $fila["proc1"];
  echo $fila["odt"];
   ?>
  
  </a></br>
 <?php
   }
mysql_close();
?>
</body>
</html>