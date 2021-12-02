<?php 
require 'function.php';
if(isset($_POST["login"])){
	$uname = $_POST["uname"];
	$pw = $_POST["pw"];

	$result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$uname' AND password='$pw'");
	header("Location:index.php");
	//cek uname
// 	if(mysqli_num_rows($result) == 1 ){
// 		//cek pw
// 		$row = mysqli_fetch_assoc($result);
// 		if(password_verify($pw, $row["password"])){
// 			header("Location:index.php");
// 			exit;
// 		}


// 	$error = true;
// }

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
		<button type="submit" name="login">Login</button>
	</ul>
</form>
</body>
</html>