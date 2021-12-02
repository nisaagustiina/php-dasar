<?php 
session_start();
require 'function.php';

//cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
	$id=$_COOKIE['id'];
	$key=$_COOKIE['key'];

	$result=mysqli_query($conn,"SELECT username FROM user WHERE id=$id");
	$row = mysqli_fetch_assoc($result);

	//cek cookie dan uname
	if($key === hash('sha256',$row['username']) ){
		$_SESSION['login'] = true;
	}
}


if(isset($_SESSION['login'])){
	header("Location:index2.php");
	exit;
}

if(isset($_POST["login"])){
	$uname = $_POST["uname"];
	$pw = $_POST["pw"];

	$result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$uname'");

	//cek uname
	if(mysqli_num_rows($result) === 1 ){
		//cek pw
		$row = mysqli_fetch_assoc($result);
		if(password_verify($pw, $row["password"])){
			//set session 
			$_SESSION["login"] = true;

			//cek remember me
			if(isset($_POST['remember'])){

				//buat cookie
				setcookie('id',$row['id'], time()+60);
				setcookie('key',hash('sha256',$row['username']), time()+60);
			}
			
			header("Location:index2.php");
			exit;
		}

	}

	$error = true;


}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<h1>Halaman Login</h1>
	<?php if(isset($error)): ?>
		<p style="color: red; font-style: italic;">uname/password salah</p>
	<?php endif; ?>
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
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">Remember Me </label>
			<br>
		<button type="submit" name="login">Login</button>
	</ul>
</form>
</body>
</html>