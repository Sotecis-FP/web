
<!-- <form class="form_master" > -->
<!-- <img class="img-reserva" src="images/My_name_is_home_reservas.png" alt="my name is colombia">
<div class="caja-reserva-texto">
  <h2 class="texto-reserva">RESERVA YA!</h2>
  <input type="submit" class="btn-reservar"  onclick="openVentana()"  value="RESERVAR">
</div> -->
<!-- </form> -->

<!-- Formulario flotante -->
<div class="ventana_flotante_form">
          <form class="form_registro" method="POST" action="{{url('reservar')}}">
            {{ csrf_field() }}
              <a href="javascript:closeVentana();"  ><p onclick="closeVentana()" class="cerrar_form">X</p></a>
              <p class="titulo_formulario">
                  CONFIRMAR RESERVA
              </p>
              <label class="form_titulo">NOMBRE</label>
              <input class="input_flotante" required name="nombre" style="color: #b09f61" type="text"><br>
              <label class="form_titulo">CORREO</label>
              <input class="input_flotante" name="correo" required style="color: #b09f61" type="email"><br>
              <label class="form_titulo">CELULAR</label>
              <input class="input_flotante" required name="celular"  style="color: #b09f61" type="text"><br>
              <label class="form_titulo">No. PERSONAS</label>
              <input class="input_flotante" required name="personas"  style="color: #b09f61" type="text"><br>
              <label class="form_titulo">FECHA</label>
              <input class="input_flotante" required name="fecha"  style="color: #b09f61" type="date"><br>

              <label class="form_titulo">¿CELEBRAS ALGO?</label>
              <input class="input_flotante" name="celebras"  style="color: #b09f61" type="text"><br>

              <br>
              <center><input class="enviar_flotante" type="submit"  value="CONFIRMAR" onClick="validate()"></center>
          </form>
  </div>  <!-- Cierre Div.(ventana)  -->
