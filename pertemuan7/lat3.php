<?php 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
<?php if(isset($_POST["submit"])) : ?>
	<h1>Welcome, <?php echo $_POST["nama"]; ?></h1>
<?php endif; ?>
<form action="lat4.php" method="post">
	Masukan Nama:
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submmit" >kirim!</button>
</form>
</body>
</html>