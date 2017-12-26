<?php
mysql_connect ("localhost","cajasdec_victor","Vitorio1");
mysql_select_db("cajasdec_listas");

// echo es la consulta a realizar para llamar los datos
$resultados=mysql_query("SELECT * FROM `procodt`");

?>

<html> 
<h1>Procesos de Produccion</h1>                                        
 <select>
  <?php
                         //$resultados=mysql_query("SELECT * FROM `procodt`");
                         
  while ($fila = mysql_fetch_array($resultados)) {
                     echo '<option value="'.$fila["odt"].'">'.$fila["odt"].'</option>';
                      }

 
 
  ?>
</select>   

</html>                       