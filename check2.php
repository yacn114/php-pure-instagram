<?php 
include 'dbs/config.php';
$user =$_COOKIE['loginUser'];
$id = mysqli_query($link,"select PersonID from Users where username = '$user'");
$user_id = mysqli_fetch_assoc($id);
$userid = $user_id['PersonID'];
if (isset($_POST['commentbox'])) {
	$caption = $_POST['commentbox'];
	
	$date = date("Y-m-d");
	
	$postid = (int)$_GET['postid'];
	$sql = "INSERT INTO comment (PostID,commentText,`time`,Tlike,commentW,userid) VALUES ('$postid','$caption','$date',0,'$user','$userid')";
	$query = mysqli_query($link,$sql);
	if ($query){
		header("location:comment.php?id=$postid");
	}else{
		header("location:panel.php");

	}
}else{
	header("location:panel.php");
}




?>