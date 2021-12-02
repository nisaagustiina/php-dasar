<?php 

//koneksi ke database
$conn=mysqli_connect("localhost","root","","inv");

//ambil data dari tabel barang
$result=mysqli_query($conn,"SELECT * FROM barang");

// if(!$result){
// // 	echo mysqli_error($conn);}
// var_dump($result);

//ambil(fetch) dari dari object result
//mysqli_fetch_row()//mengembalikan array numerik
//mysqli_fetch_assoc()//mengembalikan array asosiative
//mysqli_fetch_array()
//mysqli_fetch_object()

// while($mtr=mysqli_fetch_assoc($result)){
// var_dump($mtr);
// }

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Daftar Barang</h1>
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
	<?php while ($row=mysqli_fetch_assoc($result)) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><a href="">ubah</a>
		<a href="">hapus</a></td>
		<td><?php echo $row["kelompok"]; ?></td>
		<td><?php echo $row["kategori"]; ?></td>
		<td><?php echo $row["kode_part"]; ?></td>
		<td><?php echo $row["deskripsi"]; ?></td>
		<td><?php echo $row["satuan"]; ?></td>
		<td><?php echo $row["stok"]; ?></td>
	</tr>
	<?php $i++; ?>
<?php endwhile; ?>
</table>
</body>
</html>