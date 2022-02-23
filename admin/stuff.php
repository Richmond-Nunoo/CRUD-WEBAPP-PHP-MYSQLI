<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
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
<div style="background-color: wheat; width:150px;">
<?php
date_default_timezone_set("GMT");
 echo "Date ".date("d-m-Y");
 ?>
<br>
<!--Set timezone-->
<?php
date_default_timezone_set("GMT");
echo "Time: ".date("h:ia");
?>
</div>
<hr>
            <h2 class="page-header">Staff List
				<span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus-circle"></i> Add New Staff</button>
				</span>
			</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
                <thead>
                    <tr>
					<th>ID</th>
					    <th>Stuff Name</th>
					    <th>Contact Number</th>
                        <th>Department</th>
                        <th>Rank</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
					$cq=mysqli_query($conn,"select * from stuff");
					while($cqrow=mysqli_fetch_array($cq)){
					?>
						<tr>
						    <td><?php echo $cqrow['userid']; ?></td>
							<td><?php echo strtoupper($cqrow['stname']); ?></td>
							<td><?php echo $cqrow['cnumber']; ?></td>
							<td><?php echo ucwords($cqrow['depart']); ?></td>
							<td><?php echo ucwords($cqrow['rank']); ?></td>
							<td>
							<!--Preview-->
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#preview<?php echo $cqrow['userid']; ?>"><i class="fa fa-eye"></i></button>
                            <!--Preview-->
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit_<?php echo $cqrow['userid']; ?>"><i class="fa fa-edit"></i></button>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#del_<?php echo $cqrow['userid']; ?>"><i class="fa fa-trash"></i></button>
								<?php include('s_button.php'); ?>
							</td>
						</tr>
					<?php
					}
				?>


                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<!--Release-->


<!--Release-->
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('addstuff_model.php'); ?>
<script src="custom.js"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>