@extends('layouts.web')
@section('content')


<div class="caja-slider">
  <img class="img-header" src="/img/tienda/fondo_marmol.jpg" alt="">
</div>

<div id="app">

<div  class=" caja-categorias row ">

  <div class="col-md-4 col-sm-4 col-xs-4 caja-cat">
    <a href="#" style="text-decoration:none;">
    <img v-on:click.prevent="getSubcategoria(1)" class="img-categorias" src="/img/tienda/naturales.jpg" alt="">

    <div class="caja-text-categoria">
        <p class="text-categoria">ARREGLOS NATURALES</p>
        <p class="text-categoria-res">NATURALES</p>
    </div>
</a>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-4">
    <a href="#" style="text-decoration:none;">
    <img v-on:click.prevent="getSubcategoria(2)" class="img-categorias" src="/img/tienda/artificiales.jpg" alt="">

    <div class="caja-text-categoria">
        <p class="text-categoria">ARREGLOS ARTIFICIALES</p>
        <p class="text-categoria-res">ARTIFICIALES</p>
    </div>
    </a>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-4">
    <a href="#" style="text-decoration:none;">
    <img v-on:click.prevent="getSubcategoria(3)" class="img-categorias"src="/img/tienda/novias.jpg" alt="">

    <div class="caja-text-categoria novias">
        <p class="text-categoria novias-text">EVENTOS</p>
        <p class="text-categoria-res">EVENTOS</p>
    </div>
    </a>
  </div>
</div>






 <div  class="caja-productos row">
   <!--
  @if(isset($categoria->nombre))
  <h2 class="titulo-productos" >{{$categoria->nombre}}</h2>
  @else
  <h2 class="titulo-productos" >ARREGLOS NATURALES</h2>
@endif-->

  <div id="lista" class="menu col-md-3">
     <ul>
       <li style="cursor:pointer;" @click="selected = sub.id" :class="{highlight:selected == sub.id}" class="titulo-subcategoria" v-on:click.prevent="getProductos(sub.id)" v-for="sub in subs" v-text="sub.nombre"></li>
     </ul>
  </div>

  <div class="col-md-9 row ">


     <div v-for="producto in productos">
    <a  v-bind:href="'detalle/'+producto.id">
    <div class="col-md-4 col-xs-6 " id="general" >
    <img class="img-productos" v-bind:src="host+'/'+ producto.imagen " alt="">
    <div class="caja-text-producto">
    <p class=" text-categoria2">@{{producto.nombre}} <br>  $@{{producto.precio}}</p>
    </div>
    </div>
    </a>
    </div>
  </div>

</div>

</div>

@include('layouts.footer')


@section('scripts')
<script type="text/javascript">

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

</script>

@endsection
@endsection
