

	function tapss(divtaps,elementos) {
		
	elementos.forEach(function (elemento, indice, array) {

	divtaps.prepend("<div class='col legna-taps' data-afect='"+elemento.data+"'>"+elemento.taps+"<div>");
	});

	$(".legna-taps").on('click',function(){
		console.log(this.dataset.afect);
		$('.efectt').removeClass('active-efectt');
		$('#'+this.dataset.afect).addClass('active-efectt');
	});
}








