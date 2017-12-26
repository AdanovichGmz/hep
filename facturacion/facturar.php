<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
require("../conexion/conexion.php");
require '../PHPMailer/PHPMailerAutoload.php';
 $rfc=(isset($_POST['rfc']))? "'".$_POST["rfc"]."'" : 'NULL';
 $descrip=(isset($_POST['radios']))? "'".$_POST["radios"]."'" : 'NULL';
 $recibo=(isset($_POST['recibo']))? "'".$_POST["recibo"]."'" : 'NULL';
 $razon=(isset($_POST['razon']))? "'".$_POST['razon']."'" : 'NULL';
 $calle=(isset($_POST['calle']))? "'".$_POST['calle']."'" : 'NULL';
 $no_int=(isset($_POST['no-int']))? ((!empty($_POST['no-int']))?$_POST['no-int']:'null') : 'NULL';
 $no_ext=(isset($_POST['no-ext']))? ((!empty($_POST['no-ext']))?$_POST['no-ext']:'null') : 'NULL';
 $monto=(isset($_POST['monto']))? ((!empty($_POST['monto']))?$_POST['monto']:'null') : 'NULL';
 $estado=(isset($_POST['estado']))? "'".$_POST['estado']."'" : 'NULL';
 $cp=(isset($_POST['cp']))? "'".$_POST['cp']."'" : 'NULL';
 $col=(isset($_POST['col']))? "'".$_POST['col']."'" : 'NULL';
 $del=(isset($_POST['del']))? "'".$_POST['del']."'" : 'NULL';
 $tel=(isset($_POST['tel']))? "'".$_POST['tel']."'" : 'NULL';
 $e_mail=(isset($_POST['mail']))? "'".$_POST['mail']."'" : 'NULL';
$query="INSERT INTO `solicitud_factura` (`id_factura`,`recibo`,`monto`, `rfc`, `razon_social`, `descripcion`, `calle`, `no_int`, `no_ext`, `cp`, `colonia`, `delegacion`, `estado`,`telefono`, `email`, `realizada`, `fecha_realizacion`, `enviada`, `fecha_envio`, `archivo_xml`, `archivo_PDF`) VALUES (NULL,$recibo,$monto, $rfc, $razon,$descrip, $calle, $no_int, $no_ext, $cp, $col, $del,$estado, $tel, $e_mail, 2, NULL, 2, NULL, NULL, NULL)";
 $insert_request=$mysqli->query($query);
 if ($insert_request) {
 	
     echo "<div class='success-message'><img src='../images/success.png'><p>Hemos recibido tus datos, te enviamos un correo de confirmacion a la cuenta: <span style='color:#333333;'>".$_POST['mail']."</span> por favor revisa tu bandeja de entrada</p><div>";
     sendEmail($_POST['mail']);
 }else{
    echo "<div class='success-message'><img src='../images/error.jpg'><p>Ocurrio un error inesperado, por favor vuelve a intentar mas tarde</p><div>";
    printf($mysqli->error);
    $usedquery="INSERT INTO `solicitud_factura` (`id_factura`,`recibo`, `rfc`, `razon_social`, `descripcion`, `calle`, `no_int`, `no_ext`, `cp`, `colonia`, `delegacion`, `telefono`, `email`, `realizada`, `fecha_realizacion`, `enviada`, `fecha_envio`, `archivo_xml`, `archivo_PDF`) VALUES (NULL,$recibo, $rfc, $razon,$descrip, $calle, $no_int, $no_ext, $cp, $col, $del, $tel, $e_mail, 2, NULL, 2, NULL, NULL, NULL)";
    //echo $usedquery;
    //print_r($_POST);
 }

function sendEmail($targetmail){

$mail = new PHPMailer;

//$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'zuleika.rxmx.net';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = false;                            // Enable SMTP authentication
$mail->Username = 'facturacion@henpapel.com';          // SMTP username
$mail->Password = 'kZ_MPhI*Nn6q'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                 // TCP port to connect to

$mail->setFrom('facturacion@henpapel.com', 'Historias en Papel');
//$mail->addReplyTo('adn2290@hotmail.com', 'HEP');
$mail->addAddress($targetmail);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

//$bodyContent = file_get_contents("template.html");

$mail->AddBCC('adn2290@hotmail.com', 'Person Two');
$mail->Subject = 'Ya recibimos tus datos';
$mail->msgHTML('<body style="background:#EFEFEF; width: 100%; height: 600px;background-repeat: repeat-y repeat-x ;top: 0%;left: 0px;position: absolute;overflow-x: hidden;overflow-y: hidden;;"><div style="margin-bottom: 50px;"><div style="width:80%;margin: 80px auto;background: #fff;border: none;position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);border-radius: 5px;"><div style="width: 90%;margin: 0 auto;height: 100%;"><div style="width: 100%;height: 260px;text-align: center;"><img style="width: 50%;margin: 0 auto !important;padding-top:15px;" src="../images/logo-hp-con-mini1.png" ></div><div style="width: 100%;height: 300px; text-align:center;"><p style="text-align:center;">Hemos recibido tus datos, tu factura ya esta procesandose, una vez que la tengamos lista te la enviaremos a este correo</p><br></div></div></div></div></body></html>'); 
//$mail->Body    = file_get_contents("template.html");

if(!$mail->send()) {
    
} else {
    
}




}



?>