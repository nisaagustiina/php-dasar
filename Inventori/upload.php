<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="index.php">Kembali</a>
<?php 
include 'koneksi.php';
 ?>
 <form method="post" enctype="multipart/form-data" action="upload_aksi.php">
 	Pilih file:
 	<input type="file" name="phpdasar" required="required">
 	<input type="submit" name="upload" value="import">
 </form>
</body>
</html>