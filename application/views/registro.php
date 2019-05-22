
    <div class="login_titulo">
      <h1 id="login_titulo">Agile project management</h1>
    </div>
    <div id="login_contenedor" style="height: 520px; margin: 3% !important;">
      <img id="login_imagen_fondo" src="<?php echo(base_url('assets/imagenes/login.jpg'));?>" alt="">
      <h4 style="text-align:center;">Registro</h4>
      <form class="" id="registro_usuarios" action="registro/create" method="post">

        <label for="nombre"><h6>Nombres</h6></label>
        <input type="text" data-validetta="required" class="formu" name="nombre" value="" />
        <br/>
        <label for="apellido"><h6>Apellido</h6></label>
        <input type="text" data-validetta="required" class="formu" name="apellido" value="" />
        <br/>
        <label for="email"><h6>E-mail</h6></label>
        <input type="text" data-validetta="required,email" class="formu" name="email" value="" />
        <br/>
        <label for="contrasena"><h6>contraseña</h6></label>
        <input type="password" data-validetta="required,equalTo[contrasena2]" class="formu" name="contrasena" value="" />
        <br/>
        <label for="contrasena2"><h6>confirmar contraseña</h6></label>
        <input type="password" data-validetta="required,equalTo[contrasena]" class="formu" name="contrasena2" value="" />
        <br/>
        <button type="submit" class="btn btn-light" name="button" style="margin-top: 15px; width:-webkit-fill-available;">Registrar</button><br/>
        <p style="color:white;">ya tienes cuenta? <a href="<?php echo (base_url('index.php/login')); ?>" >Registrate</a></p>

      </form>
</div>
    <script type="text/javascript">
        $('#cargo').on('keydown',function(e) {
          console.log( );
          if (e.keyCode) {

          }
        })
    </script>
