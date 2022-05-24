<?php
include '../dbs/config.php';
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$about = $_POST['about'];
	$password = $_POST['password'];
	$coo = $_COOKIE['loginUser'];
	

	$filename = $_FILES["fileimg"]["name"];
	$tempname = $_FILES["fileimg"]["tmp_name"];
	$folder = "image/".str_replace(" ","",$filename);
	
	
	move_uploaded_file (
  	$_FILES["fileimg"]["tmp_name"], $folder);
	
	$sql = "update Users SET image = '$folder', username='$username' , about = '$about' , passowrd = '$password' where username = '$coo'";
	$query = mysqli_query($link,$sql);
	if ($query){
		unset($_COOKIE['loginUser']);
		setcookie( "loginUser", $username, strtotime( '+9 days' ), "/", "127.0.0.1", 1);
		

		header("location:index.php");
	}else{
		header("location:index.php");

	}
}else{
	header("location:index.php");
}




?>