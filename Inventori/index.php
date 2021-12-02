<!DOCTYPE html>
<html>
<head>
	<title>Import Excel ke MYSQLI dengan PHP</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		p{
			color: skyblue;
		}
	</style>
</head>
<body>
	<h2>Import Excel ke mysqli dengan php</h2>
	<?php 
	if(isset($_GET['done'])){
		echo "<p>". $_GET['done']."Data berhasil diimport.<p>";
	} ?>

<a href="upload.php">Import data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Kelompok</th>
		<th>Kategori</th>
		<th>Kode Part</th>
		<th>Deskripsi</th>
		<th>Satuan</th>
		<th>Stok</th>
	</tr>

	<?php 
	include 'koneksi.php';
	$no=1;
	$data = mysqli_query($conn,"SELECT * FROM barang");
	while($d = mysqli_fetch_assoc($data)) : ?>
	 <tr>
	 	<th><?= $no++; ?></th>
	 	<td><?= $d["kelompok"]; ?></td>
		<td><?= $d["kategori"]; ?></td>
		<td><?= $d["kode_part"]; ?></td>
		<td><?= $d["deskripsi"]; ?></td>
		<td><?= $d["satuan"]; ?></td>
		<td><?= $d["stok"]; ?></td>
	 </tr>
	<?php endwhile; ?>
</table>
</body>
</html>