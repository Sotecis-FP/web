<template>
<div>
  <div class=" caja-categorias row ">
    <div class="col-md-4 col-sm-4 col-xs-4 caja-cat">
      <a href="#" v-on:click.prevent="getSubcategoria(1)" style="text-decoration:none;">
      <img  class="img-categorias" src="/img/tienda/naturales.jpg" alt="">
      <div class="caja-text-categoria">
          <p class="text-categoria">ARREGLOS NATURALES</p>
          <p class="text-categoria-res" style="display:none">NATURALES</p>
      </div>
     </a>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-4">
      <a href="#" v-on:click.prevent="getSubcategoria(2)"  style="text-decoration:none;">
      <img  class="img-categorias" src="/img/tienda/artificiales.jpg" alt="">
      <div class="caja-text-categoria">
          <p class="text-categoria">ARREGLOS ARTIFICIALES</p>
          <p class="text-categoria-res" style="display:none">ARTIFICIALES</p>
      </div>
      </a>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-4">
      <a href="#" v-on:click.prevent="getSubcategoria(3)" style="text-decoration:none;">
      <img  class="img-categorias"src="/img/tienda/novias.jpg" alt="">
      <div class="caja-text-categoria novias">
          <p class="text-categoria novias-text">EVENTOS</p>
          <p class="text-categoria-res" style="display:none">EVENTOS</p>
      </div>
      </a>
    </div>
  </div>


<div  class="caja-productos row">
   <div id="lista" class="menu col-md-3">
      <ul>
        <li style="cursor:pointer;" v-on:click.prevent="getProductos(sub.id)" @click="selected = sub.id" :class="{highlight:selected == sub.id}" class="titulo-subcategoria"  v-for="sub in subs" v-text="sub.nombre"></li>
      </ul>
   </div>

   <div class="col-md-9 row ">
        <div v-for="producto in productos">
         <a  v-bind:href="'detalle/'+producto.id">
           <div class="col-md-4 col-xs-6 " id="general" >
           <img class="img-productos" v-bind:src="'/'+ producto.imagen " alt="">
             <div class="caja-text-producto">
             <p class=" text-categoria2">{{producto.nombre}} <br>  ${{producto.precio}}</p>
             </div>
           </div>
         </a>
       </div>
  </div>
 </div>
 </div>
</template>

<script>
import axios from 'axios'
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        created: function(){
          this.getSubcategoria(1);
        },
        data () {
          return {
            subs:[],
            productos:[],
            selected: undefined,

          }
        },
        methods:{
          getSubcategoria: function(id){
            this.subs =[''];
            this.getProCategoria(id);
            var url = '/subcategoria/' + id;
            axios.get(url).then(responde =>{
               this.subs = responde.data;
             });
        },
        getProductos: function(id){
          var url = '/productos/' + id;
          axios.get(url).then(response => {
            this.productos = response.data;
          });
        },
        getProCategoria: function(id){
         var url ='/procategoria/' + id;
         axios.get(url).then(response => {
           this.productos = response.data;
         });
       },
      }
}

</script>
