$(function(){

	$("#formulario").on('submit',function(event){
		var text = $("#texto").val();
		if (!text){
			return;
		}
		event.preventDefault();
		$("#publicacion").prepend(
			'<div class="row contenedor2">'+
			'<div class="col-md-1">' +
				'<img src="Assets/img/cat-icon.png" alt="" class="img-responsive perfil"></div>' +
			'<div class="col-md-10">' +
			'<p class="text-left"><strong>Nombre de usuario</strong><br/>'
			+ text + '</p> </div>'+
			'<div class="col-md-1 cerrar"><span class="cerrar"> X </span></div></div></div>'
		);

		$("#texto").val('');
		$("#texto").focus();
	});

	$('#publicacion').on('click','.cerrar', function(event){
		event.stopPropagation();
		$(this).parent().parent().fadeOut(600);
	});

	$('#publicacion').on('click','.tweets', function(){
		$(this).toggleClass('strike');
	});
});
