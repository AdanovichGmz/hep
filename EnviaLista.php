<?php
require ('conexion.php');       	 
//$enlace = mysql_connect ("localhost","cajasdec_victor","Vitorio1");
//mysql_select_db("cajasdec_listas");
//$query0="SELECT * FROM rotulacion";

?>
<html>
<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 207px;
	height: 84px;
	z-index: 1;
	left: 21px;
	top: 2057px;
}
.blanco {
	color: #FFF;
}
.BLANCO {
	color: #FFF;
}
</style>
<title> HEP </title>
	
	<meta name ="description" content ="No aplicable"/>
    
</head>

<body>
	<h1><img src="imagenes/logo.png" width="343" height="147"/></h1>
	<h1><center>Listas de Rotulación</center></h1>
    <hr size="5"/>

    
	 <h2><center>Datos para enviar</center></h2>
<p>     
<form action ="guardalista.php"method="post" enctype="multipart/form-data">


                                          
 <select name="Selecciona">

  <?php
mysql_connect ("localhost","cajasdec_victor","Vitorio1");
mysql_select_db("cajasdec_listas");
                         $resultados=mysql_query("SELECT * FROM `procodt`");
                         
  while ($fila = mysql_fetch_array($resultados)) {
                     echo '<option value="'.$fila["odt"].'">'.$fila["odt"].'</option>';
                      }

  ?>
</select>   
                          

                  
                                          
                          

</br>
</br>
Tienda:   <input list="tiendas" name="tienda">
  <datalist id="tiendas">
    <option value="ALTAVISTA">
	<option value="LIVERPOOL-PS">
	<option value="LIVERPOOL-PUE">
	<option value="LIVERPOOL-SAT">
	<option value="LIVERPOOL-SF">
    <option value="POLANCO">
    <option value="SANTA FE">
    <option value="SATELITE">
    <option value="VERACRUZ">
  </datalist>
 </br>
</br>
Lista Número:   <input type="number" name="numlista" min="1" max="5">
  </br> 
  </br>
Cantidad: <input type="number" name="cantidad" min="1" max="500">
</br>
</br>  
 <textarea name="noticia" rows="4" cols="30">Escribe tus comentarios</textarea>
 </br> 
  </br> 
Archivo: <input type="file" name="foto"/>
 </br>
 </br>
 <input type= "submit" value="Enviar"/ align="middle">
 </br>
 
</form>
  </p>

 
</body>
</html>