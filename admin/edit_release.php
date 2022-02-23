<?php
if(isset($_POST['update'])){
	include('session.php');
	$id=$_GET["id"];
	$username=$_POST["username"];
	$fstation=$_POST["fstation"];
	$rstation=$_POST["rstation"];
	$equip=$_POST["equip"];
	$date=$_POST["date"];
	$qty=$_POST["qty"];
	$snum=$_POST["snum"];
	$model=$_POST["model"];
	$use=mysqli_query($conn,"select * from user where userid='id'");
	$urow=mysqli_fetch_array($use);

	mysqli_query($conn,"update user set username='$username' where userid='$id'");
	mysqli_query($conn,"update releasenote set fstation='$fstation', rstation='$rstation', equip='$equip', date='$date', qty='$qty', snum='$snum', model='$model' where userid='$id'");
}
	?>
		<script>
			window.alert('Computer records updated successfully!');
			window.history.back();
		</script>
	<?php
?>