<?php
include "config.php";

if(isset($_GET['id'])){

	$user_id=$_GET['id'];

	$sql="SELECT * FROM users WHERE id='".$user_id."'";

	$result=$conn->query($sql);

	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			$id=$row['id'];
			$first_name=$row['first_name'];?>
			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
			</head>
			<body>
			<form action="" method="POST">
				<input type="hidden" name="id" value="<?php echo $row['id']?>">
				<input type="text" name="first_name" value="<?php echo $row['first_name']?>">
				<input type="submit" name="update" value="update">
			</form>
			</body>
			</html>
		<?php }

		if(isset($_POST['update'])){

			$id=$_POST['id'];
			$first_name=$_POST['first_name'];

			$sql="UPDATE `users` SET `first_name`='$first_name' WHERE `id`='$id'";
			$conn->query($sql);
		}

	}else{
		header("location:view.php");
	}
}

?>