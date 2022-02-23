<?php
if(isset($_POST['update'])){
	include('session.php');
	$id=$_GET["id"];
	$stname=$_POST["stname"];
	$cnumber=$_POST["cnumber"];
	$depart=$_POST["depart"];
    $rank=$_POST["rank"];
	$oldbimg=$_POST["oldbimg"];

	$use=mysqli_query($conn,"select * from user where userid='id'");
	$urow=mysqli_fetch_array($use);

	$new_image_name = 'image_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
    // do some checks to make sure the file you have is an image and if you can trust it
	move_uploaded_file($_FILES["bimg"]["tmp_name"], "../boat_image/".$new_image_name);
	$new_image_name = '../boat_image/'.$new_image_name;


	if(empty($_FILES["bimg"]["tmp_name"])){
	mysqli_query($conn,"update stuff set stname='$stname', cnumber='$cnumber', depart='$depart', rank='$rank' where userid='$id'");
	}else{
		mysqli_query($conn,"update stuff set stname='$stname', cnumber='$cnumber', depart='$depart', rank='$rank',bimg='$new_image_name' where userid='$id'");
		if($oldbimg != '../boat_image/default.png'){
			unlink($oldbimg);
		}
	}
}
	?>
		<script>
			window.alert('Stuff List updated successfully!');
			window.history.back();
		</script>
	<?php
?>