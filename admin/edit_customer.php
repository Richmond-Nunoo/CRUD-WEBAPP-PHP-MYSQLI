<?php
if(isset($_POST['update'])){
	include('session.php');
	$id=$_GET["id"];
	$username=$_POST["username"];
	$emboss=$_POST["emboss"];
	$stype=$_POST["stype"];
	$station=$_POST["station"];
	$department=$_POST["department"];
	$town=$_POST["town"];
	$region=$_POST["region"];
	$snumber=$_POST["snumber"];
	$avail=$_POST["avail"];
	$comment=$_POST["comment"];

	$use=mysqli_query($conn,"select * from user where userid='id'");
	$urow=mysqli_fetch_array($use);

	mysqli_query($conn,"update user set username='$username' where userid='$id'");
	mysqli_query($conn,"update customer set emboss='$emboss', stype='$stype', station='$station', department='$department', town='$town', region='$region', snumber='$snumber', avail='$avail', comment='$comment' where userid='$id'");
}
	?>
		<script>
			window.alert('Computer records updated successfully!');
			window.history.back();
		</script>
	<?php
?>