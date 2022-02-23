<?php
	session_start();
	include('../conn.php');
	//mysqli_query($conn,"update userlog set logout=NOW() where userid='".$_SESSION['user']."'");
	session_destroy();
	header('location:../index.php');
?>