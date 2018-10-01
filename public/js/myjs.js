// Mostrar Imagen en el dom

$(window).load(function(){

    $(function() {
     $('#files').change(function(e) {
         addImage(e);
        });

        function addImage(e){
         var file = e.target.files[0],
         imageType = /image.*/;

         if (!file.type.match(imageType))
          return;

         var reader = new FileReader();
         reader.onload = fileOnload;
         reader.readAsDataURL(file);
        }
        function fileOnload(e) {
         var result=e.target.result;
         $('#img1').attr("src",result);
        }
       });
     });
    //  Mostrar texto
    $(document).ready(function(){
        $("#descripcion").keyup(function(){
            var texto_escrito = $(this).val();
            $("#salida_descripcion").html(texto_escrito);
        })
        $("#nombre").keyup(function(){
            var texto_escrito = $(this).val();
            $("#salida_nombre").html(texto_escrito);
        })
        $("#precio").keyup(function(){
            var texto_escrito = $(this).val();
            $("#salida_precio").html(texto_escrito);
        })
    })





      // $.ajaxSetup({
      //      headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
      // });
