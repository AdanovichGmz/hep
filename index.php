<?php
if( !session_id() )
{
    session_start();
}
$logged=(isset($_SESSION['logged']))? $_SESSION['logged'] : false;
if($logged){
    if ($_SESSION['area']=='ventas') {
       header('Location:http:'.dirname($_SERVER['PHP_SELF']).'/dashboard.php');
    }elseif ($_SESSION['area']=='victor') {
       header('Location:http:'.dirname($_SERVER['PHP_SELF']).'/victor/');
    }
   

}else{
    ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="css/3.3.6/bootstrap.min.css" />
    <link href="css/estilos.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="./main.js"></script>
    <script type="text/javascript" src="./llqrcode.js"></script>

    
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
    p{
        color: #D24F57;
        font-size: 15px;
        margin: 0!important;
        text-align: center;
    }
</style>

    <div class="container">
        <div class="login-box">
        <div class="login-inner">
          <form id="logg" action="validar.php" method="post">
        <div class="login-logo">
             <img src="images/logo-hp-con-mini1.png" >
        </div>
        
        <?php 
 if (isset($_SESSION['log_incorrect'])) { ?>
      <p>Usuario o contraseña incorrectos</p>
    <?php }
       ?>
      
            <input id="usuario" name="usuario" type="text" placeholder="USUARIO" class="login-input" required="" />
             
            <input id="password" name="pass" type="password" placeholder="CONTRASEÑA" class="login-input" required="" />
            <input type="submit" id="singlebutton" value="ENTRAR" name="singlebutton" class="login-button">
            </form>
        </div>
            
        </div>

    </div> 
   
    <script src="./jquery-1.11.2.min.js"></script>
</body>
<script type="text/javascript">
    
</script>
</html>
<?php 
session_destroy();
} 

?>