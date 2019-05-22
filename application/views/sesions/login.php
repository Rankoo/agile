
<?php  if (!empty($_SESSION['cargo'])) {
  header('location:'.base_url('index.php/Welcome/index_'.$_SESSION['cargo']));
} ?>


<div id="login_fondo">
  <img id="login_imagen_fondo" src="<?php echo(base_url('assets/imagenes/login2.jpg'));?>" alt="">

  <div class="login_titulo">
    <h1 id="login_titulo">Agile project management</h1>
  </div>
  <div id="login_contenedor">
    <h4 style="text-align:center;">Log-in</h4>
    <form class="" id="login_formu" action="<?php echo(base_url('index.php/login/ingreso'));?>" method="post">

      <div class="">
        <label for="usuario"><h6>Correo</h6></label><br/>
        <input type="text" data-validetta="required,email" class="formu" id="login_correo" name="usuario" value="" placeholder="usuario"/><br/>
      </div>
      <div class="">
        <label for="contrasena"><h6>Contraseña</h6></label><br/>
        <input type="password" data-validetta="required" class="formu" name="contrasena" value="" placeholder="contraseña"><br/>
      </div>
      <p id="login_mensaje_contrasena">olvidaste la contraseña? <a href="#">recuperar contraseña</a> </p>

      <button type="submit" id="login_submit" class="btn btn-light" name="button" style="margin-top: 15px; width:-webkit-fill-available;">Enviar</button><br/>
      <p style="color:white;">No tienes cuenta? <a href="<?php echo (base_url('index.php/registro')); ?>" >Registrate</a></p>
    </form>
    <br>
  </div>
</div>
