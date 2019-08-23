Dropzone.autoDiscover = false;	
	$("div#carga-img").dropzone({ 
		url: '/chile/perfil/cambiar_imagen',
		autoProcessQueue:true,
		parallelUploads: 1000,
		uploadMultiple: false,
		 success: function (file, response) {
		 	$("#avatar_perfil").remove();
		 	$('#logo').prepend('<img id="avatar_perfil" class="avatar" src="'+base_url+'public/img/profile/'+$("#email-usuario").val()+'.jpg?'+Date.now()+'"></img>');
      		$("#avatar-mini").css('background-image', '');
      		$("#avatar-mini").css('background-image', 'url('+base_url+'public/img/profile/'+$("#email-usuario").val()+'.jpg?'+Date.now()+')');
      		$("#avatar_perfil").click(function(){
				$("#carga-img").click();
			});
        },
	});
$(document).ready(function(){

$("#avatar_perfil").click(function(){
	$("#carga-img").click();
});

$("#btn_guardar").click(function(){
	$.post(base_url+'perfil/actualizar_datos',{
		'rut_usuario':$("#rut_usuario").val(),
		'nombre_usuario':$("#nombre_usuario").val(),
		'telefono_usuario':$("#telefono_usuario").val(),
		'email_usuario':$("#email_usuario").val(),
		'obs_usuario':$("#obs_usuario").val()
	},function(data){
		if(data!=0){
			alertify.success("Perfil editado correctamente");
		}else{

		}
	},'json');
});

});