
  
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
<body style="background-color:#4bb1ce;">






  
<div class="contegral">
   <div class="banner">
            <div class="imgbanner"></div>
            <div class="usuario" >
                 <?php                
                 echo "Bienvenido "
				 //. $_SESSION['logged_in'];
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

<?php
//header('Content-Type: text/html; charset=utf-8');//caracteres de acento para visualizar
mysql_connect ("localhost","cajasdec_victor","Vitorio1");
mysql_select_db("cajasdec_listas");

// echo es la consulta a realizar para llamar los datos
$resultados=mysql_query("SELECT * FROM `mensajeria`");

?>
   <header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
		</div>
 
		<nav>
			<ul>
				<!--<li><a href="#"><span class="icon-house"></span>Inicio</a></li>-->
				<!--<li><a href="#"><span class="icon-suitcase"></span>Trabajos</a></li>-->
				<li class="submenu">
					<a href="#"><span class="icon-cog"></span>Mensajeria<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
					<li><a href="reporteindex.php">Inicio <span class="icon-cogs"></span></a></li>
						<li><a href="entregados.php">Entregados<span class="icon-warning"></span></a></li>
                        <li><a href="pendientes.php">Pendientes<span class="icon-hammer"></span></a></li>
                        
					</ul>
				</li>
                <li class="submenu">
					<a href="#"><span class="icon-droplet"></span>Ayudas<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="#">Seleccion1<span class="icon-cogs"></span></a></li>
						<li><a href="#">Seleccion2<span class="icon-warning"></span></a></li>
						<li><a href="#">Seleccion3<span class="icon-hammer"></span></a></li>
                        <li><a href="#">Seleccion4<span class="icon-question"></span></a></li>
					</ul>
				</li>
				<!--<li><a href="#"><span class="icon-earth"></span>Servicios</a></li>-->
				<!--<li><a href="#"><span class="icon-mail"></span>Contacto</a></li> -->
			</ul>
		</nav>
	</header>
      
</div>
</br>
 <table style="width: 98%; 
             height: 100%;
             position: absolute;
             left: 15px;
             top: 190px;
             color: white;
             ">
		              <thead>
		                <tr>
		                  <td width="1%"  class="tabla"><strong >Id</strong></td>
		                  <td width="2%"  class="tabla"><strong>Solicita</strong></td>
                          <td width="4%"  class="tabla"><strong>Fecha</strong></td>
                          <td width="4%"  class="tabla"><strong>Hora</strong></td>
                          <td width="4%"  class="tabla"><strong>Empresa</strong></td>
                          <td width="8%"  class="tabla"><strong>Direccion</strong></td>
                          <td width="3%"  class="tabla"><strong>Atencion</strong></td>
                          <td width="4%"  class="tabla"><strong >Telefono</strong></td>
                          <td width="4%"  class="tabla"><strong>OBSERVACIONES</strong></td>
						  <td width="4%"  class="tabla"><strong>Ver</strong></td>
                          <td width="2%"  class="tabla"><strong>Ent</strong></td>
             
	                    </tr>
	            <tbody>
			 
	  <?php
     while ($fila = mysql_fetch_array($resultados) )/*un ciclo para la busqueda de todos los datos*/
     
     {
?>
		                  <tr>                            
	                        <td class="tabla"><p> <?php echo $fila["idmens"];?></p></td>
		                    <td class="tabla"><?php echo $fila["solicita"];?></td>
		                    <td class="tabla"><?php echo $fila["fechaenvio"];?></td>
                            <td class="tabla"><?php echo $fila["horaenvio"];?></td>
		                    <td class="tabla"><?php echo $fila["empresa"];?></td>
                            <td class="tabla"><?php echo $fila["direccion"];?></td>
                            <td class="tabla"><?php echo $fila["atencion"];?></td>
                            <td class="tabla"><?php echo $fila["telefono"];?></td>
                            <td class="tabla"><?php echo $fila['comentario'];?></td>
							<td class="tabla"><a href="verinfo.php">Ver <span class="icon-cogs"></span></a></td>
                            <td class="tabla"><img width="15" src="<?php echo $fila["generado"].".jpg";?>"/></td>
                           
		                    </tr>
 <?php
   }
mysql_close();
?>
	               </tbody>
	                </table>


   </div> 













 -->










</body>
</html>
