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
//header('Content-Type: text/html; charset=utf-8');//caracteres de acento para visualizar
//cadena de conexion a la base de datos
mysql_connect ("localhost","cajasdec_victor","Vitorio1");
mysql_select_db("cajasdec_listas");

//llamar los datos de la contrasena y el usuario
$usuario=$_REQUEST['usuario'];
//echo $usuario;
$clave=$_REQUEST['clave'];
//llama al tipo de usuario
$tipo="rotulacion";


//consulta para validar los datos del usuario

$resultados=mysql_query("SELECT * FROM `usuarios` WHERE `usuario`='".$usuario."' AND `password`='".$clave."' AND `tipo`='".$tipo."' ");

$resu=mysql_fetch_row($resultados); //es para verificar el usuario a utilizar


if(!$resu){ //si el resultado de la query es negativa manda un mensaje de error
   //echo "no es el cliente";
    //header("Location:index3.html");
    
$tipo="tienda";

$resultados=mysql_query("SELECT * FROM `usuarios` WHERE `usuario`='".$usuario."' AND `password`='".$clave."' AND `tipo`='".$tipo."' ");
$resu=mysql_fetch_row($resultados); //es para verificar el usuario a utilizar
if(!$resu){ //si el resultado de la query es negativa manda un mensaje de error
   
   echo "Datos incorrectos";
   
for ($i = 1; $i <= 1000000; $i++) {
    //echo $i;
}
   
   header("Location:index3.html");
  // header("Location:tiendas.php");
   
}
else{ //nos manda que los datos estan correctos
    header("Location:index2.html");
    //header("Location:index3.html");
} 
    
}
else{ //nos manda que los datos estan correctos
   // header("Location:index2.html");
      header("Location:tiendas.php");
} 


mysql_close();
?>
</body>
</html>