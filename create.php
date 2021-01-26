<?php
include "config.php";
if(isset($_POST["submit"])){

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="INSERT INTO `users`(`first_name`, `last_name`, `email`, `password`) VALUES ('$first_name','$last_name','$email','$password')";
	$conn->query($sql);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Stud Reg</title>
</head>
<body>
<form action="" method="POST">
	<label>First Name</label>
	<input type="text" name="first_name" placeholder="Enter your first name">
	<label>Last Name</label>
	<input type="text" name="last_name" placeholder="Enter your last name">
	<label>email</label>
	<input type="email" name="email" placeholder="Enter your email">
	<label>password</label>
	<input type="password" name="password" placeholder="Enter your password">
	<button name="submit" type="submit">REGISTER</button>


</form>
</body>
</html>