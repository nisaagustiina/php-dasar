<?php 
$siswa = [
	["Nisa Agustina","18190","RPL","nisaagustina@gmail.com"],
	["Reffan Risky","18190","MP","reffanrisky@gmail.com"],
	["Rara","18190","EIND","raa@gmail.com"]
];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>lat 3</title>
 </head>
 <body>
 <h1>Daftar Siswa</h1>
 
 	<?php foreach ($siswa as $s) : ?>
 		<ul>
 			<li>Nama : <?php echo $s[0]; ?></li>
 			<li>NIS : <?php echo $s[1]; ?></li>
 			<li>Jurusan : <?php echo $s[2]; ?></li>
 			<li>Email : <?php echo $s[3]; ?></li>
 		</ul>
 	<?php endforeach; ?>
 
 </body>
 </html>