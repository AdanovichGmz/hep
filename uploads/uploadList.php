<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="../images/hep.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PORTAL DE FACTURACION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Latest compiled and minified CSS -->
 
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
    #first-ul{
      z-index: 99999;
    }
    .exit{
      background-color: #272B34;
    }
    body{
        background:#EFEFEF!important;
        padding: 0;
        margin: 0;
          font-family:  Arial, Helvetica, sans-serif;
          font-size: 14px;
    }
    p{
        color: #808080;
        font-size: 15px;
        margin: 0!important;
        text-align: center;
    }

#messages{
  height: 80px;
  position: relative;
  margin: 0 auto;
  max-width: 600px;
}
.notification{
  width: 98%;
  height: 40px;
  border-radius: 8px;
  position: absolute;
   top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family:  Arial, Helvetica, sans-serif!important;

}
.notification div{
  width: 40px;
  height: 40px;
  float: left;
  position: relative;
}
.notification  span{
  font-weight: bolder;
}
.notification p{
  color: #626461;
  text-align: left;
  margin: 0;
  line-height: 40px;
}
.notification div img{
  width: 30%;
  position: absolute;
  top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
}
.success{
  background: #E9FFD9;
  border:solid 1px #C5E0B1;
}
.success div{
  background-image: url('../images/suv.png');
  background-size: contain;
  background-position: center;
  background-repeat: no-repeat;
}
.fail{
  background: #FFECEC;
  border:solid 1px #F9CBC8;
}
.fail div{
  background-image: url('../images/fail.png');
  background-size: contain;
  background-position: center;
  background-repeat: no-repeat;
}
.warning{
  background: #FFF8C4;
  border:solid 1px #F7DEAE;
}
.warning div{
  background-image: url('../images/alert.png');
  background-size: contain;
  background-position: center;
  background-repeat: no-repeat;
}
.subtotal h1{
  color:#999999;
  text-align: left;
  font-family:  Arial, Helvetica, sans-serif!important;
}
.activeli{
  background:#31A1CF!important;
}
.backdrop
    {
      position:absolute;
      top:0px;
      left:0px;
      width:100%;
      height:100%;
      background:#000;
      opacity: .0;
      filter:alpha(opacity=0);
      z-index:50;
      display:none;
    }
 
 
    .box
    {
      position:absolute;
      top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      width:150px;
      height: 150px;
      
      background:#ffffff;
      z-index:51;
      padding:10px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      -moz-box-shadow:0px 0px 5px #444444;
      -webkit-box-shadow:0px 0px 5px #444444;
      box-shadow:0px 0px 5px #444444;
      display:none;
    }
     .saveloader{
      width: 100%;
      text-align: center;
      position: relative;
    }
    .saveloader img{
      width: 100%;
    }
    .saveloader p{
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
     margin-top: -30px;
    }
</style>

   
   <?php include('../topbar.php'); ?>

    <div class="separator" id="messages">
  <div class="notification <?=(!isset($_SESSION['notification']))? '' : $_SESSION['notification'] ?>" style="<?=(!isset($_SESSION['notification']))? 'display:none;' : '' ?>">
    <div></div>
    <p><span><?=$_SESSION['result'] ?></span> <?=$_SESSION['messages'] ?></p>
  </div>
</div>

    <div class="container">
        <div class="login-box">
        <div class="form-inner">
          <form id="datos" action="guardaregistro.php" method="post"  enctype="multipart/form-data">
        
        
        <?php 
 if (isset($_SESSION['log_incorrect'])) { ?>
      <p>Usuario o contraseña incorrectos</p>
    <?php }
       ?>
            
            
             <input type="hidden" name="form" value="lista">
            <input name="odt" type="text" placeholder="Numero de Orden" class="login-input" required="" style="margin-top: 40px;" />
             <input name="numlist" type="text" placeholder="Numero de Lista" class="login-input" required="" />
              <input name="qty" type="number" placeholder="Cantidad" class="login-input" required="" />
            <textarea name="comments" placeholder="comentarios.." style="text-align: left; padding: 5px;"></textarea>
            <div class="inputfile">
              <div class="filename">Ningun archivo seleccionado
              </div><div class="filebutton">Seleccionar</div>
              <input style="display: none;" type="file" id="the-file" name="up-file">
            </div>
         
             
             
              
             
            
                
            <input type="submit" id="singlebutton" value="ENVIAR" name="singlebutton" class="login-button" style="margin-bottom: 40px;">
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
   
</body>

</html>
<script>
  $(document).on('click', '.filebutton', function () {
    $('#the-file').click();
 
});

  $('#the-file').change(function(e){
            var fileName = e.target.files[0].name;
            $('.filename').html(fileName);
        });
</script>

<?php
unset($_SESSION['messages']);
unset($_SESSION['notification']);
unset($_SESSION['result']);



?>