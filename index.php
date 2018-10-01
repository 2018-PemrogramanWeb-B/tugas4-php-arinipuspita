<!DOCTYPE html>

<?php
	session_start ();
	$username = "tarara_wehui";
	$password = "jww170796";
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
			header("Location: berhasil.php");
	}
	if(isset($_POST['username']) && isset($_POST['password'])){
	if($_POST['username'] == $username && $_POST ['password'] == $password)
	{
		$_SESSION['loggedin'] = true;
		header("Location:  berhasil.php");
	}
	}
?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login-box">
<h1>Login Here</h1>
<form method ="post" action="index.php">
<p>Username:</p>
<input type="text" name="username" placeholder="Username"><br/>
<p>Password:</p>
<input type="password" name="password" placeholder="Password"><br/>
<input type="submit" name="submit" value="Login">
<br>Don't have an account yet??<a href="formvalidation.php">Sign Up Here
</div>
</body>

</html>