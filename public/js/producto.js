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
 $.get('/api/categoria/'+categoria_id+'/subcategoria',function(data){
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
    html_select += '<a href="/detalle/'+data[i].id+'"><div class="col-md-4 col-xs-6" ><img class="img-productos" src="/'+data[i].imagen+'" alt=""><div class="caja-text-producto"><p class="text-categoria text-categoria2">'+data[i].nombre+'</p></div></div></a>';
     $('#productos').html(html_select);
  });
});


$('#myForm #accion').on('change', function() {
  if ($('input[name=accion]:checked', '#myForm').val()=='tienda') {
  openVentana2();
}else{

  openVentana();
}

 });



 new Vue({
   el:'#app',
   created:function(){
    this.getSubcategoria(1);
    this.getProCategoria(1);
   },
   data:{
     subs:[],
     productos:[],
     selected: undefined,
     host:'http://'+location.host
   },
   methods:{
     getSubcategoria: function(id){
       this.subs =[''];
       this.getProCategoria(id);
       var url ='subcategoria/' + id;
       axios.get(url).then(responde =>{
          this.subs = responde.data;
        });
     },
     getProductos: function(id){
       var url = 'productos/' + id;
       axios.get(url).then(response => {
         this.productos = response.data;
       });
     },
     getProCategoria: function(id){
      var url = 'procategoria/' + id;
      axios.get(url).then(response => {
        this.productos = response.data
      });
     }
   }

 });
