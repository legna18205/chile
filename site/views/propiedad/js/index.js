$(document).ready(function(){

$('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 7
});
var opciones= [
	{taps:'Ubicacion',url:'ubi',data:'ubi'},
	{taps:'Informacion',url:'datos',data:'datos'}
	
]
var pestaña = new tapss($('#pes_ver_propiedad'),opciones);




});