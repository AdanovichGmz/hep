  <?php 
//establece una conexión con la base de datos. 
$conexion = mysql_connect("localhost","cajasdec_victor","Vitorio1") or die("No se pudo "); 
mysql_select_db("cajasdec_listas") or die("No se puede seleccionar BD"); 

$res=mysql_query("SELECT usuario * FROM cajasdec_listas"); 
echo ('$res');
?> 