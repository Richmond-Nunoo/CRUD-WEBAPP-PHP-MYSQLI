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
<?php echo "Date ".date("d-m-Y");?>
<br>
<!--Set timezone-->
<?php
date_default_timezone_set("GMT");
echo "Time: ".date("h:ia");
?>
</div>
<hr>
            <h2 class="page-header">RELEASE NOTES
				<span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addrelease"><i class="fa fa-plus-circle"></i> Add Releasing Note</button>
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
					    <th>Releasing Station</th>
					    <th>Receiving Station</th>
                        <th>IT EQUIPMENT</th>
                        <th>Date</th>
						<th>Quantity</th>
                        <th>Serial Number</th>
						<th>Model</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
					$cq=mysqli_query($conn,"select * from releasenote left join user on user.userid=releasenote.userid");
					while($cqrow=mysqli_fetch_array($cq)){
					?>
						<tr>
						    <td><?php echo $cqrow['userid']; ?></td>
							<td><?php echo strtoupper($cqrow['fstation']); ?></td>
							<td><?php echo $cqrow['rstation']; ?></td>
							<td><?php echo ucwords($cqrow['equip']); ?></td>
							<td><?php echo ucwords($cqrow['date']); ?></td>
							<td><?php echo ucwords($cqrow['qty']); ?></td>
							<td><?php echo ucwords($cqrow['snum']); ?></td>
							<td><?php echo strtoupper($cqrow['model']); ?></td>
							<td>
							<!--Preview-->
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#preview<?php echo $cqrow['userid']; ?>"><i class="fa fa-eye"></i></button>
                            <!--Preview-->
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit_<?php echo $cqrow['userid']; ?>"><i class="fa fa-edit"></i></button>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#del_<?php echo $cqrow['userid']; ?>"><i class="fa fa-trash"></i></button>
								<?php include('r_button.php'); ?>
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
<?php include('addrelease_modal.php'); ?>
<script src="custom.js"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>