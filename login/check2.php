<?php 
include '../dbs/config.php';
if (isset($_POST['submit'])) {
	$username = htmlentities($_POST['username']);
	$password = htmlentities($_POST['password']);
	if (empty($password) or empty($username)) {
		header("location:index.php?box=empty");
	}
	$query = "SELECT `username`,`passowrd` FROM `Users` where `username` = '$username' AND `passowrd` = '$password'";
	$sql = mysqli_query($link,$query);
	if ($sql) {
	if (mysqli_num_rows($sql)>0) {
		 setcookie( "loginUser", $username, strtotime( '+9 days' ), "/", "127.0.0.1", 1);
		 header("location:../index.php");
	}else {
		
		header("location:index.php?security=0");

	}

}}else {
		header("location:index.php?security=0");
}
 ?>
 