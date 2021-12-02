<?php
require'function.php';
session_start();

if(!isset($_SESSION["login"])){
	header("Location : login.php");
	exit;
}

	$jumlahDataPerHalaman = 75;
	$jumlahData = count(query("SELECT * FROM barang"));
	$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
	$halamanAktif = (isset($_GET['hal'])) ? $_GET['hal'] : 1;
	$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

	$barang = query("SELECT * FROM barang LIMIT $awalData, $jumlahDataPerHalaman");

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
		<input type="text" name="keyword" size="30" autofocus placeholder="Masukan keyword pencarian.." autocomplete="Off">
		<button type="submit" name="cari">Cari</button>
	</form>
	<br>
	<!-- navigasi -->
	<?php if($halamanAktif > 1) : ?>
	<a href="?hal=<?= $halamanAktif-1; ?>"><</a><?php endif; ?>

	<?php for($i=1;$i<=$jumlahHalaman;$i++) : ?>
	<?php if($i == $halamanAktif) : ?>
		<a href="?hal=<?= $i; ?>" style="font-weight: bold;color: red;"><?= $i; ?></a>
		<?php else : ?>
			<a href="?hal=<?= $i; ?>"><?= $i; ?></a>
	<?php endif; ?>
	<?php endfor; ?>

<?php if($halamanAktif < $jumlahHalaman ) : ?>
	<a href="?hal=<?= $halamanAktif+1; ?>">></a>
<?php endif; ?>



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
	<?php foreach ($barang as $row) : ?>
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

<!-- 
		<td><?= $row['gambar']; ?></td> -->