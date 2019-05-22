
  <!--    ////////////////// CUARTO MODAL //////////////////////   -->


  <!-- Gestion de contenidos -->
  <div class="modal fade" id="ventana4">
    <div class="modal-dialog">

      <!-- contenido del modal -->
      <div class="modal-content">

        <!-- header del modal  -->
        <div class="modal-header modal_titulo">
          <strong>Eliminar Tema/Subtema</strong>
          <button type="button" class="btn btn-light close crrar" data-dismiss="modal" aria-label="Close">x</button>
        </div>

        <!-- body del modal -->
        <div class="modal-body">
          <div class="opciones">

            <!-- opcion 1 -->
            <div class="opcion opcion_1">
              <strong>Texto</strong>
            </div>

            <!-- opcion 2 -->
            <div class="opcion opcion_2">
              <strong>Imagen</strong>
            </div>
          </div>

          <!-- Primera ventana del modal #4 -->
          <div class="xs vista vista1 cont_comentario ">

            <!-- Acciones de las ventanas secundarias de la Primera ventana del modal #4 -->
            <div class="acciones cont1">
              <div class="txt">
                <p>Seleccione<br>accion:</p>
              </div>
              <form>
              <select class="formu select_action" name="">
                <option value="">--------</option>
                <option value="1">crear</option>
                <option value="2">Modificar</option>
                <option value="3">Eliminar</option>
              </select>
              </form>
            </div>

            <!-- Primera ventana secundaria de la Primera ventana del modal #4 -->
            <div class="select_1 no_display">
              <form>
                <div class="cont1">
                  <div class="txt">
                    <strong>Seleccione<br>tema</strong>
                  </div>
                  <select id="vertemas6" class="vertemas" name="">
                    <option value="">-----------</option>
                  </select>
                </div>
                <div class="cont1">
                  <div class="txt">
                    <strong>Seleccione<br>subtema</strong>
                  </div>
                  <select id="versubtemas4" class="versubtemas_opt formu" name="seleccionar_subtema">
                    <option value="">-----------</option>
                  </select>
                </div>
                <p>Escriba su texto: </p>
              <textarea type="text" name="" id="textoNuevo" value="" class="formu" style="width:100%;"></textarea>
              </form>
            </div>

            <!-- Segunda ventana secundaria de la Primera ventana del modal #4 -->
            <div class="select_2 no_display">
              <form>
                <div class="cont1">
                  <div class="txt">
                    <strong>Seleccione<br>tema</strong>
                  </div>
                  <select id="vertemas7" class="vertemas" name="">
                    <option value="">-----------</option>
                  </select>
              </div>
              <div class="cont1">
                <div class="txt">
                  <strong>Seleccione<br>subtema</strong>
                </div>
                <select id="versubtemas5" class="versubtemas_opt  formu" name="seleccionar_subtema">
                  <option value="">-----------</option>
                </select>
              </div>
              <p>Escriba su texto: </p>
              <textarea  type="text" class="formu" id="modificacion" name="" value="" style="width:100%;"></textarea>
              </form>
            </div>

            <!-- Tercera ventana secundaria de la Primera ventana del modal #4 -->
            <div class="select_3 no_display">
              <form>
                <div class="cont1">
                  <div class="txt">
                    <strong>Seleccione<br>tema</strong>
                  </div>
                  <select id="vertemas8" class="vertemas" name="">
                    <option value="">-----------</option>
                  </select>
                </div>
                <div class="cont1">
                  <div class="txt">
                    <strong>Seleccione<br>subtema</strong>
                  </div>
                  <select id="versubtemas6" class="versubtemas_opt  formu" name="seleccionar_subtema">
                    <option value="">-----------</option>
                  </select>
                </div>
              </form>
            </div>
          </div>

          <!-- Segunda ventana del modal #4 -->
          <div class="xs vista vista2 cont_imagen ">

            <!-- Acciones de las ventanas secundarias de la Segunda ventana del modal #4 -->
            <div class="acciones cont1">
              <form>
                <div class="txt">
                  <p>Seleccione<br>accion:</p>
                </div>
              <select class="formu select_action" name="">
                <option value="">--------</option>
                <option value="4">Agregar</option>
                <option value="5">Eliminar</option>
              </select>
              </form>
            </div>

            <!-- Primera ventana secundaria de la Segunda ventana del modal #4 -->
            <div class="select_4 no_display">
              <form method="post" enctype="multipart/form-data" id="imagenesSlide" action="<?php echo(base_url('index.php/welcome/insertar_imagenes'));?>">
                <div class="cont1">
                  <div class="txt">
                    <strong>Seleccione tema</strong>
                  </div>
                  <select id="vertemas5" class="vertemas" name="">
                    <option value="">-----------</option>
                  </select>
                </div>
                <div class="cont1">
                  <div class="txt">
                    <strong>Seleccione subtema</strong>
                  </div>
                  <select id="versubtemas3" class="versubtemas_opt formu" name="versubtemas3">
                    <option value="">-----------</option>
                  </select>
                </div>
                <input type="file" name="file" id="file" class="inputfile inputfile-4 hidden" data-multiple-caption="{count} files selected"/>
                <label for="file" class="label-file"><span>Seleccione archivo</span></label>
                <button class="btn btn-light" id="" type="submit" style="height:auto;"><span class="ko">Subir Archivo</span></button>
              </form>
            </div>

            <!-- Segunda ventana secundaria de la Segunda ventana del modal #4 -->
            <div class="select_5 no_display">
              <form>
                <div class="cont1">
                  <div class="txt">
                      <p>Seleccione<br>Tema:</p>
                  </div>
                  <select id="vertemas9" class="vertemas" name="">
                    <option value="">-----------</option>
                  </select>
                </div>
                <div class="cont1">
                  <div class="txt">
                    <p>Seleccione<br>Subtema:</p>
                  </div>
                  <select id="versubtemas7" class="versubtemas_opt formu" name="seleccionar_subtema">
                    <option value="">-----------</option>
                  </select>
                </div>
                <div class="cont1">
                  <div class="txt">
                    <p>Seleccione<br>ruta:</p>
                  </div>
                  <select class="verimagen formu no_display" id="verimagen">
                    <option value="">-----------</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- footer del modal -->
        <div class="modal-footer">
          <button type="button" name="button" class="btn btn-dark select_1 no_display" id="crearTexto" >Crear Texto</button>
          <button type="button" name="button" class="btn btn-dark select_2 no_display" id="editarTexto" >Modificar Texto</button>
          <button type="button" name="button" class="btn btn-dark select_3 no_display" id="borrarTexto" >Eliminar Texto</button>
          <button type="button" name="button" class="btn btn-dark select_4 no_display" id="" >Insertar Imagen</button>
          <button type="button" name="button" class="btn btn-dark select_5 no_display" id="borrarImagen" >Eliminar Imagen</button>
        </div>
      </div>
    </div>
  </div>
