
  <!--    ////////////////// SEGUNDO MODAL //////////////////////   -->

  <!-- Modal de Crear y Editar Subtemas -->
  <div class="modal fade" id="ventana2">
    <div class="modal-dialog">

      <!-- contenido del modal -->
      <div class="modal-content">

        <!-- header del modal  -->
        <div class="modal-header modal_titulo">
          <strong>Modificar/Crear Subtema</strong>
          <button type="button" class="btn btn-light close crrar" data-dismiss="modal" aria-label="Close">x</button>
        </div>

        <!-- body del modal -->
        <div class="modal-body">
          <div class="opciones">

            <!-- opcion 1 -->
            <div class="opcion opcion_1">
              <strong>Crear</strong>
            </div>

            <!-- opcion 2 -->
            <div class="opcion opcion_2">
              <strong>Modificar</strong>
            </div>
          </div>

          <!-- primera ventana del modal #2 -->
          <div class="crear vista vista1">
            <div class="contenedor_vertemas cont1">
              <form>
              <strong>Seleccione tema</strong>
              <select id="vertemas2" class="vertemas" name="">
                <option value="">-----------</option>
              </select>
            </div>

            <div class="contenedor_modificacion2 cont2">
              <div class="txt">
                <strong>Agrege<br/> Nuevo tema</strong>
              </div>
              <input type="text" name="crear_sbtema" class="formu" id="c_sbtema" value=""><br/><br/>
            </form>
            </div>
          </div>

          <!-- segunda ventana del modal #2 -->
          <div class="modificar vista vista2">
            <div class="cont1">
              <form>
              <strong>Seleccione tema</strong>
              <select id="vertemas3" class="vertemas" name="seleccionar_tema">
                <option value="">-----------</option>
              </select>
            </form>
            </div>

            <div class="versubtemas cont2">
              <div class="txt">
                <strong class="">Seleccione<br>subtema</strong>
              </div>
              <div class="cc">
                <form>
                <select id="versubtemas" class="versubtemas_opt formu" name="">
                  <option value="">-----------</option>
                </select>
                </form>
              </div>
            </div>

            <div class="modificar_subtema cont2">
              <div class="txt">
              <form>
              <strong class="">Agregue<br/>modicicacion</strong>
              </div>
              <input class=" formu" id="modificar_subtema" type="text" name="" value="">
              </form>
            </div>
          </div>
        </div>

        <!-- footer del modal -->
        <div class="modal-footer">
          <button type="button" name="button" class="btn btn-dark vista vista1" id="sbcrear">crear</button>
          <button type="button" name="button" class="btn btn-dark vista vista2" id="sbactualizar">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
