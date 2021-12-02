<!-- import excel ke mysql -->
 
<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include 'excel_reader2.php';
?>
 
<?php
// upload file xls
$target = basename($_FILES['phpdasar']['name']) ;
move_uploaded_file($_FILES['phpdasar']['tmp_name'], $target);
 
// beri izin agar file xls dapat di baca
chmod($_FILES['phpdasar']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['phpdasar']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$done = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$kelompok   = $data->val($i, 1);
	$kategori   = $data->val($i, 2);
	$kode_part  = $data->val($i, 3);
	$deskripsi  = $data->val($i, 4);
	$satuan  = $data->val($i, 5);
	$stok  = $data->val($i, 6);
 
	if($kelompok != "" && $kategori != "" && $kode_part != "" && $deskripsi !="" && $satuan !="" && $stok !="" ){
		// input data ke database (table data_material)
		mysqli_query($conn,"INSERT into barang values('','$kelompok','$kategori','$kode_part','$deskripsi','$satuan','$stok')");
		$done++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['phpdasar']['name']);
 
// alihkan halaman ke index.php
header("location:index.php?done=$done");