<?php 
$user =$_COOKIE['loginUser'];

include 'dbs/config.php';
$id = mysqli_query($link,"select PersonID from Users where username = '$user'");
$user_id = mysqli_fetch_assoc($id);
$userid = $user_id['PersonID'];
if (isset($_POST['submit'])) {
	$caption = $_POST['caption'];
	
	$date = date("Y-m-d");
	$filename = $_FILES["fileimg"]["name"];
	$tempname = $_FILES["fileimg"]["tmp_name"];
	$folder = "image/".str_replace(" ","",$filename);
	move_uploaded_file ($tempname, $folder);
	
	$sql = "INSERT INTO Posts (caption,image,`date`,Tlike,PostW,userid) VALUES ('$caption','$folder','$date',0,'$user','$userid')";
	$query = mysqli_query($link,$sql);
	if ($query){
		header("location:index.php?success=1");
	}else{
		header("location:panel.php");

	}
}else{
	header("location:panel.php");
}




?>