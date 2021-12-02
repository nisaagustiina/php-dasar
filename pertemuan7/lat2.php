<?php 
//cek apakah data sudah diisi atau tidak di $_GET

if(	!isset($_GET["kelompok"]) ||
   	!isset($_GET["kategori"]) ||
	!isset($_GET["kodepart"]) ||
	!isset($_GET["deskripsi"]) ||
	!isset($_GET["satuan"]) ||
	!isset($_GET["stock"]) ||
	!isset($_GET["gambar"]) )
//redirect 
		{
		header("location:lat1.php");
		exit;
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <ul>
 			<li>
 				<img src="img/<?php echo $_GET["gambar"]; ?>">
 			</li>
 			<li><?php echo $_GET["kelompok"]; ?></li>
 			<li><?php echo $_GET["kategori"]; ?></li>
 			<li><?php echo $_GET["kodepart"]; ?></li>
 			<li><?php echo $_GET["deskripsi"]; ?></li>
 			<li><?php echo $_GET["satuan"]; ?></li>
 			<li><?php echo $_GET["stock"]; ?></li>
 		</ul>

 		<a href="lat1.php">Kembali ke latihan 1</a>
 </body>
 </html>
 