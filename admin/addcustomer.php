<?php
$username="";
$password="";
if(isset($_POST['save'])){
	include('session.php');
	$emboss=$_POST["emboss"];
	$stype=$_POST["stype"];
	$station=$_POST["station"];
	$department=$_POST["department"];
	$town=$_POST["town"];
	$region=$_POST["region"];
	$snumber=$_POST["snumber"];
	$avail=$_POST["avail"];
	$comment=$_POST["comment"];


	//Flagging the serial Number
	//$flag=mysqli_query($conn,"SELECT * from customer WHERE snumber='$snumber'");
	//if(mysqli_num_rows($flag)>0){
	//	echo"<script>
	//		window.alert('Serial number Exists already in the System!');
	//		window.history.back();
	//	</script>";
	//}


//Prevent Duplicate Entry
	$dup=mysqli_query($conn,"SELECT * from customer WHERE emboss='$emboss'");
	$flag=mysqli_query($conn,"SELECT * from customer WHERE snumber='$snumber'");
	if(mysqli_num_rows($dup)>1){
//	echo"<script>alert('Embossed Number Exist already!')</script>";
	echo"<script>
			window.alert('Embossment Exists already!');
			window.history.back();
		</script>";
	}
	elseif(mysqli_num_rows($flag)>0){
		echo"<script>
		window.alert('Serial Number Already Exists!');
		window.history.back();
	</script>";
	}
	else{
	mysqli_query($conn,"insert into user (username, password, access) values ('$username', '$password', '2')");
	$userid=mysqli_insert_id($conn);

	mysqli_query($conn,"insert into customer (userid, emboss, stype, station, department, town, region,snumber, avail, comment) values ('$userid','$emboss', '$stype', '$station', '$department', '$town','$region','$snumber','$avail','$comment')");
	}
}
	?>
    <script>
			window.alert('Embossment Database Updated!');
			window.history.back();
		</script>
	<?php
?>