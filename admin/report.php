
<!--New Connection-->
<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<script src="bootstrap.min.js"></script>
<script src="jquerylib.js"></script>


<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">

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
            <h2 class="page-header">Reports
				<span class="pull-right">
				</span>
			</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        <div style="text-align: left;">
        <button onclick="window.print()" class="btn btn-primary" >Print <i class="fa fa-print" aria-hidden="true"></i></button>

        <a href="export.php"> <button type="button" class="btn btn-primary">Export To Excel<i class="fa fa-file-excel-o" aria-hidden="true"><div style="width: 20px;"></div></i></button> </a>
        </div>
        <div style="height:50px;"></div>
            <table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
                <thead>
                    <tr>
					<th>ID</th>
                        <th>Embossment ID</th>
                        <th>Device Type</th>
						<th>Station</th>
                        <th>Department</th>
						<th>Model</th>
						<th>Region</th>
                        <th>Serial Number</th>
						<th>Status</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					$cq=mysqli_query($conn,"select * from customer ");
					while($cqrow=mysqli_fetch_array($cq)){
					?>
						<tr>
						    <td><?php echo $cqrow['userid']; ?></td>
							<td><?php echo strtoupper($cqrow['emboss']); ?></td>
							<td><?php echo $cqrow['stype']; ?></td>
							<td><?php echo ucwords($cqrow['station']); ?></td>
							<td><?php echo ucwords($cqrow['department']); ?></td>
							<td><?php echo ucwords($cqrow['town']); ?></td>
							<td><?php echo ucwords($cqrow['region']); ?></td>
                            <td><?php echo strtoupper($cqrow['snumber']); ?></td>
							<td><?php echo strtoupper($cqrow['avail']); ?></td>
                            <td><?php echo strtoupper($cqrow['comment']); ?></td>
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
<!--Excel n stuff-->




<!--Modal Content--->
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<script src="custom.js"></script>

</body>
</html>


