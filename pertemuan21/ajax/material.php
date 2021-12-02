<?php 

usleep(500000);
require '../function.php';
$keyword = $_GET["keyword"];

function cari($keyword){
	$query = "SELECT * FROM barang 
				WHERE 
			kelompok LIKE '%$keyword%' OR
			kategori LIKE '%$keyword%' OR
			kodepart LIKE '%$keyword%' OR
			deskripsi LIKE '%$keyword%' OR
			satuan LIKE '%$keyword%' OR
			stock LIKE '%$keyword%'
	";
	return query($query);
}

 ?>


 
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
<table border="1" cellspacing="0" cellpadding="10">
	<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>Kelompok</th>
		<th>Kategori</th>
		<th>Kode Part</th>
		<th>Deskripsi</th>
		<th>Satuan</th>
		<th>Stock</th>
	</tr>

	<?php $i=1; ?>
	<?php foreach ($barang as $row): ?>

	<tr>
		<td><?= $i; ?></td>
		<td>
		<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
		<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><?= $row["kelompok"]; ?></td>
		<td><?= $row["kategori"]; ?></td>
		<td><?= $row["kode_part"]; ?></td>
		<td><?= $row["deskripsi"]; ?></td>
		<td><?= $row["satuan"]; ?></td>
		<td><?= $row["stok"]; ?></td>
	</tr>

	<?php $i++; ?>
	<?php endforeach; ?>

</table>
 </body>
 </html>