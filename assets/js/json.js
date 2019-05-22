`use strict`

//Funcion de cargar
$(document).ready(function(){


//Esquema
  var objeto = {

    //Inicializa las funciones escritas en este atributo
    init:function(){
      objeto.mostrartema();
      objeto.events();
    },
    //Aqui van las funciones que se activan por medio de eventos
    events:function(){
      // ---------------EVENTOS GLOBALES--------------

      //---------------------------------------
      $(`.vertemas`).change(function(){
        $.post(base_url+`/index.php/welcome/act_subtemas2`,
        {tema_seleccionado : $(this).val()},
        function(data){
          var obj = JSON.parse(data);
          $(`.versubtemas`).css(`display`,`block`);
          $(`.opcion_subtema`).remove();
          for (var i = 0; i < obj.length; i++) {
            $(`.versubtemas_opt`).append( `<option class="opcion_subtema" value="${obj[i].id_subtema}">${obj[i].subtema}</opption>`);
          }
        }
      )
      });

      // ---------------EVENTOS DEL MODAL #1--------------

      // Peticion AJAX de la primera ventana del modal #1
      $(`#crear`).click(function(){
        let dato = $(`#c_tema`).val();
        let val = validacion1(dato);
        if (val == false) {
          return;
        }
        $.post(
          base_url+`/index.php/welcome/guardar`,
          { nombre : $(`#c_tema`).val(), color : $(`.color_input`).val().slice(1) },
          function(data){
            location.reload();
          }
        )
      });

      // Peticion AJAX de la segunda ventana del modal #1
      $('#vertemas').change(function(){
        $(`.contenedor_modificacion`).css(`display`,`block`);
        $(`#actualizartema`).click(function(){
          let dato = $(`#a_tema`).val();
          let dato2 = $(`#vertemas`).val();
          let val = validacion1(dato);
          let val2 = validacion1(dato2)
          if (val == false || val2 == false ) {
            return;
          }
          $.post(
            base_url+`/index.php/welcome/actualizartema`,
            { tactualizado : $(`#a_tema`).val(), tema : $(`#vertemas`).val() },
            function(){
              location.reload();
            }
          )
        });
      });



      // ---------------EVENTOS DEL MODAL #2--------------

      // Peticion AJAX de la primera ventana del modal #2
      $(`#vertemas2`).change(function(){
        $(`.contenedor_modificacion2`).css(`display`,`block`);
        $(`#sbcrear`).click(function(){
          let dato = $(`#c_sbtema`).val();
          let dato2 = $(`#vertemas2`).val();
          let val = validacion1(dato);
          let val2 = validacion1(dato2)
          if (val == false || val2 == false ) {
            return;
          }
          $.post(
            base_url+`/index.php/welcome/guardarsubtema`,
            {sbtema : $(`#c_sbtema`).val(), tema : $(`#vertemas2`).val()},
            function(data) {
              var obj = JSON.parse(data);
              console.log(obj);
              location.reload();
            }
          )
        });
      });

      // Peticion AJAX de la segunda ventana del modal #2
      $(`#sbactualizar`).click(function(){
        let dato = $(`#versubtemas`).val();
        let dato2 = $(`#modificar_subtema`).val();
        let val = validacion1(dato);
        let val2 = validacion1(dato2)
        if (val == false || val2 == false ) {
          return;
        }
        $.post(
          base_url+`/index.php/welcome/actualizar_subtemas`,
          {tema_seleccionado : $(`#versubtemas`).val(),subtema : $(`#modificar_subtema`).val()},
          function(){
            location.reload();
          }
        )
      });

      // Muestra el tercer input de la segunda ventana del modal #2
      $(`#versubtemas`).change(function(){
        $(`.modificar_subtema`).css(`display`,`block`);
      });

      // Oculta el tercer input de la segunda ventana del modal #2 si el primer input es cambiado
      $(`#vertemas3`).change(function(){
        $(`.modificar_subtema`).css(`display`,`none`);
      });


      // ---------------EVENTOS DEL MODAL #3--------------

      // Peticion AJAX de la primera ventana del modal #3
      $(`#borrartema`).click(function(){
        let dato = $(`#vertemas4`).val();
        let val = validacion1(dato);
        if (val == false ) {
          return;
        }
        $.post(
          base_url+`/index.php/welcome/borrartema`,
          {tema_seleccionado : $(`#vertemas4`).val()},
          function(){
            location.reload();
          }
        )
      });

      // Peticion AJAX de la segunda ventana del modal #3
      $(`#borrarsubtema`).click(function(){
        let dato = $(`#versubtemas2`).val();
        let val = validacion1(dato);
        if (val == false ) {
          return;
        }
        $.post(
          base_url+`/index.php/welcome/borrarsubtema`,
          {subtema_seleccionado : $(`#versubtemas2`).val()},
          function(){
            location.reload();
          }
        )
      });

      // ---------------EVENTOS DEL MODAL #4--------------


      // Peticion AJAX de la primera ventana secundaria de la primera ventana del modal #4
      $(`#crearTexto`).click(function(){
        let dato = $(`#versubtemas4`).val();
        let dato2 = $(`#textoNuevo`).val();
        let val = validacion1(dato);
        let val2 = validacion1(dato2)
        if (val == false || val2 == false ) {
          return;
        }
        $.post(base_url+`/index.php/welcome/crearTexto`,
          {subtema_seleccionado : $(`#versubtemas4`).val(), texto : $(`#textoNuevo`).val()},
          function($data){
            location.reload();
          }
        )
      });

      // Peticion AJAX de la segunda ventana secundaria de la primera ventana del modal #4
      $(`#editarTexto`).click(function(){
        let dato = $(`#versubtemas5`).val();
        let dato2 = $(`#modificacion`).val();
        let val = validacion1(dato);
        let val2 = validacion1(dato2)
        if (val == false || val2 == false ) {
          return;
        }
        $.post(base_url+`/index.php/welcome/modificarTexto`,
          {subtema_seleccionado : $(`#versubtemas5`).val(), texto : $(`#modificacion`).val()},
          function($data){
            location.reload();
          }
        );
      });

      // Peticion AJAX de la tercera ventana secundaria de la primera ventana del modal #4
      $(`#borrarTexto`).click(function(){
        let dato = $(`#versubtemas6`).val();
        let val = validacion1(dato);
        if (val == false ) {
          return;
        }
        $.post(base_url+`/index.php/welcome/eliminarTexto`,
          {texto_seleccionado : $(`#versubtemas6`).val()},
          function($data){
            location.reload();
          }
        );
      });

      //Peticion AJAX para retornar una lista con imagenes de la db
      $(`#versubtemas7`).change(function(){
        $.post(base_url+`/index.php/welcome/mostrarImagenes`,
          {subtema_seleccionado : $(`#versubtemas7`).val()},
          function(data){
            $(`.verimagen`).css(`display`,`block`);
            var obj = JSON.parse(data);
            for (var i = 0; i < obj.length; i++) {
            $(`.verimagen`).append(`<option value="${obj[i].id_imagen}" class="opcion_imagen" data-imagen="${obj[i].imagen}">${obj[i].imagen}</opption>`);
          }
        });
      });

      // Peticion AJAX de la segunda ventana secundaria de la segunda ventana del modal #4
      $(`#borrarImagen`).click(function(){
        let dato = $(`#verimagen`).val();
        let dato2 = $(imagen).val();
        let val = validacion1(dato);
        let val2 = validacion1(dato2)
        if (val == false || val2 == false ) {
          return;
        }
        var boton = document.querySelector(`.opcion_imagen`);
        var imagen = boton.dataset.imagen;
        $.post(base_url+`/index.php/welcome/borrarImagen`,
        {imagen_seleccionada : $(`#verimagen`).val(), ruta : imagen },
        function(){
          location.reload();
        }
        )
      });

      //---------------------------------------
      //---------------------------------------
      //---------------------------------------
      //---------------------------------------
      //---------------------------------------
      //---------------------------------------
    },

    // Peticion AJAX de la lista de temas
    mostrartema: function(){
      $.post(
        base_url+`/index.php/welcome/temamas`,
        { },
        function(data){
          var obj = JSON.parse(data);
          console.log(obj);
          console.log(obj.length);
          for (var i = 0; i < obj.length; i++) {
            var jojo = i+1;
            $(`.vertemas`).append( `<option value="${obj[i].id_tema}">${obj[i].tema}</opption>`);
            $(`.anclas1`).append(`<button class="boton" id="${obj[i].id_tema}" data-datos="#${obj[i].color}">${obj[i].tema}</button><br>`);
            $(`.temas_contraido`).append(`<div class="contenedor_contraido"><img id="contraido_${obj[i].id_tema}" data-hover="${obj[i].color}" title="${obj[i].tema}" src="${base_url}assets/imagenes/themes/theme_base.png" /> </div>`);
            $(document).tooltip();
          }
          mostrarsbt();
          mostrarsbt_comprimido();
          $(`.boton`).click(function(){
            const boton = event.target;
            var color = boton.dataset.datos;
            var hover = color.slice(1);
            var id = $(this).attr(`id`);
            console.log(id);
            console.log(hover);
            limpiar();
            $(this).addClass(`en_foco`);
            $(`.en_foco`).css(`color`,color);
            $(`#contraido_${id}`).addClass(`en_hover`);
            $(`#contraido_${id}`).attr('src',`${base_url}assets/imagenes/themes/theme_${hover}.png`)
          });

          $(`.contenedor_contraido img`).click(function(){
            const boton = event.target;
            var color = boton.dataset.hover;
            var id = $(this).attr(`id`).substring(10);
            limpiar();
            $(`#${id}`).addClass(`en_foco`);
            $(`.en_foco`).css(`color`,'#'+color);
            $(this).addClass(`en_hover`);
            $(this).attr('src',`${base_url}assets/imagenes/themes/theme_${color}.png`)
          });

          $(`.boton`).hover(function(){
            const boton = event.target;
            var color = boton.dataset.datos;
            $(this).css(`color`,color)
          },function(){
            if (!$(this).hasClass(`en_foco`)) {
              $(this).css(`color`,`white`);
            }
          });

          $(`.contenedor_contraido img`).hover(function(){
            const boton = event.target;
            var color = boton.dataset.hover;
            $(this).attr('src',`${base_url}assets/imagenes/themes/theme_${color}.png`)
          },function(){
            if (!$(this).hasClass(`en_hover`)) {
              $(this).attr('src',`${base_url}assets/imagenes/themes/theme_base.png`)
            }
          });

        }
      );
    }
  }
objeto.init();
});

function mostrarsbt_comprimido(){
  $(`.contenedor_contraido img`).click(function(){
    var id = $(this).attr(`id`).substring(10);
    $.post(
      base_url+`/index.php/welcome/mostrarsubtemas`,
      {id_tema : id},
      function(data){
        var obj = JSON.parse(data);
        $(`.datos`).hide();
        $(`.datos`).remove();
        $(`#subtemas_comprimidos`).show(`slow`);
        for (var i = 0; i < obj.length; i++) {
          $(`.sbtemas`).append(`
            <li class="list-group-item datos" id="${obj[i].id_tema}" data-color="#${obj[i].color}" data-texto="${obj[i].id_subtema}">${obj[i].subtema}</li>
          `);

          $(`#lista_comprimida`).append(`
            <li class="list-group-item datos" id="${obj[i].id_tema}" data-color="#${obj[i].color}" data-texto="${obj[i].id_subtema}">${obj[i].subtema}</li>
            `);

        }

        $(`.sbtemas`).css(`display`,`none`);
        $(`.datos`).click(function(){
          const boton = event.target;
          var color = boton.dataset.color;
          limpiarsbt();
          $(this).addClass(`enFoco`);
          $(`.enFoco`).css(`background-color`,color);
          $(`.enFoco`).css(`color`,`white`);
          const botton = event.target;
          var texto = botton.dataset.texto;
          $.post(
            base_url+`/index.php/welcome/mostrarImagenes`,
            {subtema_seleccionado : texto},
            function (data){
              var obj = JSON.parse(data);
              $(`.imagen_pantalla`).remove();
              $(`.visor`).remove();
              $(`#arriba`).append(`
                 <div class="visor fotorama" id="fotorama" data-nav="thumbs" data-allowfullscreen="native" data-auto="false" data-width="750"
                 data-height="350">
                 </div>
              `)
              $.post(
                base_url+`/index.php/welcome/texto`,
                {subtema_seleccionado : texto},
                function(data){
                  var obj = JSON.parse(data);
                  $(`.texto_pantalla`).remove();
                  $(`.comentarios`).css(`display`,`block`);
                  for (var i = 0; i < obj.length; i++) {

                    $(`.cabecera-comentarios`).append(`<p class="texto_pantalla" style="color:white;" >${obj[i].subtema}</p>`);
                    $(`.texto`).append(`<p class="texto_pantalla">${obj[i].comentario}</p>`);
                  }
                }
              );
              for (var i = 0; i < obj.length; i++) {
               console.log(base_url+obj[i].imagen);
              $(`.visor`).append(`<img class="imagen_pantalla fotorama__img" src=" ${base_url+obj[i].imagen}" alt="${obj[i].id_imagen}">`);
            }
            $(`.visor`).hasClass(`fotorama`);
            $('.fotorama').fotorama();
            }
          )
          $(`.cabecera-comentarios`).css(`background-color`,color);
        });
        $(`.datos`).hover(function(){
          const boton = event.target;
          var color = boton.dataset.color;
          $(this).css(`background-color`,color)
        },function(){
          if (!$(this).hasClass(`enFoco`)) {
            $(this).css(`background-color`,`white`);
          }
        });
      }
    )

  });
}

// Complemento de la funcion "mostrartema", para que al seleccionarla salgan los subtemas correspondientes
function mostrarsbt(){
  $(`.boton`).click(function(){
    var id = $(this).attr(`id`);
    $.post(
      base_url+`/index.php/welcome/mostrarsubtemas`,
      {id_tema : id},
      function(data){
        var obj = JSON.parse(data);
        $(`.datos`).remove();
        for (var i = 0; i < obj.length; i++) {
          $(`.sbtemas`).append(`
            <li class="list-group-item datos" id="${obj[i].id_tema}" data-color="#${obj[i].color}" data-texto="${obj[i].id_subtema}">${obj[i].subtema}</li>
          `);
        }
        $(`.datos`).click(function(){
          const boton = event.target;
          var color = boton.dataset.color;
          limpiarsbt();
          $(this).addClass(`enFoco`);
          $(`.enFoco`).css(`background-color`,color);
          $(`.enFoco`).css(`color`,`white`);
          const botton = event.target;
          var texto = botton.dataset.texto;
          $.post(
            base_url+`/index.php/welcome/mostrarImagenes`,
            {subtema_seleccionado : texto},
            function (data){
              var obj = JSON.parse(data);
              $(`.imagen_pantalla`).remove();
              $(`.visor`).remove();
              $(`#arriba`).append(`
                 <div class="visor fotorama" id="fotorama" data-nav="thumbs" data-allowfullscreen="native" data-auto="false" data-width="750"
                 data-height="350">
                 </div>
              `)
              $.post(
                base_url+`/index.php/welcome/texto`,
                {subtema_seleccionado : texto},
                function(data){
                  var obj = JSON.parse(data);
                  $(`.texto_pantalla`).remove();
                  $(`.comentarios`).css(`display`,`block`);
                  for (var i = 0; i < obj.length; i++) {

                    $(`.cabecera-comentarios`).append(`<p class="texto_pantalla" style="color:white;" >${obj[i].subtema}</p>`);
                    $(`.texto`).append(`<p class="texto_pantalla">${obj[i].comentario}</p>`);
                  }
                }
              );
              for (var i = 0; i < obj.length; i++) {
               console.log(base_url+obj[i].imagen);
              $(`.visor`).append(`<img class="imagen_pantalla fotorama__img" src=" ${base_url+obj[i].imagen}" alt="${obj[i].id_imagen}">`);
            }
            $(`.visor`).hasClass(`fotorama`);
            $('.fotorama').fotorama();
            }
          )
          $(`.cabecera-comentarios`).css(`background-color`,color);
        });
        $(`.datos`).hover(function(){
          const boton = event.target;
          var color = boton.dataset.color;
          $(this).css(`background-color`,color)
        },function(){
          if (!$(this).hasClass(`enFoco`)) {
            $(this).css(`background-color`,`white`);
          }
        });
      }
    )
  });
}

function limpiar(){
  $(`.boton`).removeClass(`en_foco`).css(`color`,`white`);
  $(`.contenedor_contraido img`).removeClass(`en_hover`).attr('src',`${base_url}assets/imagenes/themes/theme_base.png`);
}

function limpiarsbt(){
  $(`.datos`).removeClass(`enFoco`).css(`background-color`,`white`);
  $(`.datos`).removeClass(`enFoco`).css(`color`,`#333`);
}
