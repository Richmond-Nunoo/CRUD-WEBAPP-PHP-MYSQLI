<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apos";
$output = '';
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT * FROM customer where id=".$userid;
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {

//Fetchs results from database
$output .="
<div class='row'><div class='col-sm-12'>

<img src='".$row["image"]."' style='height:100px;width:100px;text-align:Center'></div>.</div>

<div class='col-sm-6'>Name ".$row["name"]."</div></div>
<div class='row'> <div class='col-sm-6'>Gender: ".$row["gender"]."</div>
</div><div class='row'><div class='col-sm-6'>Designation: ".$row["designation"]."</div>
<div class='col-sm-6'>age: ".$row["age"]."</div></div>";
}  //Fetchs results from database

echo $output;
mysqli_close($conn);
?>
