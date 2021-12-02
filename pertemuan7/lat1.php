<?php 
//var scope / lingkup var
// $x=10;

// function tampilx(){
// 	global $x;
// 	echo " $x";
// }
// tampilx();


// superglobals
//var global milik php
//array assosiative
//$_GET, $_POST, $_SERVER, $_REQUEST, $_SESSION, $_COOKIE, $_ENV

// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];

//$_GET

$material=[
			["kelompok" => "Street Lamp","kategori" => "Mechanical Part", "kodepart" => "PBD.MCC.AOT.001", "deskripsi" => "AL Reflector Street Lamp COB", "satuan" => "pcs", "stock" => "203","gambar" => "1.png"],
			["kelompok" => "Bulb Lamp","kategori" => "Part Elektronik", "kodepart" => "PBD.ELP.TAI.002", "deskripsi" => "Chip R2 - 510K/470 Kohm Carbon
(RM12JT514/RM12JT474)", "satuan" => "pcs ", "stock" => "5000","gambar" => "2.jpg"],
			["kelompok" => "Tube Lamp			 	","kategori" => "Packing Case", "kodepart" => "PBD.PCK.ABS.006	", "deskripsi" => "Outer Case Tube Lamp 120 cm", "satuan" => "pcs ", "stock" => "30"],
			["kelompok" => "Showcase","kategori" => "PCB", "kodepart" => "PBD.PCB.WBI.003", "deskripsi" => "PCB Showcase
(PCB GJAMT0IE)", "satuan" => "pcs", "stock" => "5120"],
			["kelompok" => "High Bay","kategori" => "Mechanical Part", "kodepart" => "PBD.MCC.NPW.003", "deskripsi" => "Safety Rope", "satuan" => "pcs", "stock" => "1260"],
			["kelompok" => "Flood Light","kategori" => "Mechanical Part	", "kodepart" => "-", "deskripsi" => "Frame LED Flood Light 2 Module/100W", "satuan" => " pcs", "stock" => "8"]
];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style>
 		body{
 			background-color: #BADA55;
 			margin: 5px;
 			float: center;
 		}
 	</style>
 </head>
 <body>
 	<h1>Bahan Baku</h1>
	<ul>
	 	<?php foreach($material as $m) : ?>
	 	<li>
	 		<a href="lat2.php?kelompok=<?php echo $m["kelompok"]; ?> &kategori=<?php echo $m["kategori"];?> &kodepart=<?php echo["kodepart"];?> &deskripsi= <?php echo["deskripsi"];?> &satuan=<?php echo["satuan"];?> &stock=<?php echo["stock"];?> "><?php echo $m["kelompok"]; ?></a>
	 	</li>
	 	<?php endforeach; ?>
	 </ul>
	
 </body>
 </html>
