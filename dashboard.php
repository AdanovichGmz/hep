<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<style type="text/css">
body {
	background: #EFEFEF;;
	font-size:14px;
	line-height: 32px;
	margin: 0;
	padding: 0;
	word-wrap:break-word !important;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	}


#apDiv1 {
	position: absolute;
	width: 207px;
	height: 84px;
	z-index: 1;
	left: 21px;
	top: 2057px;
}
.blanco {
	color: #FFF;
}
.BLANCO {
	color: #FFF;
}
.tutorials{
	width: 70%;
	margin: 0 auto;
	text-align: center;
	z-index: 0;
}
.tuto{
	width: 150px;
	height: 150px;
	display: inline-block;
	vertical-align: top;
	text-align: center;
	position: relative;
	cursor: pointer;
	margin: 5px;
}
.sistem{
	background: #D35058;
}

.cliente{
	background: #C62127;
}
.cotiza{
	background:#F68E2F;
}
.pedido{
	background:#FFCF6B;
}
.autoriza{
	background:#75C4AF;
}
.recibo1{
	background:#7864AC;
}
.recbo2{
	background:#283957;
}
.corte{
	background:#084D76;
}
.reporte{
	background:#1464A9;
}
.empty{
	background: #ccc;
	display: none;
}
.b-image{
	width: 100%;
	height: 150px;
	position: relative;
}
.b-image h1{
	line-height: 15px;
	font-size: 15px;
	font-weight: normal;
	color: #fff;
	position: absolute;
	width: 100%;
	top: 60%;
}
.sistem-i{
	background-image: url(images/sistema.png);
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
}
.sistem-i:hover{
	background-image: url(images/hsistema.png);
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
}
.cliente-i{
	background-image: url(images/cliente.png);
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
}
.cliente-i:hover{
	background-image: url(images/hcliente.png);

}
.cotiza-i{
	background-image: url(images/cotiza.png);
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
}
.cotiza-i:hover{
	background-image: url(images/hcotiza.png);
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
}
.pedido-i{
	background-image: url(images/pedido.png);
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
}
.pedido-i:hover{
	background-image: url(images/hpedido.png);
	
}
.autoriza-i{
	background-image: url(images/autoriza.png);
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
}
.autoriza-i:hover{
	background-image: url(images/hautoriza.png);

}
.recibo1-i{
	background-image: url(images/recibo1.png);
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
}
.recibo1-i:hover{
	background-image: url(images/hrecibo1.png);
	
}
.recbo2-i{
	background-image: url(images/recbo2.png);
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
}
.recbo2-i:hover{
	background-image: url(images/hrecbo2.png);
	
}
.corte-i{
	background-image: url(images/corte.png);
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
}
.corte-i:hover{
	background-image: url(images/hcorte.png);
	
}
.reporte-i{
	background-image: url(images/reporte.png);
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
}
.reporte-i:hover{
	background-image: url(images/hreporte.png);
	
}
.separatorline{
	width: 100%;
	height: 10px;
	border-bottom: solid 1px #E6E8E7;
	position: absolute;
	top :5px;
	z-index: 3;
}
.separatortext{
	text-align: center;font-size: 12px;width: 90px; margin:0 auto;background: #EFEFEF; color:#999;z-index: 1000;position: relative; font-weight: bold;
}
.links{
	width: 395px;
	background: #fff;
    border-radius: 3px;
    border: solid 1px #E6E8E7;
    text-align: center;
    display: inline-block;
}
.icon img{
width: 20px;
margin-right:  10px;
margin-bottom: -2px;
}
.links a{
	text-decoration: none;
}
.links div{
	background: #29B679;
	width: 180px;
	height: 60px;
	margin: 60px auto;
	line-height: 60px;
	font-size: 17px;
	color: #fff;
	border-radius: 3px;
	
}
.links div:hover{
	background: #176342;
	color: #fff;
	
}
.justif{
	max-width: 800px; margin:0 auto;text-align: left;position: relative;
}

@media all and (max-width : 1024px) {

	.links {
		
		width: 49%;
	}
	
}
@media all and (max-width : 768px) {

	.links {
		margin-top:10px;
		width: 100%;
	}
	.justif{
		text-align:center;
	}

}
</style>

</head>
<body>
<?php include('topbar.php'); ?>
<div class="tutorials">
<div class="justif" style="margin-top: 20px;">
	<div class="links" style="margin-right: 5px;">
		<a href="uploads/"><div class="f1"><i class="icon"><img src="images/upfile.png"></i>Enviar Archivo</div></a>
	</div><div class="links" style="margin-left: : 5px;">
	
		<a href="uploads/uploadList.php"><div class="f2"><i class="icon"><img src="images/uplist.png"></i>Enviar Lista</div></a>
	</div>
</div>
</div>
<div class="tutorials">

<div class="justif">
<div class="separatortext">TUTORIALES</div>
<div class="separatorline"></div>
	<div class="tuto sistem"><a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-eHU0Wmc1Ul9Jdkk" target="_black">
		<div class="b-image sistem-i">
	<h1>Entrar al Sistema</h1>
	</div>
	</a>
	</div><div class="tuto cliente">
	<a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-SXE5aUdHbGJCQ0U" target="_black">
		<div class="b-image cliente-i">
	<h1>Nuevo Cliente</h1>
	</div>
	</a>
	</div><div class="tuto cotiza">
	<a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-U2RmZFdRb19KT1E" target="_black">
	<div class="b-image cotiza-i">
	<h1>Cotizacion Nueva</h1>
	</div>
	</a>
	</div><div class="tuto pedido">
	<a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-Z3UzZ2hLb2xSajQ" target="_black">
		<div class="b-image pedido-i">
	<h1>Generar un pedido</h1>
	</div>
	</a>
	</div><div class="tuto autoriza">
	<a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-ZUFiZktORFhmWE0" tarjet="_black">
		<div class="b-image autoriza-i">
	<h1>Autorizar un pedido</h1>
	</div>
	</a>
	</div><div class="tuto recibo1">
	<a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-Ry1lMTBZbGVpNXM" target="_black">
		<div class="b-image recibo1-i">
	<h1>Realizar un recibo<br> de pagos</h1>
	</div>
	</a>
	</div><div class="tuto recbo2">
	<a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-Z0p3ZVNoTHVubmM" target="_black">
		<div class="b-image recbo2-i">
	<h1>Realizar un recibo<br> de apartados</h1>
	</div>
	</a>
	</div><div class="tuto corte">
	<a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-SGZlVHJEN1JBZEk" target="_black">
		<div class="b-image corte-i">
	<h1>Crear un cierre<br> diario</h1>
	</div>
	</a>
	</div><div class="tuto reporte">
	<a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-RHMybC1nclNaS3c" target="_black">
		<div class="b-image reporte-i">
	<h1>Generar un <br>reporte</h1>
	</div>
	</a>
	
	</div><div class="tuto empty">
	<a href="#" target="_black">
		<div class="b-image empty-i">
	<h1>...</h1>
	</div>
	</a>
	
	</div>
</div>
	
</div>

    
	<section id="contenedor" style="display: none;">


<div>
<div>
<p>
<h1><a href="EnviaArchivo.html">Enviar Archivo</a><br /></h1>
<!-- "  <a href="verinfo.php">Ver info </a>		--></div>
<h1><a href="EnviaLista.html">Enviar Lista</a><br /></h1>

<ol><h1>Tutoriales</h1>
<li><a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-eHU0Wmc1Ul9Jdkk" target="_black">Entrar al sistema</a></li>
<li><a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-SXE5aUdHbGJCQ0U" target="_black">Registrar a un nuevo cliente</a></li>
<li><a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-U2RmZFdRb19KT1E" target="_black">Cotizacion Nueva</a></li>
<li><a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-Z3UzZ2hLb2xSajQ" target="_black">Generar un pedido</a></li>
<li><a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-ZUFiZktORFhmWE0" tarjet="_black">Autorizar un pedido</a></li>
<li><a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-Ry1lMTBZbGVpNXM" target="_black">Realizar un recibo de pagos</a></li>
<li><a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-Z0p3ZVNoTHVubmM" target="_black">Realizar un recibo de apartados</a></li>
<li><a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-SGZlVHJEN1JBZEk" target="_black">Crear un cierre diario</a></li>
<li><a href="https://drive.google.com/open?id=0ByFEW5TGk3Q-RHMybC1nclNaS3c" target="_black">Generar un reporte</a></li>
</ol>

<!-- "  <a href="verinfo.php">Ver info </a>		--></div>
</p>
<div></div>
</div>
</div></section>

</body>
</html>
