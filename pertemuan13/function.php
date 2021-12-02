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

	//upload gambar
	$gambar = upload();
	if(!$gambar){
		return false;
	}

	$query="INSERT INTO barang VALUES ('','$kelompok','$kategori','$kodepart','$deskripsi','$satuan','$stok','$gambar')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah tidak gambar yg diupload
	if($error === 4){
		echo"
		<script>
		alert('pilih gambar dulu');
		</script>";
		return false;
	}

	//cek apakah yng diuplod adalah gambar
	$ekstensiGambarValid=['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
		echo"<script>
		alert('yg diupload bkn gmbr');
		</script>";
		return false;
	}
	//cek gambar hika ukurannya terlalu besar
	if($ukuranfile > 1000000){
		echo"<script>
		alert('ukuran terlalu besar');
		</script>";
		return false;
	}
	//lolos pengecekan, gambar siap diupload
	//Generate nama gambar
	$namaFileBaru = uniqid();
	$namaFileBaru='.';
	$namaFileBaru=$ekstensiGambar;
	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
	return $namaFileBaru;
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
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	if($_FILES["gambar"]["error"]===4){
		$gambar=$gambarLama;
	}else{
		$gambar=$upload;
	}

	$gambar=htmlspecialchars($data["gambar"]);

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
 ?>