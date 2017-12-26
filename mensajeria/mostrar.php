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
<img src="ima/logo.png" id="ima1"><label></label>
<br />
<br />


<?php
header('Content-Type: text/html; charset=utf-8');//caracteres de acento para visualizar
mysql_connect ("localhost","cajasdec_victor","Vitorio1");
mysql_select_db("cajasdec_listas");

// echo es la consulta a realizar para llamar los datos
$resultados=mysql_query("SELECT * FROM `mensajeria`");

//llamado de la url para la busqueda del archivo
$url="/listasrotulacion/";

//variable a guardar
$status="descargado";

?>


<h1>Procesos de Produccion</h1>
<p>
<table>
<tr>
<td width='70px'><p1>En tiempo</p1></td>
<td width='30px'><img width="15" src="1.jpg"/></td>
<td width='50px'><p1>Atrasado</p1></td>
<td width='30px'><img width="15" src="2.jpg"/></td>
<td width='40px'><p1>Tarde</p1></td>
<td width='30px'><img width="15" src="3.jpg"/></td>
<td width='70px'><p1>Programado</p1></td>
<td width='30px'><img width="15" src="5.jpg"/></td>
<td width='70px'><p1>No Aplica</p1></td>
<td width='30px'><img width="15" src="0.jpg"/></td>
</tr>
</table>
       
</p>
<table>
<tr><td width='100px'><font color='blue'><h3>Folio</h3></font></td>
<td width='30px'><font color='blue'><h3>Zona</h3></font></td>
<td width='30px'><font color='blue'><h3>Fecha</h3></font></td>
<td width='30px'><font color='blue'><h3>Hora</h3></font></td>
<td width='30px'><font color='blue'><h3>Empresa</h3></font></td>
<td width='30px'><font color='blue'><h3>Domicilio</h3></font></td>
<td width='30px'><font color='blue'><h3>Atencion</h3></font></td>
<td width='30px'><font color='blue'><h3>telefono</h3></font></td>
<td width='30px'><font color='blue'><h3>Comentario</h3></font></td>
<td width='30px'><font color='blue'><h3>Entregado</h3></font></td>

</table>
<?php
     while ($fila = mysql_fetch_array($resultados) )/*un ciclo para la busqueda de todos los datos*/
     
     {
?>
<table><tr>
<div>
<td width='30px'> <?php echo $fila["idmens"];?> </td>
<td width='40px'> <h3><?php echo $fila["solicita"];?></h3> </td>
<td width='50px'> <h3><?php echo $fila["fechaenvio"];?></h3> </td>
<td width='50px'> <h3><?php echo $fila["horaenvio"];?></h3> </td>
<td width='120px'> <h3><?php echo $fila["empresa"];?></h3> </td>
<td width='150px'> <h3><?php echo $fila["direccion"];?></h3> </td>
</div>
<div>
<td width='50px'> <h3><?php echo $fila["atencion"];?></h3> </td>
<td width='40px'> <h3><?php echo $fila["telefono"];?></h3> </td>
<td width='150px'> <h3><?php echo $fila["comentario"];?></h3> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["generado"].".jpg";?>"/> </td>
</div>
 </tr></table>
  
  
 <?php
   }
mysql_close();
?>

</body>
</html>
