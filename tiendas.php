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
mysql_connect ("localhost","cajasdec_victor","Vitorio1");//conexion a bd
mysql_select_db("cajasdec_listas");//seleccionar la bd
$resultados=mysql_query("SELECT * FROM `tiendas`");//consulta

?>

<h1>Tiendas</h1>
<br />

<?php
     while ($fila = mysql_fetch_array($resultados) )//ciclo while para llamar a todas las datos existentes en la bd
     {
 ?>
  <a href="archivostienda.php?tienda=<?php echo $fila["tienda"]; ?>">
  <?php echo $fila["tienda"]; //variable fila identificar las columnas y los datos
  ?>
  </a></br>
 <?php
   }
mysql_close();
?>
</body>
</html>