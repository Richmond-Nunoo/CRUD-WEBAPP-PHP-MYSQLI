<?php
if(isset($_POST['save']))
$username="";
$password="";
{

    include('session.php');
    include("../conn.php");
    $stname = $_POST['stname'];
    $cnumber = $_POST['cnumber'];
    $depart = $_POST['depart'];
    $rank = $_POST['rank'];


    $sql = "INSERT INTO stuff (stname, cnumber, depart,rank,bimg)
            VALUES(?,?,?,?,?);
        ";
    if(!$stname){
        echo '
                <div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Error!</strong> Staff Name is Required.
                </div>
            ';
    }else if(!$cnumber){
        echo '
                <div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Error!</strong> Contact Number is Required.
                </div>
            ';
    }else{

        $new_image_name = 'image_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
        // do some checks to make sure the file you have is an image and if you can trust it
        move_uploaded_file($_FILES["bimg"]["tmp_name"], "../boat_image/".$new_image_name);
        $new_image_name = '../boat_image/'.$new_image_name;
        //echo $new_image_name;

        if(empty($_FILES["bimg"]["tmp_name"])){
            $new_image_name = '../boat_image/'.'default.png';
        }


        mysqli_query($conn,"insert into user (username, password, access) values ('$username', '$password', '2')");
        $userid=mysqli_insert_id($conn);

        mysqli_query($conn,"insert into stuff (userid, stname, cnumber, depart, rank, bimg) values ('$userid','$stname', '$cnumber', '$depart', '$rank', '$new_image_name')");
    //$new_image_name

      //  $res = $db->insertRow($conn, [$stname,$cnumber,$depart,$rank, $new_image_name]);
      //  if($res)
      //  {
      //      echo '
       //         <div class="alert alert-success">
       //           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        //          <strong>Success!</strong> Save Successfully.
         //       </div>
         //   ';
       // }//end if $ress
       
    }
}

?>
  <script>
			window.alert('Staff Added successfully!');
			window.history.back();
  </script>
  <?php
  
  ?>