<?php  
include '../dbs/config.php';
// $user =$_COOKIE['loginUser'];
// $id = mysqli_query($link,"select PersonID from Users where username = '$user'");
// $user_id = mysqli_fetch_assoc($id);
// $userid = $user_id['PersonID'];
if (isset($_POST['follow'])) {
	$username = $_GET['user'];
	$idFollower = $_GET['user2'];
	
	// follow table
	$sqluser11 = mysqli_query($link,"SELECT PersonID FROM Users where username = '$username'");
	$sqluser22 = mysqli_query($link,"SELECT PersonID FROM Users where username = '$idFollower'");
	$fetch1 = mysqli_fetch_assoc($sqluser22);
	$fetch2= mysqli_fetch_assoc($sqluser11);
	$r1 = $fetch1['PersonID'];
	$r2 = $fetch2['PersonID'];
	$sql = "INSERT INTO Follow (FollowerID,FollowingID) VALUES ('$r1','$r2')";
	$query = mysqli_query($link,$sql);
	// end follow Table 


	// start User table
	$numsql = mysqli_query($link,"UPDATE Users SET follower = follower + 1 where username = '$username'");
	$numsql2 = mysqli_query($link,"UPDATE Users SET following = following + 1 where username = '$idFollower'");
	// end user table

	
	if ($numsql){
		header("location:index.php?u=$username");
	}else{
		header("location:../panel.php");

	}
}else{
	header("location:../panel.php");
}






?>