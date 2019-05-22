
<!--    ////////////////// PRIMER MODAL //////////////////////   -->

<!-- Modal de Crear y Editar temas -->
<div class="modal fade" id="ventana1">
  <div class="modal-dialog">

    <!-- contenido del modal -->
    <div class="modal-content">

      <!-- header del modal #1 -->
      <div class="modal-header modal_titulo">
         <h4>Modificar/Crear Tema</h4>
         <button type="button" class="btn btn-light close crrar" data-dismiss="modal" aria-label="Close">x</button>
      </div>

      <!-- body del modal #1 -->
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

        <!-- primera ventana del modal #1 -->
        <div class="crear vista vista1">
          <div class="contenedor_temanuevo">
            <form>
            <strong>Agrege nuevo tema</strong>
            <input type="text" name="crear_tema" class="formu c_tema" id="c_tema" value=""><br/><br/>
          </div>
            <div class="contenedor_color">
              <strong>Seleccione color</strong>
            <input type="text" class="disabled color_input" name="item1" value="#9b59b6" disabled>
            <div class="picker"></div>
            <form>
          </div>
        </div>

        <!-- segunda ventana del modal #1 -->
        <div class="modificar vista vista2">
          <div class="contenedor_vertemas cont1">
            <form>
            <strong>Seleccione Tema</strong>
            <select id="vertemas" class="vertemas" name="seleccionar_tema">
              <option value="">-----------</option>
            </select>
          </div>

          <div class="contenedor_modificacion cont2">
            <div class="txt">
              <strong>Agregue<br/> modificacion</strong>
            </div>
            <input type="text" name="modal_tema" class="formu a_tema" id="a_tema" value=""><br>
          </form>
          </div>
        </div>
      </div>

      <!-- footer del modal #1-->
      <div class="modal-footer">
        <button type="button" name="button" class="sub btn btn-dark vista vista1" id="crear"><strong>crear</strong> </button>
        <button type="button" name="button" class="sub btn btn-dark vista vista2 " id="actualizartema"><strong>Actualizar</strong> </button>
      </div>

    </div>

  </div>

</div>
