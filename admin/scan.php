
<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<?php
$con = mysqli_connect("localhost","root","","apos");
if (mysqli_connect_errno()) {
echo "Unable to connect to MySQL! ". mysqli_connect_error();
}
if (isset($_POST['save'])) {
$target_dir = "Uploaded_Files/";
$target_file = $target_dir . date("dmYhis") . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg" || $imageFileType != "gif" ) {
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
$files = date("dmYhis") . basename($_FILES["file"]["name"]);
}else{
echo "Error Uploading File";
exit;
}
}else{
echo "File Not Supported";
exit;
}
$filename = $_POST['filename'];
$location = "Uploaded_Files/" . $files;
$sqli = "INSERT INTO `tblfiles` (`FileName`, `Location`) VALUES ('{$filename}','{$location}')";
$result = mysqli_query($con,$sqli);
if ($result) {
echo " <script>
window.alert('Scanned Document Added successfully!');
window.history.back();
</script>";
};
}
?>



<!--Files-->
<!--Picture-->
<div class="center" > <img src="immi.png"alt="">
</div>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 25%;
}
</style>
<!--Picture-->
<hr>

<div class="container">

<!--Files--->
<h1>Release Notes</h1>
<form class="form-group" method="post" action="" enctype="multipart/form-data">
<Label>Station:</Label> <br>
<input type="text" name="filename" class="form-control" placeholder="Enter Releasing/Receiving Station" style="width: 320px;" required>
<div style="margin-left: 1%">
<label>File:</label>
<input type="file" name="file">
</div>
<button type="submit" name="save" class="btn"><i class="fa fa-upload fw-fa"></i> Upload</button>
</form>



<!--Filesssss------->
<div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
                <thead>
                <tr>
				     	<th>ID</th>
					    <th>Filename</th>
					    <th>Download</th>
                    </tr>
                </thead>
                <tbody>
				<!--Table-->
				<?php
$sqli = "SELECT * FROM `tblfiles`";
$res = mysqli_query($con, $sqli);
while ($row = mysqli_fetch_array($res)) {
echo '<tr>';
echo'<td>'.$row['ID'].'</td>';
echo '<td>'.$row['FileName'].'</td>';
echo '<td><a class="btn" href="'.$row['Location'].'">View</a></td>';
echo '</tr>';
}
mysqli_close($con);
?>
				<!--Table-->
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--Tables nice-->

</div>
</div>
<!--Table nice-->
<!--Release-->
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('addrelease_modal.php'); ?>
<script src="custom.js"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>