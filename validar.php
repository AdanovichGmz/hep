
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
        $_SESSION['almacen']=$f['id_almacen'];
      $_SESSION['logged']=true;
       unset($_SESSION['log_incorrect']);
       
        //$_SESSION['nommaquina'] = $f['nommaquina'];


        
   

  
    
/*
if (isset($_COOKIE['asaichii'])){
    header("Location: index2.php");
}else{
    header("Location: asaichii.php");
} */
        header("Location: dashboard.php");
        }else{
        
        $_SESSION['log_incorrect']='true';
        header("Location: index.php");

        }
        }

?>