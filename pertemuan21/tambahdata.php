<?php 

session_start();

if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'function.php';
if(isset($_POST["submit"])){
	//cek keberhasilan data ditambahkan atau tidak
	if(tambah($_POST)>0){
		echo "
		<script>
			alert('data berhasil ditambahkan');
			document.location.href='index2.php';
		</script>
		";
	}else{
		echo "
		<script>
			alert('data gagal ditambahkan');
			document.location.href='index2.php';
		</script>";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Tambah Data Material</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="kelompok">Kelompok:</label>
			<input type="text" name="kelompok" id="kelompok">
		</li>
		<li>
			<label for="kategori">Kategori:</label>
			<input type="text" name="kategori" id="kategori">
		</li>
		<li>
			<label for="kodepart">Kode Part:</label>
			<input type="text" name="kodepart" id="kodepart">
		</li>
		<li>
			<label for="deskripsi">Deskripsi:</label>
			<textarea name="deskripsi"></textarea>
		</li>
		<li>
			<label for="satuan">Satuan:</label>
			<input type="text" name="satuan" id="satuan">
		</li>
		<li>
			<label for="stock">Stock:</label>
			<input type="text" name="stock" id="stock">
		</li>
		<li>
			<label for="gambar">Gambar : </label>
			<input type="file" name="gambar" id="gambar">
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data</button>
		</li>
	</ul>
</form>
</body>
</html>