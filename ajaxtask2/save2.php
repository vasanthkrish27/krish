<?php
	include 'database2.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql = "INSERT INTO `info`( `name`, `email`, `password`) 
	VALUES ('$name','$email','$password')";
	if (mysqli_query($conn, $sql)) {
		
		echo "Succssfully Inserted";
	} 

	else {
		echo  "Failed";
	}
	mysqli_close($conn);
?>
 