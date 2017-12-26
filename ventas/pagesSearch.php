<?php
session_start();

$page=$_POST['page'];

if ($page=='invitations') {
	require('../conexion/conexionInfo.php');
	$query = "SELECT * FROM invitaciones WHERE TipoProd LIKE '%".$_POST["param"]."%' OR Modelo LIKE '%".$_POST["param"]."%' OR Descripcion LIKE '%".$_POST["param"]."%' LIMIT 0,500";
	$getinv=$mysqli->query($query);
	while ($row=mysqli_fetch_assoc($getinv)) {
?>
<tr>
    <td><?php echo $row['TipoProd'];?></td>
                        <td > <?php echo $row['Modelo'];?></td>
                        <td >    <?php echo $row['Descripcion'];?>      </td>
                        
                        <td >    <?php echo round($row['P100'],2);?>  </td>
                        <td >    <?php echo round($row['U100'],2);?>   </td>
                        
                        <td >    <?php echo round($row['P200'],2);?> </td>
                        <td >    <?php echo round($row['U200'],2);?> </td>
                        <td >    <?php echo round($row['P300'],2);?> </td>
                        <td >    <?php echo round($row['U300'],2);?> </td>
                        <td >    <?php echo round($row['P400'],2);?> </td>
                        <td >
                        <?=round($row['U400'],2) ?> </td>
                        <td >
                        <?=round($row['P500'],2) ?>    </td>
                        <td >    <?php echo round($row['U500'],2);?> </td>
</tr>
<?php
	}

$mysqli->close();
}
elseif ($page=='products') {
	require('../conexion/conexionInfo.php');
	$query = "SELECT * FROM productos WHERE TipoProd LIKE '%".$_POST["param"]."%' OR Modelo LIKE '%".$_POST["param"]."%' OR Descripcion LIKE '%".$_POST["param"]."%' LIMIT 0,500";
	$getinv=$mysqli->query($query);
	while ($row=mysqli_fetch_assoc($getinv)) {
?>
<tr>
    
                        <td > <?php echo $row['TipoProd'];?></td>
                        <td >    <?php echo $row['Modelo'];?>      </td>
                        
                        <td >    <?php echo $row['Descripcion'];?>  </td>
                        <td >    <?php echo round($row['PrecioUnit'],2);?>   </td>
</tr>
<?php
	}

$mysqli->close();
}elseif ($page=='files') {
	require('../conexion/conexionFiles.php');
	$query = "SELECT * FROM archivos WHERE ODT LIKE '%".$_POST["param"]."%' OR Cliente LIKE '%".$_POST["param"]."%' OR archivo LIKE '%".$_POST["param"]."%' OR Fecha LIKE '%".$_POST["param"]."%' LIMIT 0,500";
	$getinv=$mysqli->query($query);
	while ($row=mysqli_fetch_assoc($getinv)) {
?>
<tr>
    
                         <td > <?php echo $row['ODT'];?></td>
                        <td >   <?php echo $row['Cliente'];?>      </td>
                        
                        <td > <a href="http://henpapel.com/archivos/<?php echo $row['archivo'];?>" target="blank">Descargar Archivo</a>           </td>
</tr>
<?php
	}
$mysqli->close();

}elseif ($page=='moves') {
	require('../conexion/conexion.php');
	$query = "SELECT * FROM movimientos WHERE tipo LIKE '%".$_POST["param"]."%' OR fecha LIKE '%".$_POST["param"]."%' OR total LIKE '%".$_POST["param"]."%'  LIMIT 0,500";
	$getinv=$mysqli->query($query);
	while ($row=mysqli_fetch_assoc($getinv)) {
?>
<tr>
    
                        <td><?php echo $row['tipo'];?></td>
                        <td > <?php echo $row['fecha'];?></td>
                        <td >    <?php echo $row['observaciones'];?>      </td>
                        
                        <td >    <?=$row['total'];?>  </td>
</tr>
<?php
	}
$mysqli->close();

}elseif ($page=='billing') {
	require('../conexion/conexion.php');
	$query = "SELECT * FROM solicitud_factura WHERE recibo LIKE '%".$_POST["param"]."%' OR fecha_realizacion LIKE '%".$_POST["param"]."%' OR email LIKE '%".$_POST["param"]."%' OR telefono LIKE '%".$_POST["param"]."%' OR colonia LIKE '%".$_POST["param"]."%' OR calle LIKE '%".$_POST["param"]."%' OR estado LIKE '%".$_POST["param"]."%' OR delegacion LIKE '%".$_POST["param"]."%' OR rfc LIKE '%".$_POST["param"]."%' OR razon_social LIKE '%".$_POST["param"]."%' LIMIT 0,500";
	$getinv=$mysqli->query($query);
	while ($row=mysqli_fetch_assoc($getinv)) {
?>
<tr>
    <td><?php echo $row['recibo'];?></td>
                        <td > <?php echo $row['monto'];?></td>
                        <td >    <?php echo $row['rfc'];?>      </td>
                        
                        <td >    <?=$row['razon_social'];?>  </td>
                        <td >    <?=$row['descripcion'];?>   </td>
                        
                        <td >    <?=$row['calle']." ".$row['no_int']." ".$row['no_ext']." ".$row['colonia']." ".$row['cp'];?> </td>
                        <td >    <?=$row['delegacion']?> </td>
                        <td >  <?=$row['estado']?> </td>
                        <td >  <?=$row['telefono']?></td>
                        <td >  <?=$row['email']?></td>
                        <td >
                        <?=$row['fecha_realizacion']?></td>
                        <td ><a href="<?=(!empty($row['archivo_xml']))? '../files/'.$row['archivo_xml'] : '#'?>" <?=(!empty($row['archivo_xml']))? 'download' : ''?>>DESCARGAR XML</a>
                        </td>
                        
                        <td ><a href="<?=(!empty($row['archivo_pdf']))? '../files/'.$row['archivo_pdf'] : '#'?>" <?=(!empty($row['archivo_xml']))? 'download' : ''?>>DESCARGAR PDF</a>   </td>
</tr>
<?php
	}
$mysqli->close();

}
//require("../conexion/conexion.php");


 ?>