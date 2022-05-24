<?php 
if (isset($_POST['exit'])) {
	unset($_COOKIE['loginUser']);
	header("location:../index.php");
} 
?>