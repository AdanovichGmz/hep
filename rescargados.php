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
$resultados=mysql_query("SELECT * FROM `procodt`");

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
<tr><td width='100px'><font color='blue'><h3>N Orden</h3></font></td>
<td width='30px'><font color='blue'><h7>Positivo</h7></font></td>
<td width='30px'><font color='blue'><h7>Placa</h7></font></td>
<td width='30px'><font color='blue'><h7>Placa_HS</h7></font></td>
<td width='30px'><font color='blue'><h7>LaminaOff</h7></font></td>
<td width='30px'><font color='blue'><h7>Corte</h7></font></td>
<td width='30px'><font color='blue'><h7>Revelado</h7></font></td>
<td width='30px'><font color='blue'><h7>Laser</h7></font></td>
<td width='30px'><font color='blue'><h7>Suaje</h7></font></td>
<td width='30px'><font color='blue'><h7>Serografia</h7></font></td>
<td width='30px'><font color='blue'><h7>Offset</h7></font></td>
<td width='30px'><font color='blue'><h7>Digital</h7></font></td>
<td width='30px'><font color='blue'><h7>LetterPres</h7></font></td>
<td width='30px'><font color='blue'><h7>Encuaderna</h7></font></td>
<td width='30px'><font color='blue'><h7>HotStamping</h7></font></td>
<td width='30px'><font color='blue'><h7>Grabado</h7></font></td>
<td width='30px'><font color='blue'><h7>Pleca</h7></font></td>
<td width='40px'><font color='blue'><h7>Acabado</h7></font></td>
<td width='30px'><font color='darkred'><h7>CompraPapel</h7></font></td>
<td width='40px'><font color='darkred'><h7>CompraAcc</h7></font></td>
<td width='30px'><font color='darkgreen'><h7>Entrega</h7></font></td>
</table>
<?php
     while ($fila = mysql_fetch_array($resultados) )/*un ciclo para la busqueda de todos los datos*/
     
     {
?>
<table><tr>
<td width='100px'> <?php echo $fila["odt"];?> </td>
<td width='30px'> <a href="conexion.php">  <img width="15" src="<?php echo $fila["proc1"];?>"/></a> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc2"];?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc3"];?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc4"];?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc5"];?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc6"];?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc7"];?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc8"].".jpg";?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc9"].".jpg";?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc10"].".jpg";?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc11"].".jpg";?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc12"].".jpg";?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc13"].".jpg";?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc14"].".jpg";?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc15"].".jpg";?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc16"].".jpg";?>"/> </td>
<td width='40px'> <img width="15" src="<?php echo $fila["proc17"].".jpg";?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["c1"].".jpg";?>"/> </td>
<td width='40px'> <img width="15" src="<?php echo $fila["c2"].".jpg";?>"/> </td>
<td width='30px'> <img width="15" src="<?php echo $fila["proc18"].".jpg";?>"/> </td>
 </tr></table>
  
  
 <?php
   }
mysql_close();
?>

</body>
</html>
