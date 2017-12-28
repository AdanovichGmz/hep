<?php
session_start();
$store=$_SESSION['tienda'];
if ($_POST['form']=='archivo') { 
$target_dir = "../archivos/";
//print_r($_POST);
require("../conexion/conexion.php");
$odt=$_POST['odt'];
$comments=(isset($_POST['comments']))? $_POST['comments']:'--';
$idfact=(isset($_POST['idfact']))? $_POST['idfact'] : null;
$fecha=date("d-m-Y");
if (empty($_FILES["up-file"]["name"])) {
  $_SESSION['messages']=" No seleccionaste un archivo";
  $_SESSION['notification']='warning';
          $_SESSION['result']='HIJOLES:'.$_POST['form'];
    header("Location: index.php");
} else{
$upfile=(isset($_FILES["up-file"]["name"]))? "'".str_replace(" ","_",$_FILES["up-file"]["name"])."'":null;
$target_file = $target_dir . basename(str_replace(" ","_",$_FILES["up-file"]["name"]));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($imageFileType != "jpg"&&$imageFileType != "png") {
    $_SESSION['messages']=" Solo se permiten archivos jpg o png";
    $uploadOk = 0;
}
if (file_exists($target_file)) {
    $_SESSION['messages'].=" El archivo <span>".$_FILES["up-file"]["name"]."</span> ya existe ";
       $uploadOk = 0;    
}

$filename=$_FILES["up-file"]["name"];

if ($uploadOk == 0) {
    $_SESSION['notification']='fail';
          $_SESSION['result']='ERROR:';
    header("Location: index.php");

} else {
    if (move_uploaded_file($_FILES["up-file"]["tmp_name"], $target_file)) {
        $query="INSERT INTO archivos (odt, cliente, archivo) VALUES ('$odt','$comments','$filename')";
        $inserted=$mysqli->query($query);
        if ($inserted) {
          $_SESSION['messages']="El archivo <span>". basename($_FILES["up-file"]["name"])."</span> se ha cargado correctamente.";
          $_SESSION['notification']='success';
          $_SESSION['result']='LISTO:';
          header("Location: index.php");
        }else{
          printf($mysqli->error);
        }
    } else {
        echo "Ocurrio un error a la hora de subir.";
    }
}
}
}
elseif ($_POST['form']=='lista') {
 $target_dir = "../listasrotulacion/";
//print_r($_POST);
require("../conexion/conexion.php");
$odt=$_POST['odt'];
$numlist=$_POST['numlist'];
$qty=$_POST['qty'];

$comments=(isset($_POST['comments']))? $_POST['comments']:'--';
$idfact=(isset($_POST['idfact']))? $_POST['idfact'] : null;
$fecha=date("d-m-Y");
if (empty($_FILES["up-file"]["name"])) {
  $_SESSION['messages']=" No seleccionaste un archivo";
  $_SESSION['notification']='warning';
          $_SESSION['result']='HIJOLES:';
    header("Location: uploadList.php");
} else{
$upfile=(isset($_FILES["up-file"]["name"]))? "'".str_replace(" ","_",$_FILES["up-file"]["name"])."'":null;
$target_file = $target_dir . basename(str_replace(" ","_",$_FILES["up-file"]["name"]));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($imageFileType != "jpg"&&$imageFileType != "png") {
    $_SESSION['messages']=" Solo se permiten archivos jpg o png";
    $uploadOk = 0;
}
if (file_exists($target_file)) {
    $_SESSION['messages'].=" El archivo <span>".$_FILES["up-file"]["name"]."</span> ya existe ";
       $uploadOk = 0;    
}

$filename=$_FILES["up-file"]["name"];

if ($uploadOk == 0) {
    $_SESSION['notification']='fail';
          $_SESSION['result']='ERROR:';
    header("Location: uploadList.php");

} else {

    if (move_uploaded_file($_FILES["up-file"]["tmp_name"], $target_file)) {
        $query="INSERT INTO rotulacion (odt, cliente, archivo, tienda, numlista, cantidadrot) VALUES ('$odt','$comments','$filename',$store,$numlist,$qty)";
        $inserted=$mysqli->query($query);
        if ($inserted) {
          $_SESSION['messages']="El archivo <span>". basename($_FILES["up-file"]["name"])."</span> se ha cargado correctamente.";
          $_SESSION['notification']='success';
          $_SESSION['result']='LISTO:';
          header("Location: uploadList.php");
        }else{
          printf($mysqli->error);
        }
    } else {
        echo "Ocurrio un error a la hora de subir.";
    }
}
}
}
/*
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
*/
?>

