<?php
error_reporting(0);
require_once("dompdf/dompdf_config.inc.php");
include '../conexion/conexion.php';

$movimiento=$_REQUEST['mov'];


 $query="SELECT d.*,(SELECT clave FROM productos WHERE id_producto=d.id_producto) AS clave, (SELECT descripcion FROM productos WHERE id_producto=d.id_producto)AS descripcion FROM detalle d WHERE id_movimiento=$movimiento";
$getMov=mysqli_fetch_assoc($mysqli->query("SELECT * FROM movimientos WHERE id_movimiento=$movimiento"));
 //dec_enc('decrypt',$getMov['code'])
       
$resss=$mysqli->query($query);

function dec_enc($action, $string) {
    $output = false;
 
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This';
    $secret_iv = 'This';
 
    // hash
    $key = hash('adler32', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('adler32', $secret_iv), 0, 8);
 
    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
 
    return $output;
}
        
?>
<?php ob_start();?>
<html>
<head>
<style>
@page {
            margin: 1.3em 1.3em;
            
        }
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

thead{
  background: #1A1F25;
  color: #fff;
}

td, th {
    border: 1px solid #E1E0E5;
    text-align: center;
    padding: 8px;
    font-size: 12px;
}


.inhead{
  display: inline-block;
  width: 62%;
   font-family: arial, sans-serif;
   
   height: 50px;
  

}
.inhead table{
  width: 100%;
  text-align: center;

}
.inhead th{
 padding: 2px;
 text-align: center;
 border:1px solid #E1E0E5!important;

}
.inhead td{
border:1px solid #E1E0E5!important;
 text-align: center;

}
.logo{
  display: inline-block;
  width: 20%;
   font-family: arial, sans-serif;
   
   

}
.code{
  font-family: arial, sans-serif;
  padding-top: 10px;
  font-size: 12px;
}
.title{
  display: inline-block;
  width: 15%;
  text-align: center;
   font-family: arial, sans-serif;
  font-weight: bold;
   height: 50px;
   line-height: 50px;
   vertical-align: middle;
   

}

.header{
  width: 100%;
  margin: 0 auto;
  padding-bottom: 20px;
  padding-top: 5px;
  
}
.header img{
  width: 100%;
}
#last {
  text-align: right!important;
}
#last img{
  width: 50%;
}
.botom-stats{
  display: inline-block;
  border:1px solid #E1E0E5;
  position: relative;
  font-family: arial, sans-serif;
}
.botom-stats div{
  position: relative;
  font-size: 12px;
}
.botom-stats td,th{
 
  font-weight: normal;
  border-top:none;
}
.botom-stats td{
  border-bottom:1px dashed #E1E0E5;
  border-left: none;
  border-right: none;
}
.botom-stats th{
  border-bottom:1px dashed #E1E0E5;
  border-right:1px dashed #E1E0E5;
}
.extra{
  border-right: 1px dashed #E1E0E5!important;
}
.extrath{
  border-bottom: none!important;
}
</style>
</head>

<body>
<div class="header">
  <div class="logo"><img src="../images/logo-hp-con-mini1.png">
  </div><div class="title">
 
 </div> <div class="inhead">

  <table >
  <tr><th>Recibo</th>
    <th>Fecha</th>
    <th>Tienda</th>
    
    </tr>
    <tr>
      <td><?=$getMov['id_movimiento'] ?></td>
      <td><?=$getMov['fecha'] ?></td>
      <td><?=$getMov['tienda'] ?></td>
      
    </tr>
  </table>
  </div>
</div>

<table>
<thead><tr>
    <th  width="15%">Cantidad</th>
    <th  width="15%">ODT</th>
    <th width="50%">Descripcion</th>
    <th width="20%">Importe</th>
   
    
  </tr></thead>
  <tbody>

  <?php 
 
                          while($row=mysqli_fetch_assoc($resss)):
                          

                          ?>
                          <tr>
    
     <td><?= $row['cantidad'];?></td>
     <td></td>
     <td><?= $row['descripcion'];?></td>
     <td>$<?= number_format($row['importe'],2);?></td>                    
    
  </tr>

     
              
  <?php 
   endwhile; ?>
   <tr>
                          <td style="border:none;" colspan="4"></td>
                        </tr>
  <tr>
    <td colspan="2">En caso de cancelación se cobrará $500.00 por gastos administrativos, siempre y cuando no se haya iniciado el proceso.</td>
    <td style="font-weight: bolder">Importe Total:</td>
    <td style="font-weight: bolder">$<?= number_format($getMov['total'],2);?></td>
  </tr>
  </tbody>
</table>

<p class="code"><?=$getMov['code'] ?></p>
<p><?= dec_enc('decrypt',$getMov['code']) ?></p>



</body>
</html>



<?php
$html = ob_get_clean();

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper('letter', 'portrait');
$dompdf->render();
$dompdf->stream("reporte_de_orden.pdf", array('Attachment' => 0));

