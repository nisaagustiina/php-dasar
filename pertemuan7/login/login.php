<?php 
//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
//cek uname dan pw
	if($_POST["uname"] == "admin" && $_POST["pw"] == "password" ){
//jika benar redirect ke halaman admin
		header("Location:admin.php");
		exit;
	}else{
		$error=true;
//jika salah tampilkan pesan salah
	}
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(isset($error)) : ?>
	<p style="color: red; font-style: italic;" >uname/pw salah</p>
	<?php endif; ?>
<h1>Login Admin</h1>
<ul>
<form action="" method="post">
	<li>
		<label for="uname">Username : </label>
		<input type="text" name="uname" id="uname">
	</li>
	<li>
		<label for="pw">Password : </label>
		<input type="password" name="pw" id="pw">
	</li>
	<li>
		<button type="submit" name="submit">Login</button>
	</li>
</form>
</ul>
</body>
</html>