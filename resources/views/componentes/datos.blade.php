
<!-- <form class="form_master" > -->
<!-- <img class="img-reserva" src="images/My_name_is_home_reservas.png" alt="my name is colombia">
<div class="caja-reserva-texto">
  <h2 class="texto-reserva">RESERVA YA!</h2>
  <input type="submit" class="btn-reservar"  onclick="openVentana()"  value="RESERVAR">
</div> -->
<!-- </form> -->

<!-- Formulario flotante -->
<div class="ventana_flotante_form">
          <form id="myForm" class="form_registro" action="#"   >
            {!!csrf_field()!!}

              <a href="javascript:closeVentana();"  ><p onclick="closeVentana()" class="cerrar_form">X</p></a>
              <p class="titulo_formulario">
                  INFORMACIÓN DEL COMPRADOR
              </p>
              <br>

              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">NOMBRE</label>
                    <input required type="text" class="form-control in" id="nombre" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">TELÉFONO</label>
                    <input required type="text" class="form-control in" id="telefono" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">CORREO</label>
                    <input  type="text" class="form-control in" id="correo" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">DIRECCIÓN</label>
                    <input required type="text" class="form-control in" id="direccion" placeholder="">
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">BARRIO</label>
                    <input type="text" class="form-control in" id="barrio" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">RECIBE</label>
                    <input required type="text" class="form-control in" id="recibe" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">FECHA</label>
                    <input required type="date" class="form-control in" id="fecha" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="">HORA</label>
                    <input type="time" class="form-control in" id="hora" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                <br>
                <center><input class="enviar_flotante" type="button" id="btn-form"  value="CONTINUAR" ></center>
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
