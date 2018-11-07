// Mostrar ventana

function openVentana2(){
 $(".ventana_flotante_form2").slideDown("slow");

}
function openVentana(){
 $(".ventana_flotante_form").slideDown("slow");

}

function closeVentana(){
  $(".ventana_flotante_form").slideUp("fast");
}
function closeVentana2(){
  $(".ventana_flotante_form2").slideUp("fast");
}

function crearOrden(){
  $.ajax({
     url:'/crear/orden',
     type:'get',

  });

}


$('#btn-form2').click(function(event) {

      $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

  event.preventDefault();
  var nombre = $('#nombret').val();
  var telefono = $('#telefonot').val();
  var correo = $('#correot').val();
  var fecha = $('#fechat').val();
  var hora = $('#horat').val();
  var direccion = $('#direcciont').val();

  console.log(direccion);


 $.ajax({
    url:'/pagar',
    type:'POST',
    dataType: 'json',
      data:{
        nombre:nombre,
        telefono:telefono,
        correo:correo,
        fecha:fecha,
        hora:hora,
        direccion:direccion
      }
 });

 $(".ventana_flotante_form2").slideUp("fast");

});

$('#btn-form').click(function(event) {

      $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

  event.preventDefault();
  var nombre = $('#nombre').val();
  var telefono = $('#telefono').val();
  var correo = $('#correo').val();
  var direccion = $('#direccion').val();
  var esp_direccion = $('#esp_direccion').val();
  var barrio = $('#barrio').val();
  var recibe = $('#recibe').val();
  var fecha = $('#fecha').val();
  var hora = $('#hora').val();

 $.ajax({
    url:'/pagar',
    type:'POST',
    dataType: 'json',
      data:{
        nombre:nombre,
        telefono:telefono,
        correo:correo,
        direccion:direccion,
        esp_direccion:esp_direccion,
        barrio:barrio,
        recibe:recibe,
        fecha:fecha,
        hora:hora
      }
 });

 $(".ventana_flotante_form").slideUp("fast");

});
