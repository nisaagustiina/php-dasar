<?php 
//looping pada array
//for / foreach
$angka=[3,20,22,77,89,22];
?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>lat2</title>
 	<style>
 		.kotak{
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		.clear {clear:both;}
 		}
 	</style>
 </head>
 <body>
 	<?php for($i = 0; $i < count($angka); $i++ ) : ?>
 <div class="kotak"> <?php echo $angka[$i]; ?></div>
	<?php endfor; ?>
 </body>
 </html>


<div class="clear"></div>
<?php foreach ( $angka as $a) { ?>
	<div class="kotak"><?php echo $a; ?></div>
<?php } ?>