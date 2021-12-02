<?php 
function salam($waktu,$nama){
	return "Selamat $waktu,$nama";
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>latihan function</title>
</head>
<body>
	<h1><?php echo salam("Pagi","Nisa"); ?></h1>
</body>
</html>