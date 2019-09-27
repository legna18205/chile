$(document).ready(function(){

 

	$('.propiedad').on('click',function(){
		$(".loader").fadeIn("slow");
		var id=$(this).data('id');
		var posicion=$(this).data('posicion');
		console.log(posicion);
		console.error($(window).width());
		if ($(window).width()<768) {
			//alert(id);
			window.location.href = base_url+"propiedad/index/"+id;

		}else{
			traer_propiedad(id,posicion);
		}
		
	});

	$(".cerrar_modal").on('click',function(){
		$("#exampleModal").modal('hide');
		galeria.destroy();
	});

	$('#exampleModal').on('hidden.bs.modal', function (e) {
		galeria.destroy();
	});

	function traer_propiedad(id,posicion){
		var posicion=posicion;
		$("#modal_posicion").val(posicion);
		console.log(posicion);
		$.post(base_url+'propiedad/traer_propiedades',{
			'id':id
		},function(data){
			$(".loader").fadeOut("slow");
			console.log(data[0].fotos);
			if(data){
				$("#modal_titulo_propiedad").html('');
				$("#lightSlider").html('');
				$("#modal_detalles_propiedad").html('');
				$("#modal_titulo_propiedad").html(data[0].titulo);
				var html='';
				for (var i = 0; i < data[0].fotos.length; i++) {
					html+='<li data-thumb="'+data[0].fotos[i].grande+'">';
					html+='<img style="width: 100%;" src="'+base_url+data[0].fotos[i].grande+'"/></li>';
				}
				$("#lightSlider").html(html);
				galeria= $('#lightSlider').lightSlider({
				    gallery: true,
				    item: 1,
				    loop: true,
				    slideMargin: 0,
				    thumbItem: 7
				});
				html='';
				html+='<li> fecha_pu: '+data[0].fecha_pu+'</li>';
				html+='<li> region: '+data[0].region+'</li>';
				html+='<li> comuna: '+data[0].comuna+'</li>';
				html+='<li> direccion: '+data[0].direccion+'</li>';
				html+='<li> referencia: '+data[0].referencia+'</li>';
				html+='<li> Precio: '+data[0].Precio+'</li>';
				html+='<li> contrato: '+data[0].contrato+'</li>';
				html+='<li> espacio: '+data[0].espacio+'</li>';
				html+='<li> cantp: '+data[0].cantp+'</li>';
				html+='<li> cantb: '+data[0].cantb+'</li>';
				html+='<li> Canta: '+data[0].Canta+'</li>';
				$("#datos").html(html);
				$("#modal_id_propiedad").val(data[0].id_propiedad);
				$('#exampleModal').modal('show');
			}else{
	
			}
		},'json');
	}

	$("#modal_previo").on('click', function(){
		var id=$("#modal_id_propiedad").val();
		var posicion='';
		$(".articulo").each(function(){
			if ($(this).data('id')==id) {
				console.log(2);
				posicion=$(this).data('posicion');
				return;
			}
		});
		console.log(posicion);
		if (posicion=='primero') {
			return;}
		galeria.destroy();
		$.post(base_url+'propiedad/traer_propiedad_anterior',{
			'id':id
		},function(data){
			console.log(data);
			if(data){
				traer_propiedad(data.id_propiedad,posicion);
			}else{
	
			}
		},'json');
	});

	$("#modal_siguiente").on('click', function(){
		var id=$("#modal_id_propiedad").val();
		var posicion='';
		$(".articulo").each(function(){
			if ($(this).data('id')==id) {
				console.log(2);
				posicion=$(this).data('posicion');
				return;
			}
		});
		console.log(posicion);
		if (posicion=='ultimo') {
			return;}
		galeria.destroy();
		$.post(base_url+'propiedad/traer_propiedad_siguiente',{
			'id':id
		},function(data){
			console.log(data);
			if(data){
				traer_propiedad(data.id_propiedad,posicion);
			}else{
	
			}
		},'json');
	});




	
})