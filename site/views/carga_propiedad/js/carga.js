url=base_url+'propiedad/upfile';   
var mapdivv = document.getElementById("map");
	Dropzone.autoDiscover = false;
	$("div#carga-img").dropzone({ 
		url: '/chile/carga_propiedad/upfile',
		autoProcessQueue:false,
		parallelUploads: 7,
		uploadMultiple: true
	});
// mapa de google
function localizacion(posicion){
	//console.log(posicion);	
	var latitude= posicion.coords.latitude;//latitup 
  var longitude= posicion.coords.longitude;//longitud 
  console.log("latutud"+latitude+"/br"+"longitude:"+longitude);
  var coord ={lat:latitude ,lng: longitude};
	var map = new google.maps.Map(mapdivv,{
		zoom: 15,
		center: coord,
		mapTypeId: google.maps.MapTypeId.ROADMAP, //el valor true desactiva la interfaz, el valor false (por defecto) la activa disableDefaultUI: true
		disableDefaultUI: true
	});
	var marker2 = new google.maps.Marker({//marcador del usuario
		position: coord,
		map: map,

	});
}
//localizacion();
navigator.geolocation.getCurrentPosition(localizacion);
// fin de map

// carga de archivos
$('#titulo').on('focus',function(){
	$("#titulo").css('border-color','#80bdff');
    $("#titulo").css('box-shadow','0 0 0 0.2rem rgba(0, 123, 255, 0.25)');
});
$('#Precio').on('focus',function(){
	$("#Precio").css('border-color','#80bdff');
    $("#Precio").css('box-shadow','0 0 0 0.2rem rgba(0, 123, 255, 0.25)');
});

$('#btn_enviar').click(function() {
	var bn=$(this).data('bn');
	var id=$(this).data('id');

	if ($("#titulo").val()=="") {
				
		$("#titulo").css('border-color','#ff000075');
    	$("#titulo").css('box-shadow','rgba(255, 0, 0, 0.25) 0px 0px 0px 0.2rem');
    	$('html, body').animate({scrollTop:0}, 'slow');
    	$('.efectt').removeClass('active-efectt');
    	$('#uno').addClass('active-efectt');
		return;
	}
	if ($("#Precio").val()=="") {

		$("#Precio").css('border-color','#ff000075');
    	$("#Precio").css('box-shadow','rgba(255, 0, 0, 0.25) 0px 0px 0px 0.2rem');
    	$('html, body').animate({scrollTop:0}, 'slow');
    	$('.efectt').removeClass('active-efectt');
    	$('#uno').addClass('active-efectt');
		return;
	}
    var myDropzone = Dropzone.forElement(".dropzone");

	if (myDropzone.files.length==0){
		enviar_solo_datos(id,bn);
	}

    myDropzone.on('sending', function(file, xhr, formData){
    	formData.append('id',id);
    	formData.append('bn',bn);
    	formData.append('region',$('#region').val());
    	formData.append('provincia',$('#provincia').val());
    	formData.append('comuna',$('#comuna').val());
    	formData.append('direccion',$('#direccion').val());
    	formData.append('referencia',$('#referencia').val());
    	formData.append('titulo',$('#titulo').val());
    	formData.append('Precio',$('#Precio').val());
    	formData.append('contrato',$('#contrato').val());
    	formData.append('espacio',$('#espacio').val());
    	formData.append('cantp',$('#cantp').val());
    	formData.append('cantb',$('#cantb').val());
    	formData.append('Canta',$('#Canta').val());
    	formData.append('descrip',$('#descrip').val());

	});
	 
    myDropzone.processQueue();
    myDropzone.on('success', function(){
      $(".loader").fadeIn("slow");
    window.location.href=base_url+'listar/index/'+$("#email-usuario").val();
    });
});

function enviar_solo_datos(id=false,bn=false){
	$.post(base_url+'carga_propiedad/upfile2',{
		'bn':bn,
    	'id':id,
		'region':$('#region').val(),
    	'provincia':$('#provincia').val(),
    	'comuna':$('#comuna').val(),
    	'direccion':$('#direccion').val(),
    	'referencia':$('#referencia').val(),
    	'titulo':$('#titulo').val(),
    	'Precio':$('#Precio').val(),
    	'contrato':$('#contrato').val(),
    	'espacio':$('#espacio').val(),
    	'cantp':$('#cantp').val(),
    	'cantb':$('#cantb').val(),
    	'Canta':$('#Canta').val(),
    	'descrip':$('#descrip').val()
	},function(){
    $(".loader").fadeIn("slow");
    window.location.href=base_url+'listar/index/'+$("#email-usuario").val();
	});
}
//fin de carga
//taps del formulario
var opciones= [
	{taps:'Foto',url:'hola2',data:'tres'},
	{taps:'Ubicacion',url:'hola2',data:'dos'},
	{taps:'Datos',url:'hola',data:'uno'}
]
var pestaña = new tapss($('#pes'),opciones);
//fin del taps


$('#region').on('change',function(){
	$.post(base_url+'carga_propiedad/provincias',{
		id:this.value
	},function(e){
		var html="<option value=''>--Seleccione--</option>";
		for (var i = 0; i < e.length; i++) {
			html+="<option value='"+e[i]['id']+"''>"+e[i].provincia+"</option>";
		}		
		$('#provincia').html(html);
	},'json');
});

$('#provincia').on('change',function(){
	$.post(base_url+'carga_propiedad/comuna',{
		id:this.value
	},function(e){
		var html="<option value=''>--Seleccione--</option>";
		for (var i = 0; i < e.length; i++) {
			html+="<option value='"+e[i]['id']+"''>"+e[i].comuna+"</option>";
		}
		$('#comuna').html(html);
	},'json');
});


$('#btn_actualiza').click(function() {
	if ($("#titulo").val()=="") {
				
		$("#titulo").css('border-color','#ff000075');
    	$("#titulo").css('box-shadow','rgba(255, 0, 0, 0.25) 0px 0px 0px 0.2rem');
    	$('html, body').animate({scrollTop:0}, 'slow');
    	$('.efectt').removeClass('active-efectt');
    	$('#uno').addClass('active-efectt');
		return;
	}
	if ($("#Precio").val()=="") {
		
		$("#Precio").css('border-color','#ff000075');
    	$("#Precio").css('box-shadow','rgba(255, 0, 0, 0.25) 0px 0px 0px 0.2rem');
    	$('html, body').animate({scrollTop:0}, 'slow');
    	$('.efectt').removeClass('active-efectt');
    	$('#uno').addClass('active-efectt');
		return;
	}
    var myDropzone = Dropzone.forElement(".dropzone");

	if (myDropzone.files.length==0){
		enviar_solo_datos();
	}

    myDropzone.on('sending', function(file, xhr, formData){
    	formData.append('region',$('#region').val());
    	formData.append('provincia',$('#provincia').val());
    	formData.append('comuna',$('#comuna').val());
    	formData.append('direccion',$('#direccion').val());
    	formData.append('referencia',$('#referencia').val());
    	formData.append('titulo',$('#titulo').val());
    	formData.append('Precio',$('#Precio').val());
    	formData.append('contrato',$('#contrato').val());
    	formData.append('espacio',$('#espacio').val());
    	formData.append('cantp',$('#cantp').val());
    	formData.append('cantb',$('#cantb').val());
    	formData.append('Canta',$('#Canta').val());
    	formData.append('descrip',$('#descrip').val());
	});

    myDropzone.processQueue();
    myDropzone.on('success', function(){
    	window.location.href=base_url+'listar';
    });
});


	$('.x').on('click',function(){
		var id=$(this).data('id');
		alertify.confirm("¿Seguro de eliminar esta Foto?", function (e) {
		    if (e) {
		         $.post(base_url+'carga_propiedad/delete_foto',
  				  {
  				    id: id
  				  },function(e){
  				    if (e==0) {
  				      	alertify.error("Error al eliminar foto");
  				    }else{
  				    	
  				    	$(".miniatura").each(function(){
  				      		if ($(this).data('id')==id) {
  				      			$(this).animate(
  				      				{
  				      					opacity: '0',
  				      					width:"0px"
  				      				},800,"linear",function(){
  				      				$(this).remove();
  				      				alertify.success("Publicacion eliminada correctamente");
  				      			});
  				      		}else{
  				      			
  				      		}
  				      	});
  				    }
  				},'json');
		    } else {
		       
		    }
		});
	});

 
  $('#Precio').on('blur',function(){
    
  
    $.getJSON('https://mindicador.cl/api', function(data) {
    var dailyIndicators = data;
    
    var uf=parseFloat(dailyIndicators.uf.valor);

    var pesos=$('#Precio').val();


      pesos=pesos.toString();
pesos=pesos.replace(/\./g,"");
 pesos=pesos.replace(/\,/g,".");
  console.error(uf);
  console.error(pesos);

var total = (parseFloat(pesos)*(parseFloat(uf)));
console.error(total);


             var tempInput = $(document.createElement("input"));
             tempInput.val(parseFloat(total).toFixed(2));
             tempInput.mask('000.000.000,00', { reverse: true });
             var mascara = tempInput.val();
    $('#Precio_peso').val('$ '+mascara);


    });

});


  $('#contrato').on('change',function(){

precio();
$('#Precio').blur();
});
precio();

function precio(){

    if ($('#contrato').val()=='Arriendo') {
      $("#label").html('precio en $<font class="obligatorio">*</font>');
      $("#Precio_peso").fadeOut(2000);
    }else{
      $("#label").html('Precio en U.F. <font class="obligatorio">*</font>');
      $("#Precio_peso").fadeIn(2000);
    }
  }