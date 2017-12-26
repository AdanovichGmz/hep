
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="../images/hep.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PORTAL DE FACTURACION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="../css/3.3.6/bootstrap.min.css" />
    <link href="../css/factura.css" rel="stylesheet" />
    </head>
<body>
    
    
<style >/*
    select{
        width: 100%;
    background: #fff;
    border-radius: 2px;
    padding: 7px;
    border: none;
    margin-top: 15px;
    text-align: center!important;
    font-size: 30px;
    font-family: "monse-medium";
    }
    */
    body{
        background:#EFEFEF!important;
    }
    p{
        color: #808080;
        font-size: 15px;
        margin: 0!important;
        text-align: center;
    }
</style>

   
   

    

    <div class="container">
        <div class="login-box">
        <div class="login-inner">
          <form id="datos" action="facturar.php" method="post">
        <div class="login-logo">
             <img src="../images/logo-hp-con-mini1.png" >
        </div>
        
        <?php 
 if (isset($_SESSION['log_incorrect'])) { ?>
      <p>Usuario o contraseña incorrectos</p>
    <?php }
       ?>
            
            
             
            <input id="password" name="razon" type="text" placeholder="Razon Social" class="login-input" required="" />
            <div class="direction3">
                 <input id="RFC" name="rfc" type="text" placeholder="RFC" class="login-input" required="" />
                 </div><div class="direction3 middle">
                <input id="recibo" name="recibo" type="text" placeholder="Numero de Recibo" class="login-input" required="" />
             </div><div class="direction3 right">
                 
             <input  name="monto" type="number" step="any" placeholder="Monto a Facturar" class="login-input" required="" />
                 </div>
            <div class="help" onclick="showLoad();">?</div> 
             
             <div style="display: none;">
              <div class="checkboxer"><div class="checks"><input type="radio" class="radios" name="radios" value="G01"></div><label>Adquisicion de mercancias</label>
              </div><div class="checkboxer"><div class="checks"><input type="radio" class="radios" name="radios" value="G03" checked></div><label>Gastos en general</label>
              </div><div class="checkboxer"><div class="checks"><input type="radio" class="radios" name="radios" value="P01"></div><label>Por definir</label>
              </div>
               <p class="errormsg" id="rads">Porfavor elige una opcion ↑</p>
               </div>
               <input id="password" name="calle" style="margin-top: 3px;" type="text" placeholder="Calle" class="login-input" required="" />
             <div class="direction3">
                 <input id="password" name="no-ext" type="number" placeholder="No. Exterior" class="login-input" />
                 </div><div class="direction3 middle">
                 <input id="password" name="no-int" type="number" placeholder="No. Interior" class="login-input"  />
             </div><div class="direction3 right">
                 
             <input id="password" name="cp" type="text" placeholder="C.P" class="login-input" required="" />
                 </div>
             
             
              <input id="password" name="col" type="text" placeholder="Colonia" class="login-input" required="" /><div class="search-box">
               <input id="del-mun" autocomplete="off" name="del" type="text" placeholder="Delegacion/Municipio" class="login-input" required="" >
               <div class="result"></div></div>
                <div class="search-box">
               <input id="estado" name="estado" autocomplete="off" type="text" placeholder="Estado" class="login-input" required />
<div class="result-est"></div></div>
                <div class="direction">
                <input name="tel" type="text" placeholder="Telefono" class="login-input" required="" />
                </div><div class="direction right">
                 <input  name="mail" type="email" placeholder="Correo Electronico" class="login-input" required="" />
                 <p class="errormsg" id="errormail">↑ Porfavor ingresa una direccion de correo valida</p>
                </div>
               
                
            <input type="submit" id="singlebutton" value="SOLICITAR FACTURA" name="singlebutton" class="login-button">
            </form>
        </div>
            
        </div>

    </div> 
   <div class="backdrop"></div>

<div class="box">
  <div class="saveloader">
    <div class="closer" onclick="close_box();">X</div>
    <img src="../images/recibo.jpg">
    <p style="text-align: center; font-weight: bold;"><a href="#">Click aqui si no tienes recibo</a></p>
  </div>
  <div class="savesucces" style="display: none;">
  
    <img src="images/success.png">
    <p style="text-align: center; font-weight: bold;">Listo!</p>
  </div>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/billing.js?v=2"></script>
</body>

</html>
