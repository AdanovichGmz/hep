

     <?php
mysql_connect ("localhost","cajasdec_victor","Vitorio1");
mysql_select_db("cajasdec_listas");

// echo es la consulta a realizar para llamar los datos
$resultado=mysql_query("SELECT * FROM `mensajeria`");
   //  $query="SELECT * FROM alertaMaquinaOperacion ORDER BY idalertamaquina DESC";
	
	// $resultado=$mysqli->query($query);

    ?>



  
<!DOCTYPE html>

<html lang="en" dir="ltr" xmlns:fb="http://ogp.me/ns/fb#">
<head>

    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  


    <link href="css/estilosadmin.css" rel="stylesheet" />

   
      <link rel="stylesheet" href="fonts/style.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/main.js"></script>
  
</head>
<body style="background-color:black;">






  
<div class="contegral">
   <div class="banner">
            <div class="imgbanner"></div>
            <div class="usuario" >
                 <?php                
                 echo "Bienvenido: ". $_SESSION['logged_in'];
                 ?>

    
            </div>
            <div class="fechayhora">
               
               <?php $fecha = strftime( "%Y-%m-%d", time() );
             
               echo $fecha
               ?>
                    <script>
                        function startTime() {
                            today = new Date();
                            h = today.getHours();
                            m = today.getMinutes();
                            s = today.getSeconds();
                            m = checkTime(m);
                            s = checkTime(s);
                            document.getElementById('hora').innerHTML = h + ":" + m + ":" + s;
                            t = setTimeout('startTime()', 500);
                        }
                        function checkTime(i) {
                            if (i < 10) {
                                i = "0" + i;
                            }
                            return i;
                        }
                        window.onload = function() {
                            startTime();
                        }
                    </script>
                    <div id="hora" ></div>
 
              </div>
              <div class="btnlogout ">
                <a href="logout.php" > <img src="images/btnout.fw.png"  href="logout.php" class="img-responsive" /></a>
              </div>
            </div>
   </div>

   <div>
</br>
</br>
</br>
</br>


   <header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
		</div>
 
		<nav>
			<ul>
				<!--<li><a href="#"><span class="icon-house"></span>Inicio</a></li>-->
				<!--<li><a href="#"><span class="icon-suitcase"></span>Trabajos</a></li>-->
				<li class="submenu">
					<a href="#"><span class="icon-cog"></span>Maquinas<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
					<li><a href="repajustemaquina.php">Ajuste <span class="icon-cogs"></span></a></li>
						<li><a href="RepAlertAjuste.php">Alerta Ajuste<span class="icon-warning"></span></a></li>
                        <li><a href="reptirajemaquina.php">Tiraje<span class="icon-hammer"></span></a></li>
                        <li><a href="repalertmaquina.php"> Alerta Maquina <span class="icon-warning"></span></a></li>
						<li><a href="repencuesta.php">Encuesta<span class="icon-question"></span></a></li>
					</ul>
				</li>
                <li class="submenu">
					<a href="#"><span class="icon-droplet"></span>Serigrafía<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="#">Ajuste <span class="icon-cogs"></span></a></li>
						<li><a href="#">Alerta Seriegrafía <span class="icon-warning"></span></a></li>
						<li><a href="#">Tiraje<span class="icon-hammer"></span></a></li>
                        <li><a href="#">Encuesta<span class="icon-question"></span></a></li>
					</ul>
				</li>
				<!--<li><a href="#"><span class="icon-earth"></span>Servicios</a></li>-->
				<!--<li><a href="#"><span class="icon-mail"></span>Contacto</a></li> -->
			</ul>
		</nav>
	</header>
      
</div>
</br>
 <!--<table style="width: 98%; 
             height: 100%;
             position: absolute;
             left: 15px;
             top: 190px;
             color: white;
             ">
		              <thead>
		                <tr>
		                  <td width="1%"><b></b></td>
		                  <td width="1%"><b></b></td>
                          <td width="1%"  class="tabla"><strong >Id</strong></td>
		                  <td width="2%"  class="tabla"><strong>ODT</strong></td>
                          <td width="4%"  class="tabla"><strong>NO HAY</strong></td>
                          <td width="4%"  class="tabla"><strong>SE PERDIO</strong></td>
                          <td width="4%"  class="tabla"><strong>ARREGLO EN FALSO</strong></td>
                          <td width="2%"  class="tabla"><strong>OPCIÓN</strong></td>
                          <td width="3%"  class="tabla"><strong>OBSERVACIONES</strong></td>
                          <td width="4%"  class="tabla"><strong >TIEMPO DE ALERTA MAQUINA</strong></td>
                          <td width="4%"  class="tabla"><strong>MAQUINA AJUSTE</strong></td>
                          <td width="2%"  class="tabla"><strong>USUARIO</strong></td>
                          <td width="4%"  class="tabla"><strong>HORA DEL DIA</strong></td>
                          <td width="4%"  class="tabla"><strong>FECHA DEL DIA</strong></td>


		                  
	                    </tr>
	                  <tbody>
		                  <?php while($row=$resultado->fetch_assoc()){ ?>
		                  <tr>
                            <td><a href="modificar.php?id=<?php echo $row['idmens'];?>"><img src="images/edit.fw.png" alt="" width="25" height="25" onClick="return confirm('estas segur@ de modificar este registro?')"></a></td>
		                    <td><a href="eliminar.php?id=<?php echo $row['idmens'];?>"><img src="images/elminar.fw.png" alt="" width="25" height="25" onClick="return confirm('eee tranquilo viejo, quieres borrar este registro?, sera permanente!')" ></a></td>
	                    
		                    <td class="tabla"><p> <?php echo $row['idmens'];?></p></td>
		                    <td class="tabla"><?php echo $row['solicita'];?></td>
		                    <td class="tabla"><?php echo $row['fechaenvio'];?></td>
                             <td class="tabla"><?php echo $row['horaenvio'];?></td>
		                    <td class="tabla"><?php echo $row['empresa'];?></td>
                            <td class="tabla"><?php echo $row['empresa'];?></td>
                            <td class="tabla"><?php echo $row['direccions'];?></td>
                            <td  class="tabla"><?php echo $row['atencion'];?></td>
                            <td class="tabla"><?php echo $row['telefono'];?></td>
                            <td class="tabla"><?php echo $row['comentario'];?></td>
                            <td class="tabla"><?php echo $row['solicita'];?></td>
                            <td class="tabla"><?php echo $row['solicita'];?></td>

		                    </tr>
		                  <?php } ?>
	                  </tbody>
	                </table>


   </div> 













 -->










</body>
</html>
