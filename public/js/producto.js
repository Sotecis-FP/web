// Cargar subcategorias

$(function(){
  $('#select-categoria').on('change',cargarSubcategoria);
});

function cargarSubcategoria(){
  let categoria_id = $(this).val();
  if (!categoria_id) {
    $('#select-subcategoria').html('<option value="">Seleccione...</option>');
    return;
  }

 // Peticion ajax   categoria/{id}/subcategoria
 let html_select = '<option value="">Seleccione...</option>';
 $.get('api/categoria/'+categoria_id+'/subcategoria',function(data){
    for(i=0;i<data.length;++i)
    html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>';
    $('#select-subcategoria').html(html_select);
 });
}


// Mostrar producto
$( 'li' ).click(function() {
  let subcategoria_id = $(this).val();
 let html_select = '';
 $("#general").css("display","none");
  $.get('/api/productos/'+subcategoria_id,function(data){
     for(i=0;i<data.length;++i)
    html_select += '<a href="/detalle/'+data[i].id+'"><div class="col-md-4" ><img class="img-productos" src="/'+data[i].imagen+'" alt=""><div class="caja-text-producto"><p class="text-categoria">'+data[i].nombre+'</p></div></div></a>';
     $('#productos').html(html_select);
  });
});



// Mostrar ventana

function openVentana(){
 $(".ventana_flotante_form").slideDown("slow");

}

function closeVentana(){
  $(".ventana_flotante_form").slideUp("fast");
}
