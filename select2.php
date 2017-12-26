  <?php 
//establece una conexión con la base de datos. 
$conexion = mysql_connect("localhost","cajasdec_victor","Vitorio1") or die("No se pudo "); 
mysql_select_db("cajasdec_listas")or die("No se puede seleccionar BD"); 
$sql = "SELECT * from usuarioS";
mysql_query($sql,$conexion);//REALIZA LA CONSULTA

//$consulta = "SELECT usuarios FROM cajasdec_listas";
//$peticion = mysql_query ($consulta, $conexion);

//$info = mysql_fetch_array($peticion);
//...y lo mostramos con un while, o como queramos..
echo ("$sql");
?>