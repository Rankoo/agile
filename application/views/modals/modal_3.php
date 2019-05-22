
  <!--    ////////////////// TERCER MODAL //////////////////////   -->

  <!-- Eliminar tema/subtema -->
  <div class="modal fade" id="ventana3">
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
              <strong>Tema</strong>
            </div>

            <!-- opcion 2 -->
            <div class="opcion opcion_2">
              <strong>Subtema</strong>
            </div>
          </div>

          <!-- Mensaje sobre el borrado de temas -->
          <div class="mensaje_temas">
              <h5>Tenga en cuenta que si elimina un tema equivaldra a la eliminacion a todos los subtemas y el contenido relacionado a este</h5>
          </div>

          <!-- Primera ventana del modal #3 -->
          <div class="eliminar_temas vista vista1">
            <form>
            <strong>Seleccione tema</strong>
            <select id="vertemas4" class="vertemas" name="">
              <option value="">-----------</option>
            </select>
          </form>
          </div>

          <!-- Segunda ventana del modal #3 -->
          <div class="eliminar_subtemas vista vista2">
            <div class="cont1">
              <form>
              <strong>Seleccione tema</strong>
              <select id="vertemas_eliminar" class="vertemas" name="seleccionar_tema">
                <option value="">-----------</option>
              </select>
            </div>

            <div class="versubtemas cont2">
              <div class="txt">
                <strong class="">Seleccione<br>subtema</strong>
              </div>
              <select id="versubtemas2" class="versubtemas_opt  formu" name="">
                <option value="">-----------</option>
              </select>
              </form>
            </div>
          </div>
        </div>

        <!-- footer del modal -->
        <div class="modal-footer">
          <button type="button" name="button" class="btn btn-dark vista vista1" id="borrartema">Eliminar Tema</button>
          <button type="button" name="button" class="btn btn-dark vista vista2 " id="borrarsubtema">Eliminar Subtemas</button>
        </div>
      </div>
    </div>
  </div>
