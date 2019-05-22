

//Funcion que oculta y revela en el modal los divs de crear o modificar tema
$(`.opcion_1`).click(function(){
  $(`.mostrando`).removeClass(`mostrando`);
  $(this).addClass(`mostrando`);
  $(`.vista1`).css(`display`,`block`);
  $(`.vista2`).css(`display`,`none`);
});
$(`.opcion_2`).click(function(){
  $(`.mostrando`).removeClass(`mostrando`);
  $(this).addClass(`mostrando`);
  $(`.vista2`).css(`display`,`block`);
  $(`.vista1`).css(`display`,`none`);
});


$(`.btn_imagen`).click(function(){
  $(`.cont_comentario`).css(`display`,`none`);
  $(`.cont_imagen`).css(`display`,`block`);
});
$(`.comentario`).click(function(){
  $(`.cont_imagen`).css(`display`,`none`);
  $(`.cont_comentario`).css(`display`,`block`);
});

//mostrar y desaparecer menu
$(`.menu_m`).click(function(){
    $(`#menu_modal`).toggle(`drop`,{direction:"down"},`medium`);
});


		$(".picker").colorPick({
			'initialColor' : '#8e44ad',
			'palette': ["#1abc9c", "#16a085", "#2ecc71", "#27ae60", "#3498db", "#2980b9", "#9b59b6", "#8e44ad", "#34495e", "#2c3e50", "#f1c40f", "#f39c12", "#e67e22", "#d35400", "#e74c3c", "#c0392b", "#ecf0f1"],
			'onColorSelected': function() {
        scolor = this.color;
        $(`.color_input`).val(scolor);
				this.element.css({'backgroundColor': this.color, 'color': this.color});
			}
		});

    $(`.expandir_comentarios`).click(function(){
      if ($(this).hasClass("expandido")) {
        $(this).removeClass(`expandido`);
        $(`.comentarios`).animate({height:'27%',position:'fixed'});
        $(`.template`).css(`overflow-y`,`scroll`);
      }else{
        $(this).addClass(`expandido`);
        $(`.comentarios`).animate({height:'96%',position:'fixed'});
        $(this).css(`transform`,`rotate(0deg)`);
      }
    });

    $(`.select_action`).change(function(){
      $(`.no_display`).css(`display`,`none`);
      let seleccion = $(this).val();
       $(`.select_${seleccion}`).css(`display`,`block`);
    });
// -------------------------

$('.modal').on('hidden.bs.modal', function(){
		$(this).find('form')[0].reset();
		$("label.error").remove();
    $(`.vista`).css(`display`,`none`);
    $(`.opcion`).removeClass(`mostrando`);

	});


  $(`#menu_themes`).click(function(e){
    if ($(this).hasClass(`volver`)) {
      $(this).removeClass(`volver`).addClass(`ir`);
      $(`header`).animate({width:"95%"},500);
      $(`.template`).animate({width:"95%"},500);
      $(`#contenedor`).animate({width:"5%"},500);
      $(`#volver`).hide();
      $(`#ir`).show();
      $(`.asd`).toggle(`slide`,`slow`);
      $(`.as`).toggle(`slide`,`medium`);
      $(`.asdf`).toggle(`slide`,`slow`);
      setTimeout(()=>{$(`.temas_contraido`).css(`display`,`block`);},400)
      setTimeout(()=>{$('#fotorama').resize();},600)



    }else {
      $(this).removeClass(`ir`).addClass(`volver`);
      $(`#ir`).hide();
      $(`#volver`).show();
      $(`header`).animate({width:"70%"},500);
      $(`.template`).animate({width:"70%"},500);
      $(`.asd`).toggle(`slide`,`fast`);
      $(`.as`).css(`display`,`block`);
      $(`.asdf`).toggle(`slide`,`fast`);
      $(`#contenedor`).animate({width:"30%"},500);
      $(`.temas_contraido`).css(`display`,`none`);
      setTimeout(()=>{$('#fotorama').resize();},600)
      $(`#subtemas_comprimidos`).hide(`slow`);
    }

  });

$(`#cont_titulo, .template`).click(function(){
  $(`#subtemas_comprimidos`).hide(`slide`);
  $(`#menu_modal`).hide(`slide`,{direction:"down"});

});

$(document).ready(function(){
  $(`.ripple`).click(function(e){
    e.preventDefault;

    var div = $("<div />"),
        btnOffset = $(this).offset(),
        xPos = e.pageX - btnOffset.left,
        yPos = e.pageY - btnOffset.top;

        div.addClass("ripple-effect");
        var ripple = $(".ripple-effect");

        ripple.css("height", $(this).height());
        ripple.css("width", $(this).height());

        div.css({
          top: yPos - (ripple.height()/2),
          top: xPos - (ripple.width()/2),
          background: $(this).data("ripple-effect")
        }).appendTo($(this));

        window.setTimeout(function(){
          div.remove();
        }, 300);
  });

  $(`#login_formu`).validetta ();
  $(`#registro_usuarios`).validetta ();


});


/*             $(this).removeClass(`expandido`);
    $(`.comentarios`).animate({height:'96%',position:'fixed'});
 */
