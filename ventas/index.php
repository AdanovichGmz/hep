<?php 
session_start();
$logged=(isset($_SESSION['logged']))? $_SESSION['logged'] : false;

if (!$logged) {
	 header('Location:../index.php');
}else{
?>

<!DOCTYPE html>
<html>
<head>


 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Ventas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <!-- Latest compiled and minified CSS -->
    
    <!-- Optional theme -->
   
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  



 
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="../js/main.js"></script>


  
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

  <link href="../css/panel.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<?php include('../topbar.php'); ?>

<div style="padding-left:16px">
 
</div>
<div class="separator"></div>
<div class="left-sec" >

<form id="movimiento" method="POST">
<div class="sec-contain" id="left-sec" style="margin:0 auto;">
<div class="separator"></div>
<div class="margin-contain">
<input type="text" name="" placeholder="Buscar productos.." id="finder">
<div class="separator"></div>
<div class="tabler">
<table id="customers">
  <tr>
    <th width="10%">Quitar</th>
    <th width="55%">Producto</th>
    <th width="10%">Cantidad</th>
    <th width="25%">Precio</th>
  </tr>


</table>
<p id="formvacio" style="display: none;">Debes agregar por lo menos un producto mi chavo</p>
</div>
<div class="separator"></div>
<div class="subtotal">
	<table id="resume">
		<tr>
			<th width="25%">Articulos</th>
			<th id="totalqty" width="25%">0</th>
			<th width="25%">Total</th>
			<th id="pricetotal" width="25%">0.00</th>
		</tr>
		<tr>
			<td ></td>
			<td ></td>
			<td >Descuento</td>
			<td id="grandtotal" >0.00</td>
		</tr>
	</table>
</div>
<div class="subtotal sub-last" >
<input type="hidden" name="costo-total" id="costo-total">
	<table>
		<tr>
			<th style="font-weight:  bold;" width="35%">Total a Pagar</th>
			<th width="15%">&nbsp</th>
			<th width="25%">&nbsp</th>
			<th id="total-amount" style="font-weight: bold; " width="25%">0.00</th>
			
		</tr>
		
	</table>
</div>
<button class="actions red" onclick="location.reload();">CANCELAR
</button><button class="actions blue" onclick="saveMovement();">ENVIAR MOVIMIENTO</button>
</div>
<div class="separator"></div></div>
</form>
</div><div class="right-sec" >
	<div class="sec-contain" id="right-sec"><div class="separator"></div>
	<div class="margin-contain">
		<div class="categos">
  <a href="javascript:void(0);" class="getcategos" data-idcat="1" >Bendiciones</a>
  <a  href="javascript:void(0);" class="getcategos" data-idcat="2" >Bolos</a>
   <a href="javascript:void(0);"  class="getcategos" data-idcat="3">Bordados</a>
   <a href="javascript:void(0);"  class="getcategos" data-idcat="4">Canastas</a>
   <a href="javascript:void(0);" class="getcategos" data-idcat="6" >Joyeria</a>
  <a href="javascript:void(0);" class="getcategos" data-idcat="5" >Latones</a>
  <a href="javascript:void(0);"  class="getcategos" data-idcat="7">Mariposas</a>
  <a href="javascript:void(0);"  class="getcategos" data-idcat="8">Minis</a>
  
</div>
<div class="separator"></div>
<div id="searchresults">
	
	
</div>
	</div>
	<div class="separator"></div></div>
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
replyHeight();
$('#sales').addClass('active-page');
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
  style = window.getComputedStyle(one);
  wdt = style.getPropertyValue('height');
  console.log(wdt);
  two.style.height = wdt;
 }
 $(document).on('click', '.remove', function () {
 	this.closest('tr').remove();
 	collectPrices();
     collectQty();
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
$(document).on('click', '.getcategos', function () {
  $('.active-catego').removeClass('active-catego');
  $(this).addClass('active-catego');
  var id=$(this).data('idcat');
  $.ajax({  
                      
                     type:"POST",
                     url:"search.php",   
                     data:{catego:id},  
                       
                     success:function(data){ 
                          
                          $('#searchresults').html(data);
                          
                     }  
                });
});
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
</script>
<?php  } ?>