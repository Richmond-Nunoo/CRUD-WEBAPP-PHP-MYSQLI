<?php
	include('session.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from user where userid='$id'");
	mysqli_query($conn,"delete from releasenote where userid='$id'");
	header('location:release.php');
?>