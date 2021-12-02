<?php 
//ARRAY
//var yg memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antara key & value
//keyna adalah index yang dimulai dari 0

// $nama=["nisa","icha","agustina"];
// echo $nama[1];

//membuat array
$hari = array("senin","selasa","rabu");
//cara baru
$bulan=["januari","februari","maret"];
$arr1=[123,"tulisan",false];

//menampilkan array
//var_dump/print_r
// var_dump($hari);
// print_r($bulan);

//menampilkan elemen baru pada array
var_dump($hari);
$hari[]="kamis";
$hari[]="jumat";
echo "<br>";
var_dump($hari);


//  ?>