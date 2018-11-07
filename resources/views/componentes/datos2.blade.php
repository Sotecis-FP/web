
<!-- <form class="form_master" > -->
<!-- <img class="img-reserva" src="images/My_name_is_home_reservas.png" alt="my name is colombia">
<div class="caja-reserva-texto">
  <h2 class="texto-reserva">RESERVA YA!</h2>
  <input type="submit" class="btn-reservar"  onclick="openVentana()"  value="RESERVAR">
</div> -->
<!-- </form> -->

<!-- Formulario flotante -->
<div class="ventana_flotante_form2">
          <form class="form_registro"  action="#">

            {{ csrf_field() }}
              <a href="javascript:closeVentana();"  ><p onclick="closeVentana2()" class="cerrar_form">X</p></a>
              <p class="titulo_formulario">
                  INFORMACIÓN DEL COMPRADOR
              </p>
              <br>

              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">NOMBRE</label>
                    <input type="text" required class="form-control in" id="nombret" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">TELÉFONO</label>
                    <input type="text" required class="form-control in" id="telefonot" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">CORREO</label>
                    <input type="email" required class="form-control in" id="correot" name="correo" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">DIRECCIÓN</label>
                    <input type="text" required class="form-control in" id="direcciont" name="direccion" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">FECHA</label>
                    <input type="date"  class="form-control in" id="fechat" name="fechat" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">HORA</label>
                    <input type="time"  class="form-control in" id="horat" name="horat" placeholder="">
                  </div>
              </div>


              <div class="col-md-6">
                <br>
                <center><input class="enviar_flotante" type="button" id="btn-form2"  value="CONTINUAR"></center>
              </div>
              <!-- <label class="form_titulo">NOMBRE</label>
              <input class="input_flotante" required name="nombre" style="color: #b09f61" type="text"><br>
              <label class="form_titulo">CORREO</label>
              <input class="input_flotante" name="correo" required style="color: #b09f61" type="email"><br>
              <label class="form_titulo">CELULAR</label>
              <input class="input_flotante" required name="celular"  style="color: #b09f61" type="text"><br>
              <label class="form_titulo">No. PERSONAS</label>
              <input class="input_flotante" required name="personas"  style="color: #b09f61" type="text"><br> -->


          </form>
  </div>  <!-- Cierre Div.(ventana)  -->
