<?php 
//DATE
//untuk menampilkan tanggal dengan format tertntu
//echo date("l, d M y");

//time
//UNIXTimestamp / EPOCH time
//detik yang sudah berlalu sejak 1 jan '70
//echo time();
//echo date("l",time()-60*60*24*100);

//mktime
//membuat sendiri detik
//mktime(0,0,0,0,0,0)
//jam,menit,detik,bulan,tanggal,tahun
echo date("l",mktime(0,0,0,8,22,2002));

//strtotime
//echo strtotime("22 Aug 2002");

//string
//strlen() lebgth string
//strcmp() menggabungkan
//explode() memecah menjadi array
//htmlspecialchars() 

//utility
//var_dump() mencetak isi var,arr,obj
//isset() var sdh dibuat atau belum
//empty() isi var ada atau tidak
//die() stop program
//sleep() memberhentikan sementara

?>