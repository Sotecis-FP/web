@extends('layouts.web')
@section('content')
<div class="caja-slider">
  <img class="img-header" src="/img/tienda/fondo_marmol.jpg" alt="">
</div>

<div id="app">
 <subcategorias></subcategorias>
</div>

@include('layouts.footer')


@section('scripts')
<!-- <script type="text/javascript">

// VUE
 new Vue({
   el:'#app',
   created:function(){
    this.getSubcategoria(1);
    this.getProCategoria(1);
    console.log(this.host);

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
       var url = this.host + '/subcategoria/' + id;
       axios.get(url).then(responde =>{
          this.subs = responde.data;

        });
     },
     getProductos: function(id){
       var url = this.host + '/productos/' + id;
       axios.get(url).then(response => {
         this.productos = response.data;
       });
     },
     getProCategoria: function(id){
      var url = this.host + '/procategoria/' + id;
      axios.get(url).then(response => {
        this.productos = response.data;
      });
     }
   }

 });

</script> -->

@endsection
@endsection
