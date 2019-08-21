$(document).ready(function(){

	$('.x').on('click',function(){
		var id=$(this).data('id');
		alertify.confirm("¿Seguro de eliminar esta publicacion?", function (e) {
		    if (e) {
		         $.post(base_url+'listar/eliminarpublicacion',
  				  {
  				    id: id
  				  },function(e){
  				    if (e==0) {
  				      	alertify.error("Error al eliminar publicacion");
  				    }else{
  				    	
  				    	$(".card").each(function(){
  				      		if ($(this).data('id')==id) {
  				      			$(this).animate(
  				      				{
  				      					left: '1500px',
  				      					height:"0px"
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
		$('.lapiz').on('click',function(){
		var id=$(this).data('id');
		window.location.href=base_url+'carga_propiedad/index/'+id;
	});



});