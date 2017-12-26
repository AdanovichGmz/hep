 <?php

//$servername = "localhost";
//$username = "cajasdec_victor";
//$password = "Vitorio1";

// Create connection
//$enlace = mysql_connect($servername, $username, $password);//
$enlace = mysql_connect("localhost", "cajasdec_victor", "Vitorio1");
//mysql_connect ("localhost","cajasdec_victor","Vitorio1");

if (!$enlace) {
    die('no hay conexion: ' . mysql_error());
}
echo 'conexion exitosa';
mysql_close($enlace);

?> 