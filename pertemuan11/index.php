<?php
require'function.php';
$barang=query("SELECT * FROM barang");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Daftar Barang</h1>
<a href="tambahdata.php">Tambah Data Barang</a><br>
<table border="1" cellspacing="0" cellpadding="10">
	<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>Kelompok</th>
		<th>Kategori</th>
		<th>Kode Part</th>
		<th>Deskripsi</th>
		<th>Satuan</th>
		<th>Stok</th>
	</tr>
	<?php $i=1; ?>
	<?php foreach ($barang as $row): ?>
	<tr>
		<td><?= $i; ?></td>
		<td><a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
		<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a></td>
		<td><?php echo $row["kelompok"]; ?></td>
		<td><?php echo $row["kategori"]; ?></td>
		<td><?php echo $row["kode_part"]; ?></td>
		<td><?php echo $row["deskripsi"]; ?></td>
		<td><?php echo $row["satuan"]; ?></td>
		<td><?php echo $row["stok"]; ?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>
</table>
</body>
</html>