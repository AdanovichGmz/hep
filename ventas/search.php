<?php
session_start();
require("../conexion/conexion.php");
$almacen=$_SESSION['almacen'];
$text=(isset($_POST['param']))?$_POST['param'] :'';
if (!empty($text)) {
	
$sql=$mysqli->query("SELECT p.*,c.nombre,(SELECT stock FROM stocks WHERE id_producto=p.id_producto AND id_almacen=$almacen) AS stock_almacen, (SELECT SUM(stock) FROM stocks WHERE id_producto=p.id_producto) AS stock_global FROM productos p INNER JOIN categoria c ON c.id_categoria=p.id_categoria WHERE descripcion LIKE '%" . $text . "%' OR clave LIKE '%" . $text . "%' OR c.nombre LIKE '%" . $text . "%'");


if ($sql->num_rows>0) {

while ($row=mysqli_fetch_assoc($sql)) {
?>
<div class="product" id="<?=$row['clave'] ?>" onclick="addProduct(this.id,<?=$row['id_producto'] ?>)"><div class="product-photo"><img src="<?=(!empty($row['imagen']))? '../'.$row['imagen'] : '../images/default.jpg' ?>"></div>
		<div class="clave"><?=$row['clave'] ?></div>
		<div class="inventario">En almacen: <?=$row['stock_almacen'] ?></div>
		<div class="inventario">Global: <?=$row['stock_global'] ?></div>
		<input type="hidden" id="<?=$row['clave'] ?>-nombre" value="<?=$row['descripcion'] ?>">
		<input type="hidden" id="<?=$row['clave'] ?>-precio" value="<?=$row['precio'] ?>">
		<input type="hidden" id="<?=$row['clave'] ?>-stock" value="<?=$row['stock_almacen'] ?>">
	</div>
<?php }
}else{ ?>
<p>No se encontraron resultados</p>
<?php }


 }else{ ?>

<?php }
$catego=(isset($_POST['catego']))?$_POST['catego'] :'';
if (!empty($catego)) {
	$sql2=$mysqli->query("SELECT p.*,(SELECT stock FROM stocks WHERE id_producto=p.id_producto AND id_almacen=$almacen) AS stock_almacen, (SELECT SUM(stock) FROM stocks WHERE id_producto=p.id_producto) AS stock_global FROM productos p WHERE id_categoria=$catego");
if ($sql2->num_rows>0) {

while ($row2=mysqli_fetch_assoc($sql2)) {
?>
<div class="product" id="<?=$row2['clave'] ?>" onclick="addProduct(this.id,<?=$row2['id_producto'] ?>)"><div class="product-photo"><img src="<?=(!empty($row2['imagen']))? '../'.$row2['imagen'] : '../images/default.jpg' ?>"></div>
		<div class="clave"><?=$row2['clave'] ?></div>
		<div class="inventario">En almacen: <?=$row2['stock_almacen'] ?></div>
		<div class="inventario">Global: <?=$row2['stock_global'] ?></div>
		<input type="hidden" id="<?=$row2['clave'] ?>-nombre" value="<?=$row2['descripcion'] ?>">
		<input type="hidden" id="<?=$row2['clave'] ?>-precio" value="<?=$row2['precio'] ?>">
		<input type="hidden" id="<?=$row2['clave'] ?>-stock" value="<?=$row2['stock_almacen'] ?>">
	</div>
<?php }
}else{ ?>
<p>No se encontraron resultados</p>
<?php }
}

 ?>