var dels = ["Álvaro Obregón", "Azcapotzalco", "Benito Juárez","Coyoacán","Cuajimalpa de Morelos","Cuauhtémoc","Gustavo A. Madero","Iztacalco","Iztapalapa","Magdalena Contreras","Miguel Hidalgo","Milpa Alta","Tláhuac","Tlalpan","Venustiano Carranza","Xochimilco"];
var muns=new Array(
'Acambay',
'Acolman',
'Aculco',
'Almoloya de Alquisiras',
'Almoloya de Juárez',
'Almoloya del Río',
'Amanalco',
'Amatepec',
'Amecameca',
'Apaxco',
'Atenco',
'Atizapán',
'Atizapán de Zaragoza',
'Atlacomulco',
'Atlautla',
'Axapusco',
'Ayapango',
'Calimaya',
'Capulhuac',
'Chalco',
'Chapa de Mota',
'Chapultepec',
'Chiautla',
'Chicoloapan',
'Chiconcuac',
'Chimalhuacán',
'Coacalco de Berriozábal',
'Coatepec Harinas',
'Cocotitlán',
'Coyotepec',
'Cuautitlán',
'Cuautitlán Izcalli',
'Donato Guerra',
'Ecatepec de Morelos',
'Ecatzingo',
'El Oro',
'Huehuetoca',
'Hueypoxtla',
'Huixquilucan',
'Isidro Fabela',
'Ixtapaluca',
'Ixtapan de la Sal',
'Ixtapan del Oro',
'Ixtlahuaca',
'Jaltenco',
'Jilotepec',
'Jilotzingo',
'Jiquipilco',
'Jocotitlán',
'Joquicingo',
'Juchitepec',
'La Paz',
'Lerma',
'Luvianos',
'Malinalco',
'Melchor Ocampo',
'Metepec',
'Mexicaltzingo',
'Morelos',
'Naucalpan de Juárez',
'Nextlalpan',
'Nezahualcóyotl',
'Nicolás Romero',
'Nopaltepec',
'Ocoyoacac',
'Ocuilan',
'Otumba',
'Otzoloapan',
'Otzolotepec',
'Ozumba',
'Papalotla',
'Polotitlán',
'Rayón',
'San Antonio la Isla',
'San Felipe del Progreso',
'San José del Rincón',
'San Martín de las Pirámides',
'San Mateo Atenco',
'San Simón de Guerrero',
'Santo Tomás',
'Soyaniquilpan de Juárez',
'Sultepec',
'Tecámac',
'Tejupilco',
'Temamatla',
'Temascalapa',
'Temascalcingo',
'Temascaltepec',
'Temoaya',
'Tenancingo',
'Tenango del Aire',
'Tenango del Valle',
'Teoloyucán',
'Teotihuacán',
'Tepetlaoxtoc',
'Tepetlixpa',
'Tepotzotlán',
'Tequixquiac',
'Texcaltitlán',
'Texcalyacac',
'Texcoco',
'Tezoyuca',
'Tianguistenco',
'Timilpan',
'Tlalmanalco',
'Tlalnepantla de Baz',
'Tlatlaya',
'Toluca',
'Tonanitla',
'Tonatico',
'Tultepec',
'Tultitlán',
'Valle de Bravo',
'Valle de Chalco Solidaridad',
'Villa de Allende',
'Villa del Carbón',
'Villa Guerrero',
'Villa Victoria',
'Xalatlaco',
'Xonacatlán',
'Zacazonapan',
'Zacualpan',
'Zinacantepec',
'Zumpahuacán',
'Zumpango',
    );
var ests=new Array(
    'Aguascalientes',
'Baja California',
'Baja California Sur',
'Campeche',
'Chiapas',
'Chihuahua',
'Ciudad de México',
'Coahuila',
'Colima',
'Durango',
'Estado de México',
'Guanajuato',
'Guerrero',
'Hidalgo',
'Jalisco',
'Michoacán',
'Morelos',
'Nayarit',
'Nuevo León',
'Oaxaca',
'Puebla',
'Querétaro',
'Quintana Roo',
'San Luis Potosí',
'Sinaloa',
'Sonora',
'Tabasco',
'Tamaulipas',
'Tlaxcala',
'Veracruz',
'Yucatán',
'Zacatecas');
document.getElementById("datos").addEventListener("submit", function(event){
    event.preventDefault();
    var clicked = $("input[type='submit']");
    var email = $("input[type='email']").val();
    var ok=true;
    var rads=$(':radio[name="radios"]:checked').length;
    console.log('radios '+rads);
    if (!validateEmail(email)) {
        $("#errormail").show();
        ok=false;
    }
    if (rads<1) {
        $("#rads").show();
       ok=false; 
    }

    if (ok) {
       $('.login-inner').html('<img class="imgload" src="../images/loader.gif">');
    $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
           
            success: function(data) {
               
               $('.login-inner').html(data);
                
                
            }
        }); 
    }


    
});

 $(document).on('click', '.checks', function () {
    $('.on').removeClass('on');
  $(this).addClass('on');
  $(this).find('input:radio').prop('checked', true);
  
});
 $(document).on('click', '.del-mun', function () {
    
  $('.del-mun').hide();
  $('#del-mun').val($(this).data('text'));
 
  
});
$(document).on('click', '.estates', function () {
    
  $('.estates').hide();
  $('#estado').val($(this).data('text'));
 
  
});
function validateEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( email );
}



function getDelegaciones(value){
  var status = 'Not exist';
 
  for(var i=0; i<del.length; i++){
   var name = del[i];
   if(name == value){
    status = 'Exist';
    break;
   }
  }

  return status;
 }
$('#del-mun').keyup(function(){

   var valThis = $(this).val().toLowerCase();
    if(valThis == ""){
        $('.result > p').hide();
    } else {
        $('.result > p').each(function(){
            var text = $(this).text().toLowerCase();
            (text.indexOf(valThis) >= 0) ? $(this).show() : $(this).hide();
        });
    }
}); 
$('#estado').keyup(function(){

   var valThis = $(this).val().toLowerCase();
    if(valThis == ""){
        $('.result-est > p').hide();
    } else {
        $('.result-est > p').each(function(){
            var text = $(this).text().toLowerCase();
            (text.indexOf(valThis) >= 0) ? $(this).show() : $(this).hide();
        });
    }
});

 $(document).ready(function(){
    for(var i=0; i<dels.length; i++){
   var name = dels[i];
   $('.result').append('<p data-text="'+dels[i]+'" class="del-mun">'+dels[i]+'</p>');
  };
  for(var j=0; j<muns.length; j++){
   var name = muns[j];
   $('.result').append('<p data-text="'+muns[j]+'" class="del-mun">'+muns[j]+'</p>');
  }; 
  for(var k=0; k<ests.length; k++){
   var name = ests[k];
   $('.result-est').append('<p data-text="'+ests[k]+'" class="estates">'+ests[k]+'</p>');
  };  
}); 

function showLoad(){
        $('.backdrop, .box').animate({'opacity':'.50'}, 300, 'linear');
          $('.box').animate({'opacity':'1.00'}, 300, 'linear');
          $('.backdrop, .box').css('display', 'block');
      }
function close_box()
      {
        $('.backdrop, .box').animate({'opacity':'0'}, 300, 'linear', function(){
          $('.backdrop, .box').css('display', 'none');
        });
      }