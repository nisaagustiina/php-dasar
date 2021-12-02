$(document).ready(function(){
	$('#tombolcari').hide();
	$('#keyword').on('keyup', function(){
		$('.loader').show();
	// 	//ajax load
	// 	$('#container').load('ajax/material.php?keyword=' +$('#keyword').val());
	// });
	
	//$.get()
	$.get('ajax/material.php?keyword=' + $('#keyword').val(),function(data){
		$('container').html(data);
		$('.loader').hide();
	    });

	});

});