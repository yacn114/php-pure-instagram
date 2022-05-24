<?php
include '../dbs/config.php';
if (isset($_POST['submit'])) {
	$username= $_POST['username'];
	$password= $_POST['password'];
	$email= $_POST['email'];
	if (empty($email) or empty($password) or empty($username)) {
		header("location:sign-up.php?box=empty");
	}
	$query = "INSERT INTO `Users` (username,email,passowrd,follower,following,about,admin,image,Tpost) VALUES ('$username','$email','$password','0','0','',false,'https://www.kindpng.com/picc/m/21-214439_free-high-quality-person-icon-default-profile-picture.png','0')";

	$sql = mysqli_query($link,$query);
	if ($sql) {
		header("location:index.php?ok=1");
	}else{
		header("location:sign-up.php?security=0");
		
	}
	
}else {
	header("location:sign-up.php?security=0");
}
?>