function openVentana(){
 $(".ventana_flotante_form").slideDown("slow");
 var adultos = $("#adultos").val();
 var niños = $("#niños").val();
 var fecha = $("#fecha").val();
 $("#form_adultos").val(adultos);
 $("#form_niños").val(niños);
 $("#form_fecha").val(fecha);
  console.log(fecha);
}

function closeVentana(){
  $(".ventana_flotante_form").slideUp("fast");
}
