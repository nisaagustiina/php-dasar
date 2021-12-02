// var keyword = document.getElementById('keyword');
// var tombolcari = document.getElementById('tombol-cari');
// var container = document.getElementById('container;');

// keyword.addEventListener('keyup',function(){

// 	//buat object ajax
// 	var xhr = new XMLHttpRequest();
// 	//cek kesiapan ajax
// 	xhr.onreadystatechange = function(){
// 		if(xhr.readyState == 4 && xhr.status == 200){
// 			container.innerHTML = xhr.responseText;
// 		}
// 	}
//  	//eksekusi ajax
//  	xhr.send();



// });

$(document).ready(function(){
	$(#tombolcari).hide();
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