/******************** index2.php ********************/

$(document).ready(function() {
   // Esta primera parte crea un loader no es necesaria
    $().ajaxStart(function() {
        $('#loading').show();
        $('#resultaado').hide();
    }).ajaxStop(function() {
        $('#loading').hide();
        $('#resultaado').fadeIn('slow');
    });
   // Interceptamos el evento submit
    $('#tareas').submit(function() {
  // Enviamos el formulario usando AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                //$('#currentOrder').html('ORDEN ACTUAL: '+data);
               $('#tareas').html(data);
               var curorder= $('#returning').val();
              
               
               $('#currentOrder').html('ORDEN ACTUAL: orden '+curorder);
                $('.saveloader').hide();
                $('.savesucces').show();
                 setTimeout(function() {   
                   close_box();
                }, 1000);
                 
               
            }
        })        
        return false;
    }); 
    $('#form, #fat').submit(function() {
  // Enviamos el formulario usando AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                //$('#currentOrder').html('ORDEN ACTUAL: '+data);
               
               
                $('.saveloader').hide();
                $('.savesucces').show();
                 setTimeout(function() {   
                   close_box();
                }, 1000);
                
            }
        })        
        return false;
    }); 
})

function alerttime(){
  animacion = function(){
  
  document.getElementById('formulario').classList.toggle('fade');
}
setInterval(animacion, 550);
}


                                             $( "#save-ajuste").click(function() {
                                             
                                                      $( "#fo4" ).submit();
                                                   
                                             
                                            });

                                             $('.radio-menu').click(function() {
                                              $('.face-osc').removeClass('face-osc');
                                              $(this).addClass('face-osc').find('input').prop('checked', true)    
                                            });

                                             $('.radio-menu-small').click(function() {
                                              

                                            });

                                             function selectOrders(id){
                                               $('#'+id).toggleClass('face-osc');
                                              var checkBoxes=$('#'+id).find('input').prop('checked', function(_, checked) {
                                                return !checked;
                                            }); 
                                              var seri='';
                                             var fields= $('input[name="datos[]"]:checked').serializeArray(); 
                                             jQuery.each( fields, function( i, field ) {
                                            seri+= field.value + "," ;
                                          });
                                             $('#orderID').val(seri);
                                             console.log(seri);
                                             }
                                             
                                             
                                            $( ".save-bottom").click(function() {
                                             
                                                      $( "#tareas" ).submit();
                                                   
                                             
                                            });

                                            $( document ).ajaxStop(function() {

                                              $('.radio-menu-small').click(function() {
                                               
                                            });

                                            $( ".save-bottom").click(function() {
                                             
                                                      $( "#tareas" ).submit();
                                                      $('#close-down').click();
                                                   
                                             
                                            });      

                                              });
                                            var element = document.getElementById('nommaquina');
    
 element.addEventListener("change", function(){ 
    var maquina = document.getElementById('maquina');
      
     
     maquina.value = this.options[this.selectedIndex].text;
    
     
 });

 $('.backdrop').click(function(){
          close_box();
        });

  function submitEat(suceso){
    $('#s-radios').val(suceso);
    $( "#fo3" ).submit();
  }
  function close_box()
      {
        $('.backdrop, .box').animate({'opacity':'0'}, 300, 'linear', function(){
          $('.backdrop, .box').css('display', 'none');
        });
      }
  function showLoad(){
        $('.backdrop, .box').animate({'opacity':'.50'}, 300, 'linear');
          $('.box').animate({'opacity':'1.00'}, 300, 'linear');
          $('.backdrop, .box').css('display', 'block');
      }
      function sendOrder(id){
       // $('#orderID').replaceWith( "<input type='hidden' id='orderID' name='numodt' value= " + id + ">" );
       
      }

      var timer = new Timer();
 var timerEat = new Timer();
 var timerAlert = new Timer();
$(document).ready(function(){
timer.start();
});
       

$('#nuevo_registro').submit(function () {
    timer.pause();
    $('#timee').val(timer.getTimeValues().toString());
    //$('#timee').val(timer.getTimeValues().toString());
});
/*$('#chronoExample .stopButton').click(function () {
    timer.stop();

});*/
timer.addEventListener('secondsUpdated', function (e) {
    $('#chronoExample .values').html(timer.getTimeValues().toString());
});
timer.addEventListener('started', function (e) {
    $('#chronoExample .values').html(timer.getTimeValues().toString());
});
     
     $( "#stop" ).click(function() {
      var orderexist=$('#orderID').val();
      if (orderexist!=='') {
        $( "#nuevo_registro" ).submit();
      } else{
        alert('Debes seleccionar una orden');
      }
                                        

                                            });

   $('.goeat').click(function () {
    timerEat.start();
    //$('#timee').val(timerEat.getTimeValues().toString());
    timerEat.addEventListener('secondsUpdated', function (e) {
    $('#horacomida .valuesEat').html(timerEat.getTimeValues().toString());
    });
    timerEat.addEventListener('started', function (e) {
    $('#horacomida .valuesEat').html(timerEat.getTimeValues().toString());
});
});  

   $('#fo3').submit(function () {
     timerEat.pause();
    $('#timeeat').val(timerEat.getTimeValues().toString());
    timerEat.stop();
   });

   $('.stopeat').click(function () {
    
    timerEat.stop();
   });

   $('.goalert').click(function () {
    timerAlert.start();
    //$('#timee').val(timerAlert.getTimeValues().toString());
    timerAlert.addEventListener('secondsUpdated', function (e) {
    $('#alertajuste .valuesAlert').html(timerAlert.getTimeValues().toString());
    });
    timerAlert.addEventListener('started', function (e) {
    $('#alertajuste .valuesAlert').html(timerAlert.getTimeValues().toString());
});
});  

   $('#fo4').submit(function () {
     timerAlert.pause();
    $('#tiempoalertamaquina').val(timerAlert.getTimeValues().toString());
    timerAlert.stop();
   });

   $('.stopalert').click(function () {
    
    timerAlert.stop();
   });

   $(document).ready(function() {
   // Esta primera parte crea un loader no es necesaria
    $().ajaxStart(function() {
        $('#loading').show();
        $('#result').hide();
    }).ajaxStop(function() {
        $('#loading').hide();
        $('#result').fadeIn('slow');
    });
   // Interceptamos el evento submit
    $('#form, #fat, #fo3, #fo4').submit(function() {
      
  // Enviamos el formulario usando AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                $('#result').html(data);
                $('.saveloader').hide();
                $('.savesucces').show();
                 setTimeout(function() {   
                   close_box();
                }, 1000);
                console.log(data);

            }
        })        
        return false;
    }); 
})

   function limpiar() {
           setTimeout('document.fo3.reset()',2);
      return false;
}


/******************** index3.php ********************/




/******************** index4.php ********************/