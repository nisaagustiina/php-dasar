<?php 

require_once __DIR__ . '/vendor/autoload.php';

require'function.php';
$barang=query("SELECT * FROM barang");

$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<html>
<head>
	<title>Daftar barang</title>
	<link rel="stylesheet" href="css/print.css">
</head>
<body>
	<h1>Daftar barang</h1>
	<table border="1" cellspacing="0" cellpadding="10">
	<tr>
		<th>No</th>
		<th>Kelompok</th>
		<th>Kategori</th>
		<th>Kode Part</th>
		<th>Deskripsi</th>
		<th>Satuan</th>
		<th>Stock</th>
	</tr>';

	$i=1;
	foreach ($barang as $row) {
		$html .= '<tr>
			<td>'. $i++ .'</td>
			<td>'. $row["kelompok"].'</td>
			<td>'. $row["kategori"].'</td>
			<td>'. $row["kode_part"].'</td>
			<td>'. $row["deskripsi"].'</td>
			<td>'. $row["satuan"].'</td>
			td>'. $row["stok"].'</td>
		</tr>';
	}


$html .= '</table>
</body>
</html>';

//download ('D') atau ('I')
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-barang.pdf',\Mpdf\Output\Destination::INLINE);


 ?>