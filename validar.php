
<?php
session_start();
require("conexion/conexion.php");

$username=$_POST['usuario'];
$pass=$_POST['pass'];



$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE nombre_usuario LIKE '$username'");
if($f=mysqli_fetch_assoc($sql)){
    if($pass==$f['password']){
        $_SESSION['id']=$f['id_usuario'];
        $_SESSION['logged_in']=$f['nombre_usuario'];
        $_SESSION['tienda']=$f['id_tienda'];
        $idtienda=$f['id_tienda'];
        $get_store=$mysqli->query("SELECT * FROM tiendas WHERE id_tienda=$idtienda");
        $storename=mysqli_fetch_assoc($get_store);
        $_SESSION['nom_tienda']=$storename['nombre_tienda'];
        $_SESSION['almacen']=$f['id_almacen'];
      $_SESSION['logged']=true;
       unset($_SESSION['log_incorrect']);
       
       if ($f['area']=='victor') {
          $_SESSION['area']='victor';
          header("Location: victor/");
       }else{
          $_SESSION['area']='ventas';
        header("Location: dashboard.php");
       }
        
        }else{
        
        $_SESSION['log_incorrect']='true';
        header("Location: index.php");

        }
        }

?>