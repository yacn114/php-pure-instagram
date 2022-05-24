<?php 
include 'dbs/config.php';
// $user =$_COOKIE['loginUser'];
// $id = mysqli_query($link,"select PersonID from Users where username = '$user'");
// $user_id = mysqli_fetch_assoc($id);
// $userid = $user_id['PersonID'];
if (isset($_POST['like'])) {
	
	
	
	
	$postid = (int)$_GET['id'];
	$idpos = (int)$_GET['idpos'];
	$sql = "UPDATE comment SET Tlike = Tlike + 1 where commentID = '$postid'";
	$query = mysqli_query($link,$sql);
	if ($query){
		header("location:comment.php?id=$idpos");
	}else{
		header("location:panel.php");

	}
}else{
	header("location:panel.php");
}




?>