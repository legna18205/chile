$(document).ready(function(){

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

//2 funcion de inicializacion de la geolocalizacion
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

	});*/
}
//2 fin
	function error(){
		console.log('nada papa');
	}

	localizacion();

	//navigator.geolocation.getCurrentPosition(localizacion,error);




});