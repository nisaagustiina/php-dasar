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


function cari($keyword){
	$query = "SELECT * FROM barang 
				WHERE 
			kelompok LIKE '%$keyword%' OR
			kategori LIKE '%$keyword%' OR
			kode_part LIKE '%$keyword%' OR
			deskripsi LIKE '%$keyword%' OR
			satuan LIKE '%$keyword%' OR
			stok LIKE '%$keyword%'
	";
	return query($query);
}

function signup($data){
	global $conn;
	$uname = strtolower(stripcslashes($data["uname"]));
	$pw=mysqli_real_escape_string($conn,$data["pw"]);
	$pw2=mysqli_real_escape_string($conn,$data["pw2"]);

	$result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$uname'");

	if(mysqli_fetch_assoc($result)){
		echo"<script>
		alert('uname terdaftar');
		</script>";
		return false;
	}

	if($pw !== $pw2){
		echo"<script>
		alert('password tidak sesuai');
		</script>";
		return false;
	}

	//enkripsi pw
	$pw = password_hash($pw, PASSWORD_DEFAULT);

	//tambah user ke db
	mysqli_query($conn, "INSERT INTO user VALUES ('','$uname','$pw')");
	return mysqli_affected_rows($conn);
}
?>