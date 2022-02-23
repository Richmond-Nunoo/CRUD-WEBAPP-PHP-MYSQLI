<!--View All Button-->
<div class="modal fade" id="preview<?php echo $cqrow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">View Staff List</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<?php
						$a=mysqli_query($conn,"select * from stuff where userid='".$cqrow['userid']."'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="viewstuff.php<?php echo '?id='.$cqrow['userid']; ?>">


                    <div class="modal-body">
						      		<div class="row">
						      			<div class="col-md-6">
						      				<img src="<?php echo $b['bimg'] ?>" height="250" width="250">
											<p> <center> Profile Picture</center></p>
						      			</div>
						      			<div class="col-md-6">
						      				<form>
						      					<strong>Name: </strong><?php echo $b['stname'] ?><br />
												  <hr>
							      				<strong>Department: </strong><?php echo $b['depart'] ?><br/>
<hr>
                                                <strong>Contact Number: </strong><?php echo $b['cnumber'] ?><br/>
                                                <hr>
                                                <strong>Rank: </strong><?php echo $b['rank'] ?><br/>
						      				</form>
						      			</div>
						      		</div>
						      </div>
                        <div style="height:6px;"></div>
						<div style="height:10px;"></div>
						<div style="height:10px;"></div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
					</form>
                </div>
        </div>
    </div>
</div>

<!--View all Modal-->






<!-- Delete Customer -->
    <div class="modal fade" id="del_<?php echo $cqrow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Staff</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from stuff where userid='".$cqrow['userid']."'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Stuff list <strong><?php echo ucwords($b['stname']); ?></strong></center></h5>
					<form role="form" method="POST" action="deletestuff.php<?php echo '?id='.$cqrow['userid']; ?>">
                </div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->










<!-- Edit Customer -->
    <div class="modal fade" id="edit_<?php echo $cqrow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Computer</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from stuff left join user on user.userid=stuff.userid where stuff.userid='".$cqrow['userid']."'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_stuff.php<?php echo '?id='.$cqrow['userid']; ?>">

<!--Edit Device Type-->
<div style="height:6px;"></div>
   <!---Drop down list-->
   <div class="form-group">
        <Label>Staff Name</Label>
        <br>
        <input class="form-control" id="inputdefault"  name="userid" type="hidden" value =" <?php echo $b['userid'] ?>">
        <input type="text" name="stname" class="form-control" placeholder="Stuff Name" style="text-transform: uppercase; width:480px;"  value="<?php echo $b['stname'] ?>" class="form-control" name="stname" required>
 </div>
<!--Edit Device Type-->
<div style="height:6px;"></div>
<!--Station -->
        <div class="form-group">
            <Label>Contact Number</Label>
            <br>
            <input type="text" name="cnumber" class="form-control" placeholder="Enter Contact Number" style="text-transform: uppercase; width:480px;" value="<?php echo $b['cnumber'] ?>" class="form-control" name="cnumber"required>
        </div>
<!--Station-->
<div style="height:6px;"></div>

<!--Department -->
<div class="form-group">
            <Label>Department</Label>
            <br>
            <input type="text" name="depart" class="form-control" placeholder="Department" style="text-transform: uppercase; width:480px;" value="<?php echo $b['depart'] ?>" class="form-control" name="depart"required>
        </div>
<!--Department-->
<div style="height:6px;"></div>
<!--Town-->

<!--Town-->
<div style="height:6px;"></div>
<div style="height:6px;"></div>

 <!--Availability -->
 <div class="form-group">
        <Label>Rank</Label>
        <br>
        <input type="text" name="rank" class="form-control" placeholder="Enter rank" style="text-transform: uppercase; width:480px"  value="<?php echo $b['rank'] ?>" class="form-control" name="rank" required>
 </div>
<!--Model -->
<hr>
 <!--Availability -->
 <label> Change Picture</label>
 <br>
 <input type="hidden" name="oldbimg" value="<?php echo $b['bimg'] ?>">
					   <div class="form-group">
				       <label for="inputdefault"></label>
					 <input class="form-control" id="inputdefault" name="bimg" type="file">
</div>
<!--Model -->


						<div style="height:10px;"></div>
						<div style="height:10px;"></div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" name="update" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
					</form>
                </div>
        </div>
    </div>
<!-- /.modal -->