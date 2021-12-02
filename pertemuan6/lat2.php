<?php 
//array assosiative
//key-nya = string yg dibuat sendiri
 $siswa = [
	["nama" => "Nisa Agustina","nis" => "18190", "jurusan" => "RPL","email" => "nisaagustina@gmail.com","gambar" => "ica.jpg"],
	["nama" =>"Reffan Risky","nis" =>"18190","jurusan" =>"MP","email" =>"reffanrisky@gmail.com","tugas" => [85,100,90],"gambar" => "reffan.jpg"]
];
// echo $siswa[1]["tugas"][2];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php foreach ($siswa as $s) : ?>
 		<ul>
 			<img src="img/<?php echo $s ["gambar"]; ?>">
 			<li>Nama : <?php echo $s["nama"]; ?></li>
 			<li>NIS : <?php echo $s["nis"]; ?></li>
 			<li>Jurusan : <?php echo $s["jurusan"]; ?></li>
 			<li>Email : <?php echo $s["email"]; ?></li>
 		</ul>
 	<?php endforeach; ?>
 </body>
 </html>