<?php
require("../conexion/conexion.php");
date_default_timezone_set("America/Mexico_City");
session_start();
$user=$_SESSION['id'];
$almacen=$_SESSION['almacen'];
$tienda=$_SESSION['tienda'];
$today=date("d-m-Y");
$productos=$_POST['productos'];
$cantidades=$_POST['cantidades'];
$costos=$_POST['costos'];
$costoTotal=$_POST['costo-total'];
$unitarios=$_POST['unitarios'];
$pIds=$_POST['productosId'];
$stocks=$_POST['stocks'];
$countProducts=0;

function dec_enc($action, $string) {
    $output = false;
 
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';
 
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
 
    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
 
    return $output;
}

$insertingMovimiento=$mysqli->query("INSERT INTO `movimientos` (`id_movimiento`, `tipo`, `code`, `fecha`, `id_usuario`, `tienda`, `almacen`, `observaciones`, `total`) VALUES (NULL, 2,NULL, '$today', $user, '$tienda', '$almacen', NULL, $costoTotal)");
$last_mov=$mysqli->insert_id;
$code=(($user>2)? '0'.$user:$user).(($tienda>2)? '0'.$tienda:$tienda).date("mYd").$last_mov;

$encrpt=dec_enc('encrypt',$last_mov);

$savecode=$mysqli->query("UPDATE movimientos SET code='$encrpt' WHERE id_movimiento=$last_mov");
if (!$savecode) {
  printf($mysqli->error);
}
if ($insertingMovimiento) {


  foreach ($productos as $producto) {
    $costo=$costos[$producto];
    $stock=$stocks[$producto];
  $cantidad=$cantidades[$producto];
  $unitario=$unitarios[$producto];
  $idprod=$pIds[$producto];
  $newStock=$stock-$cantidad;
 
  $query="INSERT INTO `detalle`(`id_detalle`, `id_movimiento`, `id_producto`, `cantidad`, `almacen`, `tipo`, `fecha`, `precio`, `importe`) VALUES (NULL, $last_mov, $idprod, '$cantidad', '$almacen', 2, '$today', $unitario, $costo)";
    $insert_detail=$mysqli->query($query);
 if ($insert_detail) {
  $countProducts++;
  $updateStock=$mysqli->query("UPDATE stocks SET stock=$newStock WHERE id_producto=$idprod AND id_almacen=$almacen");
 }else{
  printf($mysqli->error) ;
  echo $query;
}

  
}

}else{
  printf($mysqli->error);
}

$prods=count($productos);
if ($prods==$countProducts) {
?>
<p>¡Movimiento registrado correctamente!</p>
<p>Imprime tu nota <a href="../ticket/ticket.php?mov=<?=$last_mov?>" target="_blank">Aqui</a></p>

<?php
}else{ ?>
<p>¡Movimiento registrado correctamente!</p>
<?php
}
?>