<?php
include "config.php";
session_start();
if(isset($_POST['submit'])){

	$email=$_POST['email'];
	$password=$_POST['password'];
	$_SESSION['email']=$email;

	$sql= "SELECT * FROM `users` WHERE email='".$email."' AND password='".$password."' ";

		$result=$conn->query($sql);

		if($result->num_rows>0){

				header("location:home.php");
		}else{
					echo "password or email is wrong";
		}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
<form action="" method="POST">
	
	<input type="email" name="email" placeholder="Enter yor email">
	<input type="password" name="password" placeholder="Enter your passsword">
	<input type="submit" name="submit" value="LOGIN">
</form>
</body>
</html>