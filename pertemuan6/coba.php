<?php 
$material=[
			["kelompok" => "Street Lamp","kategori" => "Mechanical Part", "kode part" => "PBD.MCC.AOT.001", "deskripsi" => "AL Reflector Street Lamp COB", "satuan" => "pcs", "stock" => "203","gambar" => "1.png"],
			["kelompok" => "Bulb Lamp","kategori" => "Part Elektronik", "kode part" => "PBD.ELP.TAI.002", "deskripsi" => "Chip R2 - 510K/470 Kohm Carbon
(RM12JT514/RM12JT474)", "satuan" => "pcs ", "stock" => "5000","gambar" => "2.jpg"],
			["kelompok" => "Tube Lamp			 	","kategori" => "Packing Case", "kode part" => "PBD.PCK.ABS.006	", "deskripsi" => "Outer Case Tube Lamp 120 cm", "satuan" => "pcs ", "stock" => "30"],
			["kelompok" => "Showcase","kategori" => "PCB", "kode part" => "PBD.PCB.WBI.003", "deskripsi" => "PCB Showcase
(PCB GJAMT0IE)", "satuan" => "pcs", "stock" => "5120"],
			["kelompok" => "High Bay","kategori" => "Mechanical Part", "kode part" => "PBD.MCC.NPW.003", "deskripsi" => "Safety Rope", "satuan" => "pcs", "stock" => "1260"],
			["kelompok" => "Flood Light","kategori" => "Mechanical Part	", "kode part" => "-", "deskripsi" => "Frame LED Flood Light 2 Module/100W", "satuan" => " pcs", "stock" => "8"]
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
 	<?php foreach($material as $m) : ?>
 		<ol>
 			<li>
 				<img src="img/<?php echo $m["gambar"]; ?>">
 			</li>
 			<li>Kelompok : <?php echo $m["kelompok"]; ?></li>
 			<li>kategori : <?php echo $m["kategori"]; ?></li>
 			<li>kode part : <?php echo $m["kode part"]; ?></li>
 			<li>deskripsi : <?php echo $m["deskripsi"]; ?></li>
 			<li>satuan : <?php echo $m["satuan"]; ?></li>
 			<li>stock : <?php echo $m["stock"]; ?></li>
 		</ol>

 	<?php endforeach; ?>
 </body>
 </html>
