<!--View All Button-->

<!---View all Records-->

<!-- Edit Customer -->
<div class="modal fade" id="preview<?php echo $cqrow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">View Computer</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<?php
						$a=mysqli_query($conn,"select * from releasenote where userid='".$cqrow['userid']."'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="viewcustomer.php<?php echo '?id='.$cqrow['userid']; ?>">
<!--Embossment -->
<div class="form-group">
        <Label>Releasing Station</Label>
        <br>
        <input type="text" name="fstation" class="form-control" style="text-transform: uppercase; width:480px;"value="<?php echo ucwords($b["fstation"]);?>" class="form-control" name="fstation" disabled >
</div>
<!--Edit Device Type-->
<div style="height:6px;"></div>
   <!---Drop down list-->
   <div class="form-group">
            <Label>Receiving Station</Label>
            <br>
            <input type="text" name="rstation" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['rstation'] ?>" class="form-control" name="rstation" disabled>
  </div>
<!--Edit Device Type-->
<div style="height:6px;"></div>
<!--Station -->
<div class="form-group">
            <Label>Equipment Type</Label>
            <br>
            <input type="text" name="equip" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['equip'] ?>" class="form-control" name="equip" disabled>
  </div>
<div style="height:6px;"></div>

<!--Department -->
<div class="form-group">
            <Label>Date</Label>
            <br>
            <input type="text" name="date" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['date'] ?>" class="form-control" name="date" disabled>
  </div>
<!--Department-->
 <div style="height:6px;"></div>
 <div class="form-group">
            <Label>Quantity</Label>
            <br>
            <input type="text" name="town" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['qty'] ?>" class="form-control" name="qty" disabled>
  </div>


<!--Town-->

<!--Town-->
<div style="height:6px;"></div>
<div class="form-group">
            <Label>Serial Numbers</Label>
            <br>
            <input type="text" name="snum" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['snum'] ?>" class="form-control" name="snum" disabled>
  </div>

     <!--Region -->
 <!--Region -->
 <div style="height:6px;"></div>
 <div class="form-group">
            <Label>Model</Label>
            <br>
            <input type="text" name="model" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['model'] ?>" class="form-control" name="model" disabled>
  </div>
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
<!-- /.modal -->



<!--View all Modal-->




<!--View All Button--->

<!-- Delete Customer -->
    <div class="modal fade" id="del_<?php echo $cqrow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Release Note</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from releasenote where userid='".$cqrow['userid']."'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Receiving Station <strong><?php echo ucwords($b['fstation']); ?></strong></center></h5>
					<form role="form" method="POST" action="deleterelease.php<?php echo '?id='.$cqrow['userid']; ?>">
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
						$a=mysqli_query($conn,"select * from releasenote left join user on user.userid=releasenote.userid where releasenote.userid='".$cqrow['userid']."'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_release.php<?php echo '?id='.$cqrow['userid']; ?>">

<!--Edit Device Type-->
<div style="height:6px;"></div>
   <!---Drop down list-->
   <div class="form-group">
        <Label>Release Station</Label>
        <br>
        <input type="text" name="fstation" class="form-control" placeholder="Enter Releasing Station" style="text-transform: uppercase; width:480px;"  value="<?php echo $b['fstation'] ?>" class="form-control" name="fstation" required>
        </div>
<!--Edit Device Type-->
<div style="height:6px;"></div>
<!--Station -->
        <div class="form-group">
            <Label>Receiving Station</Label>
            <br>
            <input type="text" name="rstation" class="form-control" placeholder="Enter Receiving Station" style="text-transform: uppercase; width:480px;" value="<?php echo $b['rstation'] ?>" class="form-control" name="rstation"required>
        </div>
<!--Station-->
<div style="height:6px;"></div>

<!--Department -->
<div class="form-group">
            <Label>IT EQUIPMENT</Label>
            <br>
            <input type="text" name="equip" class="form-control" placeholder="Enter Receiving Station" style="text-transform: uppercase; width:480px;" value="<?php echo $b['equip'] ?>" class="form-control" name="equip"required>
        </div>
<!--Department-->
 <div style="height:6px;"></div>

<!--Town-->
<div class="form-group">
            <Label>Date</Label>
            <br>
            <input type="text" name="date" class="form-control" placeholder="Enter Date" style="text-transform: uppercase; width:480px;" value="<?php echo $b['date'] ?>" class="form-control" name="date"required>
        </div>
<!--Town-->
<div style="height:6px;"></div>
     <!--Region -->
 <div class="form-group">
        <Label>Quantity</Label>
        <br>
        <input type="text" name="qty" class="form-control" placeholder="Enter Date" style="text-transform: uppercase; width:480px"  value="<?php echo $b['qty'] ?>" class="form-control" name="qty" required>
        </div>
 <!--Region -->
 <div style="height:6px;"></div>

   <!--Availability -->
   <div class="form-group">
        <Label>Serial Number</Label>
        <br>
        <input type="text" name="snum" class="form-control" placeholder="Enter Serial Number" style="text-transform: uppercase; width:480px"  value="<?php echo $b['snum'] ?>" class="form-control" name="snum" required>
        </div>
 <!--Availability -->

 <!--Availability -->
 <div class="form-group">
        <Label>Model</Label>
        <br>
        <input type="text" name="model" class="form-control" placeholder="Enter Device Model" style="text-transform: uppercase; width:480px"  value="<?php echo $b['model'] ?>" class="form-control" name="model" required>
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