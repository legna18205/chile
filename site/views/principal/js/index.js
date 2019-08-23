$(document).ready(function(){
	var galeria='';
// 1 adaptacion de estilo a dispocitivos moviles
  //var useragent = navigator.userAgent;
  var mapdiv = document.getElementById("map");

 /* if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1 ) {
    mapdiv.style.width = '100%';
    mapdiv.style.height = '100%';
  } else {
    mapdiv.style.width = '100%';
    mapdiv.style.height = '300px';
  }*/
//1 fin

/* /2 funcion de inicializacion de la geolocalizacion
function localizacion(){
	//console.log(posicion);
	var imagen= base_url+"public/img/mark.png";// imagen del marcador personalizado	
	//var latitude= posicion.coords.latitude;//latitup	
	//var longitude= posicion.coords.longitude;//longitud	
	//console.log("latutud"+latitude+"/br"+"longitude:"+longitude);
	//var coord ={lat:latitude ,lng: longitude};
	var coord ={lat:10.4311864 ,lng: -64.1543756};
	var map = new google.maps.Map(mapdiv,{
		zoom: 15,
		center: coord,
		mapTypeId: google.maps.MapTypeId.ROADMAP, //el valor true desactiva la interfaz, el valor false (por defecto) la activa disableDefaultUI: true
		disableDefaultUI: true
	});
	var marker2 = new google.maps.Marker({//marcador del usuario
		position: coord,
		map: map,

	});
	/*var marker = new google.maps.Marker({// marcador de propiedades
		position: {lat:10.4311864 ,lng: -64.1543756},
		map: map,
		icon:imagen

	});
}
2 fin */
	function error(){
		console.log('nada papa');
	}

	//localizacion();

	//navigator.geolocation.getCurrentPosition(localizacion,error);
	$('.propiedad').on('click',function(){
		var id=$(this).data('id');
		var posicion=$(this).data('posicion');
		console.log(posicion);
		traer_propiedad(id,posicion);
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
			console.log(data[0].fotos);
			if(data){
				$("#modal_titulo_propiedad").html('');
				$("#lightSlider").html('');
				$("#modal_detalles_propiedad").html('');
				$("#modal_titulo_propiedad").html(data[0].titulo);
				var html='';
				for (var i = 0; i < data[0].fotos.length; i++) {
					html+='<li data-thumb="'+data[0].fotos[i].grande+'">';
					html+='<img src="'+base_url+data[0].fotos[i].grande+'"/></li>';
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
				$("#modal_detalles_propiedad").html(html);
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

});