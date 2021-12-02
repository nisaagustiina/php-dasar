<?php 
require 'function.php';
if(isset($_POST["signup"])){
	if(signup($_POST) > 0){
		echo"<script>
		alert('user berhasil ditambahkan');
		</script>";
	}else{
		echo mysqli_error($conn);
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<style type="text/css">
		label{display : block;}
	</style>
</head>
<body>
<h1>Halaman Registrasi</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="uname">Username : </label>
			<input type="text" name="uname" id="uname">
		</li>
		<li>
			<label for="pw">Password : </label>
			<input type="password" name="pw" id="pw">
		</li>
		<li>
			<label for="pw2">Konfirmasi password : </label>
			<input type="text" name="pw2" id="pw2">
		</li>
		<button type="submit" name="signup">Sign Up</button>
	</ul>
</form>
</body>
</html>