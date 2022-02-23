<?php
$username="";
$password="";
if(isset($_POST['save'])){
	include('session.php');
	//file upload
	$fstation=$_POST["fstation"];
	$rstation=$_POST["rstation"];
	$equip=$_POST["equip"];
	$date=$_POST["date"];
	$qty=$_POST["qty"];
	$snum=$_POST["snum"];
	$model=$_POST["model"];
	//File upload

//Prevent Duplicate Entry
	$dup=mysqli_query($conn,"SELECT * from releasenote WHERE snum='$snum'");
	if(mysqli_num_rows($dup)>0){
//	echo"<script>alert('Embossed Number Exist already!')</script>";
	echo"<script>
			window.alert('Embossment Exists already!');
			window.history.back();
		</script>";
	}
	else{
	mysqli_query($conn,"insert into user (username, password, access) values ('$username', '$password', '2')");
	$userid=mysqli_insert_id($conn);

	mysqli_query($conn,"insert into releasenote (userid, fstation, rstation, equip, date, qty, snum, model) values ('$userid','$fstation', '$rstation', '$equip', '$date', '$qty','$snum','$model')");
	}
}


	?>
    <script>
			window.alert('Embossment Database Updated!');
			window.history.back();
		</script>
	<?php
?>