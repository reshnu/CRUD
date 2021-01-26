<?php
include "config.php";

$sql="SELECT * FROM `users`";
$result=$conn->query($sql);

if($result->num_rows>0){
	while($row=$result->fetch_assoc()){?>

		<h1><?php echo $row['first_name'];?><a href="update.php?id=<?php echo $row['id']?>">EDIT</a></h1><br>
		<h1><?php echo $row['last_name'];?></h1>
	<?php }
}

?>