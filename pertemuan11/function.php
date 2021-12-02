<?php 
//koneksi ke database
$conn=mysqli_connect("localhost","root","","inv");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
	$rows[] = $row;
}
return $rows;
}

function tambah($data){
	global $conn;
	$kelompok=htmlspecialchars($data["kelompok"]);
	$kategori=htmlspecialchars($data["kategori"]);
	$kode_part=htmlspecialchars($data["kode_part"]);
	$deskripsi=htmlspecialchars($data["deskripsi"]);
	$satuan=htmlspecialchars($data["satuan"]);
	$stok=htmlspecialchars($data["stok"]);

	$query="INSERT INTO barang VALUES ('','$kelompok','$kategori','$kode_part','$deskripsi','$satuan','$stok')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM barang WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
	$id = $data["id"];
	$kelompok=htmlspecialchars($data["kelompok"]);
	$kategori=htmlspecialchars($data["kategori"]);
	$kode_part=htmlspecialchars($data["kode_part"]);
	$deskripsi=htmlspecialchars($data["deskripsi"]);
	$satuan=htmlspecialchars($data["satuan"]);
	$stok=htmlspecialchars($data["stok"]);

	$query="UPDATE barang SET
			kelompok = '$kelompok',
			kategori = '$kategori',
			kode_part = '$kode_part',
			deskripsi = '$deskripsi',
			satuan = '$satuan',
			stok = '$stok'
			WHERE id=$id
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

 ?>
