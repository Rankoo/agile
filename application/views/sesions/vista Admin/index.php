
  <!-- Verifica que el usuario que este logueado tenga el roll de administrador si no lo debuelve al login -->
  <?php session_start(); if ($_SESSION['cargo'] != 'admin') {    header('location:'.base_url('index.php/login'));} ?>
  <!-- Submenu -->
  <div id="menu_modal">
      <div id="modal_1" class="menu_m">
          <h1 id="titulo2">Options</h1>
      </div>

      <div id="modal_2">
          <ul class="list-group">
              <a href="#ventana1"  data-toggle="modal"><li class="list-group-item mo" data-toggle="modal" >Modificar/Crear Tema</li></a>
              <a href="#ventana2"  data-toggle="modal"><li class="list-group-item mo" data-toggle="modal" >Modificar/Crear Subtema</li></a>
              <a href="#ventana3"  data-toggle="modal"><li class="list-group-item mo" data-toggle="modal" >Eliminar Tema/Subtema</li></a>
              <a href="#ventana4"  data-toggle="modal"><li class="list-group-item mo" data-toggle="modal" >Gestion de contenidos</li></a>
              <a href="<?php echo(base_url('index.php/login/salida'));?>"><li class="list-group-item mo salir" >Salir</li></a>
          </ul>
      </div>
  </div>
  <!-- -->
  <!-- Subtemas cuando el menu esta comprimido -->
  <div id="subtemas_comprimidos">
    <h1 id="titulo2">Subtemas</h1>
    <div class="cont_subtemas">
      <ul id="lista_comprimida">

      </ul>
    </div>
  </div>

  <!-- Toda la ventana -->
  <div class="" id="global">

    <!-- Columna izquierda -->
    <div class="" id="contenedor">

      <!-- Parte extendida -->

      <!-- Titulo -->
      <div class="asdf">
        <h3>Temas</h3>
      </div>
      <!-- Temas -->
      <div class = "asd anclas1" id="">
      </div>

      <!-- Subtemas -->
      <div class="as sbtemas" id="">
      </div>

      <!-- Parte contraida -->

      <div class="temas_contraido">
      </div>

    </div>

    <!-- Header -->
    <header>
      <div class="ripple ir" id="menu_themes">
        <img id="ir" src="<?= base_url('assets/imagenes/menu_themes.png');?>" alt="">
        <img id="volver" src="<?= base_url('assets/imagenes/flecha_izquierda.png');?>" alt="">
      </div>
      <div id="cont_titulo">
          <h1 id="titulo">Agile project management</h1>
      </div>
      <div class="menu_m ripple" id="ajustes">
        <img src="<?= base_url('assets/imagenes/ajustes.png');?>" alt="">
      </div>
    </header>

    <div class="clearfix"></div>

  </div>

    <!-- Columna derecha -->
    <div class=" template">
      <div id="arriba">

      </div>
        <div class="comentarios">
          <div class="cabecera-comentarios">
            <button type="button" class="btn expandir_comentarios" name="">
              <strong><h5>^</h5></strong>
            </button>
          </div>
          <div class="texto">
          </div>
        </div>
    </div>
