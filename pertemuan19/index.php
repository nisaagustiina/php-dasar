<?php
session_start();

if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}

require'function.php';

$barang=query("SELECT * FROM barang");

//tombol cari diklik
if(isset($_POST["cari"])){
	$barang = cari($_POST["keyword"]);
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<a href="logout.php">LOGOUT</a>

<h1>Daftar barang</h1>

	<a href="tambahdata.php">Tambah Data barang</a>
	<br><br>

	<form action="" method="post">
		<input type="text" name="keyword" size="30" autofocus placeholder="Masukan keyword pencarian.." autocomplete="Off" id="keyword">
		<button type="submit" name="cari" id="tombol-cari">Cari</button>
	</form>
	<br>
<div id="container">
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
</div>

<script src="js/script.js"></script>

</body>
</html>