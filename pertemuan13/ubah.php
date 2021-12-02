<?php 
require 'function.php';
//ambil data di url
$id = $_GET["id"];
//query data berdasarkan id
$mtr = query("SELECT * FROM barang WHERE id = $id")[0];

if(isset($_POST["submit"])){
	if(ubah($_POST)>0){
		echo "
		<script>
			alert('data berhasil diubah');
		</script>
		";
	}else{
		echo "
		<script>
			alert('data gagal diubah');
		</script>
		";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Ubah Data barang</h1>
<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $mtr["id"]; ?>">
	<input type="hidden" name="id" value="<?= $mtr["gambar"]; ?>">
	<ul>
		<li>
			<label for="kelompok">Kelompok:</label>
			<input type="text" name="kelompok" id="kelompok" value="<?= $mtr ["kelompok"];?>" >
		</li>
		<li>
			<label for="kategori">Kategori:</label>
			<input type="text" name="kategori" id="kategori" value="<?= $mtr["kategori"];?>">
		</li>
		<li>
			<label for="kodepart">Kode Part:</label>
			<input type="text" name="kode_part" id="kodepart" value="<?= $mtr["kode_part"];?>">
		</li>
		<li>
			<label for="deskripsi">Deskripsi:</label>
			<textarea name="deskripsi"><?= $mtr["deskripsi"];?></textarea>
		</li>
		<li>
			<label for="satuan">Satuan:</label>
			<input type="text" name="satuan" id="satuan" value="<?= $mtr["satuan"];?>">
		</li>
		<li>
			<label for="stock">Stok:</label>
			<input type="text" name="stok" id="stock" value="<?= $mtr["stok"];?>">
		</li>
		<li>
			<label for="img">Gambar:</label>
			<img src="">
			<input type="file" name="gambar" id="img">
		</li>
		<li>
			<button type="submit" name="submit">Ubah Data</button>
		</li>
	</ul>
</form>
</body>
</html>