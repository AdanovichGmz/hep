<?php
require("../conexion/conexion.php");
 $param=(isset($_POST['param']))? $_POST['param'] : 'NULL';
 ?>
<tr>
    <th>NO. DE RECIBO</th>
    <th>EMAIL</th>
  </tr>

 <?php

if ($param=='pending') {
	$getpendings=$mysqli->query("SELECT * FROM solicitud_factura WHERE realizada=2");
	while ( $row=mysqli_fetch_assoc($getpendings)) {
	
?>
<tr class="fact-row" data-info='<?=str_replace('"', "&quot;", json_encode($row))?>'>
	<td><?=$row['recibo'] ?></td>
	<td><?=$row['email'] ?></td>
</tr>
<?php
}
}elseif ($param=='realized') {
	$getrealized=$mysqli->query("SELECT * FROM solicitud_factura WHERE realizada=1");
	while ( $row=mysqli_fetch_assoc($getrealized)) {
	
?>
<tr class="fact-realized" data-info='<?=str_replace('"', "&quot;", json_encode($row))?>'>
	<td><?=$row['recibo'] ?></td>
	<td><?=$row['email'] ?></td>
</tr>
<?php
}
}








?>