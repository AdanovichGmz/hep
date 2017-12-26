<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="../images/hep.png" />
<style>
body {margin:0;
background: #EFEFEF;
text-align: center!important;
}

.topnav {
  overflow: hidden;
  background-color:#272B34;
}
.navlogo{
  width:100px;
  background-image:  url('../images/white-logo.png');
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;
  padding: 0 20px!important; 
}
.topnav a {
  float: left;
  display: block;
  color: #D5CDBA;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  text-align: center;
  height: 60px;
  line-height: 60px;
  padding: 0 16px;
  text-decoration: none;
  font-size: 18px;
}
.exit{
  float: right!important;
}
.left-sec{
  display: inline-block;
  width: 50%;
  vertical-align: top;

}
.right-sec{
  width: 50%;
  display: inline-block;
  vertical-align: top;
}
.topnav a:hover {
  background-color: #1F242A;
  
}
table{
  border-collapse: collapse;
}
.sec-contain{
  width: 95%;
  
  background:#fff;
  border-radius:3px;
  border: solid 1px  #E6E8E7;
  
  text-align: center;

}
.margin-contain{
  width: 95%;
  margin:0 auto;

}
#finder{
  width: 100%;
  margin: 0 auto;
  border-radius: 3px;
  border: solid 1px  #ccc;
  font-size: 16px;
  text-align: center;
  height:30px;
}
.topnav .icon {
  display: none;
}
.separator{
  width: 100%;
  height: 15px;
}
.tabler{
  width: 100%;
  height: 300px;
  overflow: auto;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
#customers {
    font-family:  Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    background: #fff;

}

#customers tr {
    border-bottom: 1px solid #ddd;

    
}
#customers td{
  color: #808080;
}
#customers td, #customers th {
   text-align: center;
    padding: 8px;
}
.subtotal{
 width: 100%;
}
.subtotal table{
  width: 100%;
  
  font-family:  Arial, Helvetica, sans-serif;
  
}
.subtotal th{
  font-weight: normal;

}
.subtotal td,th{
  padding: 8px;
}


#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;

    background-color: #283957;
    color: white;
}
#customers th:first-child{
  
    border-top-left-radius: 4px;
}
#customers th:last-child{
  border-top-right-radius:4px;
  
}
.sub-last{
  border-bottom-left-radius: 4px;
border-bottom-right-radius:4px;
}
.actions{
  width:90%;
  margin: 8px 5px;
  border:none;
  height: 35px;
  cursor: pointer;
  color: #fff;
  font-family:  Arial, Helvetica, sans-serif;
  font-weight: bold;
  border-radius: 3px;
  font-size: 12px;
  text-align:center;
  position: relative;
  
}
.actions p{
  position: absolute;
   top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        margin: 0!important;
        width: 100%;

}
.actions2{
  width: 45%;
  margin: 8px 5px;
  border:none;
  height: 35px;
  cursor: pointer;
  
  font-family:  Arial, Helvetica, sans-serif;
  font-weight: bold;
  border-radius: 3px;
  font-size: 12px;
}
.actions2:hover{
  color: #fff;
  background:#4CAF50;
}
.blue{
  background:#7F88C1;
}
.green{
  background:#4CAF50;
}
.red{
  background:#D24F57;
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none !important;
    display: block;
    text-align: left;
  }
  .left-sec, .right-sec{
    width: 100%;
  }
  .sec-contain{
    margin:5px auto!important;

  }
}

.categos {
  overflow: hidden;
  background-color: #333333;
  border-radius: 4px;
}

.categos a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 8px;
  text-decoration: none;
  font-size: 11px;
  font-family:  Arial, Helvetica, sans-serif;
  border-right:solid 1px #000000;
}

.categos a:hover {
  background-color: #000000;
  
}

#searchresults{
  width: 100%;
  border-radius: 4px;
 
  text-align: left;
}
#searchresults p{
  text-align: center;
  width: 100%;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  color:#808080;
}
.qty{
  width: 80%;
  padding: 5px;
}
.delete img{
  width: 50%;
  cursor: pointer;
}
.product{
  width: 120px;
  height: 180px;
  border: solid 1px  #E6E8E7;
    display: inline-block;
    margin:6px;
    cursor: pointer;
    border-radius: 3px;

}
.product:hover{
  box-shadow: 0px 0px 8px 0px rgba(119, 119, 119, 0.66);
    -moz-box-shadow: 0px 0px 8px 0px rgba(119, 119, 119, 0.66);
    -webkit-box-shadow: 0px 0px 8px 0px rgba(119, 119, 119, 0.66);
}
.product-photo{
  width: 100%;
  height: 120px;
}
.product-photo img{
  width: 100%;
  
}
.clave{
  width: 100%;
  height: 26px;
  line-height: 26px;
  text-align: center;
  font-weight: bolder;
  font-family:  Arial, Helvetica, sans-serif;
  color: #545A8E;
}
.inventario{
  width: 100%;
  height: 17px;
  font-size: 13px;
  line-height: 17px;
  text-align: center;
  font-family:  Arial, Helvetica, sans-serif;
  color: #808080;
}
.product-name{
  font-size: 11px;
}
@media screen and (max-width: 945px) {
  .actions{
    width: 100%;
    margin:8px auto;
  }
 #customers th{
    font-size: 11px;
}
#resume{
   border-collapse: collapse!important;
   font-size: 11px;
}

.categos a{
  border: none;
}    
}

#formvacio{
  color: #D24F57;
  font-family:  Arial, Helvetica, sans-serif;

}
}

#requests{
  border-radius: 4px;
    border-collapse: collapse;
    width: 100%!important;
}
#requests tr{
  cursor: pointer;
}

#requests th, td {
  font-family:  Arial, Helvetica, sans-serif!important;
    text-align: left;
    padding: 8px;
}

#requests tr:nth-child(even){background: #F9F9F9}
#requests tr:hover{
 background: #F2EDED;
}
#requests th {
    
    
}
.titles{
  font-size: 12px;
  font-weight: bold!important;
   text-align: left;
   color: #808080;
}
.infos{
  font-size: 12px;
  text-align: left;
}
.info-row{
  
 
}
#resume td{
  
   border: 1px solid #ddd!important;
}
#resume tr:nth-child(even){background-color:#F9F9F9}
.active{
  background: #FFF8C4!important;
  border:solid 1px #F7DEAE;
  color: #626461;
  font-weight: bolder;
 
z-index: 999999;
}
#messages{
  height: 60px;
  position: relative;
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
    .copys{
      width: 100%;
      max-height: 200px;
      overflow-y: auto;
    }
    
</style>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>VICTOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <!-- Latest compiled and minified CSS -->
    
    <!-- Optional theme -->
   
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  



 
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="../js/main.js"></script>


  
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<div class="topnav" id="myTopnav">
<a href="#" class="navlogo"></a>
  <a href="#home">Portal de Victor</a>
  
  <a href="logout.php" class="exit">Salir</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
 
</div>
<div class="separator" id="messages">
  <div class="notification <?=(!isset($_SESSION['notification']))? '' : $_SESSION['notification'] ?>" style="<?=(!isset($_SESSION['notification']))? 'display:none;' : '' ?>">
    <div></div>
    <p><span><?=$_SESSION['result'] ?></span> <?=$_SESSION['messages'] ?></p>
  </div>
</div>
<div class="left-sec" >

<form id="movimiento" method="POST" action="realizar.php" onsubmit="showLoad();" enctype="multipart/form-data">
<div class="sec-contain" id="left-sec" style="margin:0 auto;">
<div class="separator"></div>
<div class="margin-contain">
<input style="display: none;" type="text" name="" placeholder="Buscar productos.." id="finder">

<div class="subtotal">
<h1>No. de Recibo:</h1>
  <table id="resume">
    <tr class="info-row" style="border-top: 1px solid #ddd">
      <td class="titles" width="25%">RFC:</td>
      <td class="infos" id="rfc" width="25%"></td>
      <td class="titles" width="25%">RAZON SOCIAL:</td>
      <td class="infos" id="razon" width="25%"></td>
    </tr>
   <tr class="info-row">
      <td class="titles" width="25%">CALLE:</td>
      <td class="infos" id="calle" width="25%"></td>
      <td class="titles" width="25%">NO. INTERIOR:</td>
      <td class="infos" id="int" width="25%"></td>
    </tr>
    <tr class="info-row">
      <td class="titles" width="25%">NO. EXTERIOR:</td>
      <td class="infos" id="ext" width="25%"></td>
      <td class="titles" width="25%">C.P:</td>
      <td class="infos" id="cp" width="25%"></td>
    </tr>
    <tr class="info-row">
      <td class="titles" width="25%">COLONIA:</td>
      <td class="infos" id="col" width="25%"></td>
      <td class="titles" width="25%">DELEGACION:</td>
      <td class="infos" id="del" width="25%"></td>
    </tr>
    <tr class="info-row">
      <td class="titles" width="25%">TELEFONO:</td>
      <td class="infos" id="tel" width="25%"></td>
      <td class="titles" width="25%">EMAIL:</td>
      <input type="hidden" id="inputmail" name="mail">
      <input type="hidden" id="idfact" name="idfact">
      <td class="infos" id="mail" width="25%"></td>
    </tr>
    <tr class="info-row">
      <td class="titles" width="25%">DESCRIPCION:</td>
      <td class="infos" id="descrip" width="25%"></td>
      <td class="titles" width="25%">MONTO</td>
      <td class="infos" id="mont" width="25%"></td>
    </tr>
    <tr class="info-row">
      <td class="titles" width="25%">ESTADO:</td>
      <td class="infos" id="est" width="25%"></td>
      <td class="titles" width="25%"></td>
      <td class="infos" width="25%"></td>
    </tr>
    <tr class="info-row">
      
      <td colspan="2" class="infos" id="xml" ><input type="file" accept=".xml" required id="fxml" name="filexml" style="display: none;"><div id="b-xml" style="display: none;" class="actions blue" data-file="xml" onclick="$('#fxml').click();"><p>SUBIR ARCHIVO XML</p>
</div></td>
      
      <td colspan="2" class="infos" id="pdf" ><input type="file" accept=".pdf" required id="f-pdf" name="filepdf" style="display: none;"><div id="b-pdf" style="display: none;" class="actions blue" data-file="pdf" onclick="$('#f-pdf').click();"><p>SUBIR ARCHIVO PDF</p></div></td>
    </tr>
  </table>
</div>
<div class="copys">
  <input type="email" name="copys[]">
</div>
<div class="buttons" style="padding-top: 20px;">
  <button type="submit" name="submit" class="actions2 " onclick="">GUARDAR
</button><button  class="actions2 " onclick="">CANCELAR</button>
</div>


</div>
<div class="separator"></div></div>
</form>
</div ><div class="right-sec" >
  <div class="sec-contain" id="right-sec"><div class="separator"></div>
  <div class="margin-contain">
    <div class="categos">
  <a href="javascript:void(0);" class="activeli menuli" onclick="getpending()">Pendientes</a>
  <a  href="javascript:void(0);" class=" menuli" onclick="getRealized()">Realizadas</a>

  
</div>
<div class="separator"></div>
<div id="searchresults">
<table id="requests" style="width: 100%;">
  
</table>  
  
</div>
  </div>
  <div class="separator"></div></div>
</div>
<div class="backdrop"></div>

<div class="box">
  <div class="saveloader">
  
    <img src="../images/loader.gif">
    <p style="text-align: center; font-weight: bold;">Enviando..</p>
  </div>
  <div class="savesucces" style="display: none;">
  
    <img src="../images/success.png">
    <p style="text-align: center; font-weight: bold;">Listo!</p>
  </div>
  </div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>

<script>



$(document).ready(function () {
  getpending();
replyHeight();

$(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
  
});
$(window).resize(function () {
    replyHeight();

});
 function replyHeight(){
  var one = document.getElementById("left-sec");
  var two = document.getElementById("right-sec");
  var three = document.getElementById("searchresults");
  style = window.getComputedStyle(one);
  wdt = style.getPropertyValue('height');
  console.log(wdt);
  two.style.height = wdt;

  $('#searchresults').height($('#right-sec').height()-85);
 }
 $(document).on('click', '.remove', function () {
  this.closest('tr').remove();
  collectPrices();
     collectQty();
});
 $(document).on('click', '.menuli', function () {
  $('.activeli').removeClass('activeli');
  $(this).addClass('activeli');
});
$(document).on('keyup', '#finder', function () {
  var text=$('#finder').val();
     $.ajax({  
                      
                     type:"POST",
                     url:"search.php",   
                     data:{param:text},  
                       
                     success:function(data){ 
                          
                          $('#searchresults').html(data);
                          
                     }  
                });
});

$(document).on('change', '.qty', function () {
  var id=$(this).data('id');
  aumentarManual(id);
  collectPrices();
     collectQty();
});
$(document).on('keyup', '.qty', function () {
  var id=$(this).data('id');
  aumentarManual(id);
  collectPrices();
     collectQty();
});

  function addProduct(id,internalId){
    if ($("#prod-"+id).length){ 
      if(confirm('Deseas Agregar este producto otra vez?')) {
              aumentar(id);
             
                  
   }else{
    return false;
   }
     }else{
      var wrapper=$('#customers');
    var price=$('#'+id+'-precio').val();
    var stock=$('#'+id+'-stock').val();
    var name=$('#'+id+'-nombre').val();
     var new_prod='<tr id="prod-'+id+'" class="temporal"><td class="delete"><img class="remove" src="../images/delete.png"></td>'+
        '<td class="product-name">'+name+'</td>'+
        '<td><input type="number" name="cantidades['+id+']" class="qty" value="1" data-id="'+id+'"></td>'+
        '<input type="hidden" name="productos[]" value="'+id+'">'+
        '<input type="hidden" name="productosId['+id+']" value="'+internalId+'">'+
        '<input type="hidden" name="costos['+id+']" class="costo" value="'+price+'">'+
        '<input type="hidden" name="stocks['+id+']" value="'+stock+'">'+
        '<input type="hidden" class="fixcosto" name="unitarios['+id+']" value="'+price+'">'+
        '<td class="price">'+price+'</td></tr>';

$(wrapper).append(new_prod);
     }
    //console.log($("#prod-"+id).length);
 collectQty();    
collectPrices(); 
  }

  function collectPrices(){
      var sum = 0;
$('.costo').each(function(){
  var val= this.value;
  if (val==''){ val=0;}
    sum += parseFloat(val);
});
//var desc=$('#descu').val();
//var conD = sum * parseFloat(desc);
//var ConIva = (sum - conD) * 0.16;
 
//var general=conD + ConIva;

//var general=conD + ConIva;

$('#pricetotal').html(sum.toFixed(2));
$('#total-amount').html(sum.toFixed(2));
$('#costo-total').val(sum.toFixed(2));

  }
  function collectQty(){
      var qty=$('#customers tr').length-1;
//var desc=$('#descu').val();
//var conD = sum * parseFloat(desc);
//var ConIva = (sum - conD) * 0.16;
 
//var general=conD + ConIva;

//var general=conD + ConIva;

$('#totalqty').html(qty);


  }
function aumentar(id){
  var incease_price=$('#prod-'+id+' .fixcosto').val();
              var increase_qty=$('#prod-'+id+' .qty').val();
              var aumento=parseInt(increase_qty)+1;
              console.log(aumento);
              $('#prod-'+id+' .qty').val(aumento);
              
              //$('#prod-'+id+' .costo').val(parseInt(incease_price));
              $('#prod-'+id+' .costo').val(parseInt(incease_price)*aumento);
              $('#prod-'+id+' .price').html(parseInt(incease_price)*aumento);
              $('#costo-total').val(aumento);
}
function aumentarManual(id){
  var incease_price=$('#prod-'+id+' .fixcosto').val();
              var increase_qty=$('#prod-'+id+' .qty').val();
              var aumento=parseInt(increase_qty);
              console.log(aumento);
              $('#prod-'+id+' .qty').val(aumento);
              
              //$('#prod-'+id+' .costo').val(parseInt(incease_price));
              $('#prod-'+id+' .costo').val(parseInt(incease_price)*aumento);
              $('#prod-'+id+' .price').html(parseInt(incease_price)*aumento);
              $('#costo-total').val(aumento);
}
function getCategorie(id){
  $.ajax({  
                      
                     type:"POST",
                     url:"search.php",   
                     data:{catego:id},  
                       
                     success:function(data){ 
                          
                          $('#searchresults').html(data);
                          
                     }  
                });
}
function saveMovement(){
  event.preventDefault();
  var lenghts= $('[name="productos[]"]').length;
  if (lenghts>0) {
      $.ajax({  
                      
                     type:"POST",
                     url:"checkout.php",   
                     data:$('#movimiento').serialize(),  
                       
                     success:function(data){ 
                          
                          $('#searchresults').html(data);
                          $('.temporal').remove();
                          $('#total-amount').html(0.00);
                           $('#pricetotal').html(0.00);
                           $('#totalqty').html(0);

                          
                     }  
                });
    }else{
      $('#formvacio').show();
      setTimeout(function() {   
                   $('#formvacio').hide();
                }, 3000);
    }

}

function getpending(){
    $.ajax({
            type: 'POST',
            url: "solicitudes.php",
            data:{param:'pending'},
           
            success: function(data) {
               
               $('#requests').html(data);
                
                
            }
        });
}
function getRealized(){
    $.ajax({
            type: 'POST',
            url: "solicitudes.php",
            data:{param:'realized'},
           
            success: function(data) {
               
               $('#requests').html(data);
                
                
            }
        });
}

$(document).on('click', '.fact-row', function () {
  $('.active').removeClass('active');
  var info=$(this).data("info");
$('.savedfiles').remove();
$('.buttons').show();
  $("#rfc").html(info.rfc);
$("#razon").html(info.razon_social);
$("#calle").html(info.calle);
$("#int").html(info.no_int);
$("#ext").html(info.no_ext);
$("#cp").html(info.cp);
$("#col").html(info.colonia);
$("#del").html(info.delegacion);
$("#tel").html(info.telefono);
$("#mont").html(info.monto);
$("#est").html(info.estado);
$("#mail").html(info.email);
$("#descrip").html(info.descripcion);
$(".subtotal h1").html('No. de Recibo: '+info.recibo);
$("#inputmail").val(info.email);
$("#idfact").val(info.id_factura);
 $('.infos div').show();
 $(this).addClass('active'); 
 
  console.log(info.calle);
  replyHeight();
 
});
$(document).on('click', '.fact-realized', function () {
  $('.buttons').hide();
  $('.active').removeClass('active');
  var info=$(this).data("info");
$('.savedfiles').remove();
  $("#rfc").html(info.rfc);
$("#razon").html(info.razon_social);
$("#calle").html(info.calle);
$("#int").html(info.no_int);
$("#ext").html(info.no_ext);
$("#cp").html(info.cp);
$("#col").html(info.colonia);
$("#del").html(info.delegacion);
$("#tel").html(info.telefono);
$("#mail").html(info.email);
$("#mont").html(info.monto);
$("#est").html(info.estado);
$("#descrip").html(info.descripcion);
$(".subtotal h1").html('No. de Recibo: '+info.recibo);
$("#inputmail").val(info.email);
$("#idfact").val(info.id_factura);
 $('.infos div').hide();
 var filestr='<tr class="info-row savedfiles">'+
 '<td colspan="2">'+info.archivo_pdf+'</td>'+
'<td colspan="2">'+info.archivo_xml+'</td><tr>';
 $("#resume").append(filestr);
 $(this).addClass('active'); 
 
  console.log(info.calle);
  replyHeight();
 
});
$('#fxml').change(function(e){
            var fileName = e.target.files[0].name;
            $('#b-xml').html("<p>"+fileName+"</p>");
        });
$('#f-pdf').change(function(e){
            var fileName = e.target.files[0].name;
            $('#b-pdf').html("<p>"+fileName+"</p>");
        });
         function showLoad(){
        $('.backdrop, .box').animate({'opacity':'.50'}, 300, 'linear');
          $('.box').animate({'opacity':'1.00'}, 300, 'linear');
          $('.backdrop, .box').css('display', 'block');
      }

</script>
<?php
unset($_SESSION['messages']);
unset($_SESSION['notification']);
unset($_SESSION['result']);



?>