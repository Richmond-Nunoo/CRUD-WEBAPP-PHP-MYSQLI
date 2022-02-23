
<!--New Connection-->
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
<!-- <div class="center" > <img src="mine.jpg"alt=""> -->
</div>
<br>
<!--Working on background color-->
<div style="background-color: wheat; width:150px;">
<?php echo "Date ".date("d-m-Y");?>
<br>
<!--Set timezone-->
<?php
date_default_timezone_set("GMT");
echo "Time: ".date("h:ia");
?>
</div>





<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 25%;
}
</style>
<hr>
            <h2 class="page-header">COMPUTER DISTRIBUTION DATABASE
				<span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addcustomer"><i class="fa fa-plus-circle"></i> Add Computer</button>
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
                        <th>Embossment ID</th>
                        <th>Device Type</th>
						<th>Station</th>
                    <!--    <th>Department</th>
						<th>Model</th>
						<th>Region</th> -->
                        <th>Serial Number</th>
						<th>Status</th>
                        <th>Comments</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					$cq=mysqli_query($conn,"select * from customer");
					while($cqrow=mysqli_fetch_array($cq)){
					?>
						<tr>
						    <td><?php echo $cqrow['userid']; ?></td>
							<td><?php echo strtoupper($cqrow['emboss']); ?></td>
							<td><?php echo $cqrow['stype']; ?></td>
							<td><?php echo ucwords($cqrow['station']); ?></td>

                            <td><?php echo strtoupper($cqrow['snumber']); ?></td>
							<td><?php echo strtoupper($cqrow['avail']); ?></td>
                            <td><?php echo strtoupper($cqrow['comment']); ?></td>
							<td>
<!--Preview-->
						    	<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#preview<?php echo $cqrow['userid']; ?>"><i class="fa fa-eye"></i></button>
<!--Preview-->


<!--New Edit-->

<!--New Edit-->

								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit_<?php echo $cqrow['userid']; ?>"><i class="fa fa-edit"></i></button>

								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#del_<?php echo $cqrow['userid']; ?>"><i class="fa fa-trash"></i></button>
								<?php include('user_button.php'); ?>
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

<!--Modal Content--->
<div id="view_" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-body" id="load_data">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>

<!---work-->




<!--Modal Content--->
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<script src="custom.js"></script>

</body>
</html>

<!--	<td>  echo ucwords($cqrow['department']); ?></td>
<td> echo ucwords($cqrow['town']); ?></td>
<td> echo ucwords($cqrow['region']); ?></td> -->
