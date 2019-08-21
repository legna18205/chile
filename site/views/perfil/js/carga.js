url=base_url+'propiedad/upfile';   

	Dropzone.autoDiscover = false;
	$("div#carga-img").dropzone({ 
		url: '/chile/propiedad/upfile',
		autoProcessQueue:false,
		parallelUploads: 7,
		uploadMultiple: true
	});


$('#btn_enviar').click(function() {
    var myDropzone = Dropzone.forElement(".dropzone");
    myDropzone.on('sending', function(file, xhr, formData){
    	formData.append('userName', 'bob');
    	formData.append('2', 'bob');
    	formData.append('3', 'bob');
	});
    myDropzone.processQueue();
});