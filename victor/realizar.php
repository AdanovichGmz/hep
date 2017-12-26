<?php
session_start();
$target_dir = "../files/";
//print_r($_POST);
require("../conexion/conexion.php");
require '../PHPMailer/PHPMailerAutoload.php';
$idfact=(isset($_POST['idfact']))? $_POST['idfact'] : null;
$fecha=date("d-m-Y");

if (empty($_FILES["filexml"]["name"]) || empty($_FILES["filepdf"]["name"])) {
	$_SESSION['messages']=" Debes subir los dos archivos, por favor intentalo de nuevo";
	$_SESSION['notification']='warning';
    			$_SESSION['result']='UH OH:';
    header("Location: index.php");
} else{

$xmlfile=(isset($_FILES["filexml"]["name"]))? "'".str_replace(" ","_",$_FILES["filexml"]["name"])."'":null;
$pdffile=(isset($_FILES["filepdf"]["name"]))? "'".str_replace(" ","_",$_FILES["filepdf"]["name"])."'":null;

$mailtarget=$_POST['mail'];
$target_file = $target_dir . basename(str_replace(" ","_",$_FILES["filexml"]["name"]));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//print_r($_FILES);

if($imageFileType != "xml" ) {
    $_SESSION['messages']=" Solo se permiten archivos pdf o xml";

    $uploadOk = 0;
}
if (file_exists($target_file)) {
    
    $_SESSION['messages'].=" El archivo <span>".$_FILES["filexml"]["name"]."</span> ya existe ";
    			
}


$target_file2 = $target_dir . basename(str_replace(" ","_",$_FILES["filepdf"]["name"]));
$uploadOk2 = 1;
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
//print_r($_FILES);

if($imageFileType2 != "pdf") {
    
    $_SESSION['messages']=" Solo se permiten archivos pdf o xml";
    			
    $uploadOk = 0;
}
if (file_exists($target_file2)) {
   
   $_SESSION['messages'].=" El archivo <span>".$_FILES["filepdf"]["name"]."</span> ya existe ";
    			
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    $_SESSION['notification']='fail';
    			$_SESSION['result']='ERROR:';
    header("Location: index.php");

} else {
    if (move_uploaded_file($_FILES["filexml"]["tmp_name"], $target_file)&&move_uploaded_file($_FILES["filepdf"]["tmp_name"], $target_file2)) {
    	echo $mailtarget;
    	
    	
    		$quer="UPDATE solicitud_factura SET archivo_xml=$xmlfile, archivo_pdf=$pdffile, fecha_de_envio='$fecha',enviada=1,realizada=1,fecha_realizacion='$fecha' WHERE id_factura=$idfact";
//echo $quer;
    		$updateBill=$mysqli->query("UPDATE solicitud_factura SET archivo_xml=$xmlfile, archivo_pdf=$pdffile, fecha_envio='$fecha',enviada=1,realizada=1,fecha_realizacion='$fecha' WHERE id_factura=$idfact");
    		if ($updateBill) {
    			

    			$_SESSION['messages']="Los archivos <span>". basename($_FILES["filexml"]["name"])."</span> y <span>". basename( $_FILES["filepdf"]["name"])."</span> se han subido para arriba.";
    			$_SESSION['notification']='success';
    			$_SESSION['result']='EXITO:';

    			sendEmail($mailtarget,$target_file,str_replace(" ","_",$_FILES["filexml"]["name"]),$target_file2,str_replace(" ","_",$_FILES["filepdf"]["name"]));

    		}else{
    			printf($mysqli->error);
    		}
    	
        
    } else {
        echo "Ocurrio un error a la hora de subir.";
    }
}
}
function sendEmail($targetmail,$xmltemp,$xmlname,$pdftemp,$pdfname){

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
$mail->AddAttachment($xmltemp, $xmlname );
$mail->AddAttachment($pdftemp, $pdfname );
$mail->AddBCC('adn2290@hotmail.com', 'Person Two');
$mail->Subject = 'Factura de Historias en Papel';
$mail->msgHTML('<body style="background:#EFEFEF; width: 100%; height: 600px;background-repeat: repeat-y repeat-x ;top: 0%;left: 0px;position: absolute;overflow-x: hidden;overflow-y: hidden;;"><div style="margin-bottom: 50px;"><div style="width:80%;margin: 80px auto;background: #fff;border: none;position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);border-radius: 5px;"><div style="width: 90%;margin: 0 auto;height: 100%;"><div style="width: 100%;height: 260px;text-align: center;"><img style="width: 50%;margin: 0 auto !important;padding-top:15px;" src="../images/logo-hp-con-mini1.png" ></div><div style="width: 100%;height: 300px; text-align:center;"><p style="text-align:center;">Tus facturas han sido generadas, puedes descargarlas picandole a estos botones que aqui estan</p><a href="http://henpapel.com/ventas/files/" style="width: 35%;margin: 8px 5px;border: none;height: 35px;line-height:35px;cursor: pointer;color: #fff;font-family: Arial, Helvetica, sans-serif;font-weight: bold;border-radius: 3px;font-size: 12px;text-align: center;position: relative;background: #012D62;display: inline-block;">ARCHIVO XML</a><a href="http://henpapel.com/ventas/files/" style="width: 35%;margin: 8px 5px;border: none;height: 35px;line-height:35px;cursor: pointer;color: #fff;font-family: Arial, Helvetica, sans-serif;font-weight: bold;border-radius: 3px;font-size: 12px;text-align: center;position: relative;background: #012D62;display: inline-block;">ARCHIVO PDF</a></div></div></div></div></body></html>'); 
//$mail->Body    = file_get_contents("template.html");

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("Location: index.php");
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



