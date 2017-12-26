 <?php

//$servername = "localhost";
//$username = "cajasdec_victor";
//$password = "Vitorio1";

// Create connection
//$enlace = $enlace = mysqli_connect("127.0.0.1", "mi_usuario", "mi_contraseña", "mi_bd");//


$enlace = mysqli_connect("localhost", "cajasdec_victor", "Vitorio1","cajasdec_listas");

//mysql_connect ("localhost","cajasdec_victor","Vitorio1");

if (!$enlace) {
    die('no hay conexion: ' . mysqli_connect_error());
}
echo 'conexion exitosa';
mysql_close($enlace);

?> 