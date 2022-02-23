<!-- Delete Customer -->
    <div class="modal fade" id="del_<?php echo $cqrow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Computer</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from customer where userid='".$cqrow['userid']."'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Embossment ID: <strong><?php echo ucwords($b['emboss']); ?></strong></center></h5>
					<form role="form" method="POST" action="deletecustomer.php<?php echo '?id='.$cqrow['userid']; ?>">
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
<!-- /.Delete modal -->


<!-- View all Customer -->
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
						$a=mysqli_query($conn,"select * from customer left join user on user.userid=customer.userid where customer.userid='".$cqrow['userid']."'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="viewcustomer.php<?php echo '?id='.$cqrow['userid']; ?>">
<!--Embossment -->
<div class="form-group">
        <Label>Embossment ID</Label>
        <br>
        <input type="text" name="emboss" class="form-control" style="text-transform: uppercase; width:480px;"value="<?php echo ucwords($b["emboss"]);?>" class="form-control" name="emboss" disabled >
</div>
<!--Embossment-->

<!--Device Type-->
<div style="height:6px;"></div>
   <!---Drop down list-->
   <div class="form-group">
            <Label>Device Type</Label>
            <br>
            <input type="text" name="stype" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['stype'] ?>" class="form-control" name="stype" disabled>
  </div>
<!--Device Type-->

<div style="height:6px;"></div>

<!--Station -->
<div class="form-group">
            <Label>Station</Label>
            <br>
            <input type="text" name="station" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['station'] ?>" class="form-control" name="station" disabled>
  </div>
<!--Station-->

<div style="height:6px;"></div>

<!--Department -->
<div class="form-group">
            <Label>Department</Label>
            <br>
            <input type="text" name="department" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['department'] ?>" class="form-control" name="department" disabled>
  </div>
<!--Department-->
 <div style="height:6px;"></div>

<!--Town-->
 <div class="form-group">
            <Label>Model</Label>
            <br>
            <input type="text" name="town" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['town'] ?>" class="form-control" name="town" disabled>
  </div>
<!--Town-->

<div style="height:6px;"></div>

<!--Region-->
<div class="form-group">
            <Label>Region</Label>
            <br>
            <input type="text" name="region" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['region'] ?>" class="form-control" name="region" disabled>
</div>
<!--Region-->

<div style="height:6px;"></div>

<!--Serial Numbers-->
  <div class="form-group">
            <Label>Serial Numbers</Label>
            <br>
            <input type="text" name="snumber" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['snumber'] ?>" class="form-control" name="snumber" disabled>
  </div>
  <!--Serial Numbers-->

 <div style="height:6px;"></div>

<!--Availability-->
 <div class="form-group">
            <Label>Availability</Label>
            <br>
            <input type="text" name="town" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['avail'] ?>" class="form-control" name="availability" disabled>
  </div>
<!--Availability-->
<div style="height:10px;"></div>
<!--Comments-->
<div class="form-group">
            <Label>Comments</Label>
            <br>
            <input type="text" name="comment" class="form-control" style="text-transform: uppercase; width:480px;" value="<?php echo $b['comment'] ?>" class="form-control" name="comment" disabled>
  </div>

<!--Comment-->

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
						$a=mysqli_query($conn,"select * from customer left join user on user.userid=customer.userid where customer.userid='".$cqrow['userid']."'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_customer.php<?php echo '?id='.$cqrow['userid']; ?>">
<!--Embossment -->
<div class="form-group">
        <Label>Embossment ID</Label>
        <br>
        <input type="text" name="emboss" class="form-control" style="text-transform: uppercase; width:480px;"value="<?php echo ucwords($b["emboss"]);?>" class="form-control" name="emboss" required>
</div>
<!--Edit Device Type-->
<div style="height:6px;"></div>
   <!---Drop down list-->

    <!--Type--->
	<div class="form-group">
                 <label for="sel1">Device Type:</label>
                    <select class="form-control" id="sel1" name="stype"    placeholder="Select Device Type" value="<?php echo $b['stype'] ?>" class="form-control" name="stype"required>
                            <option value="">--Select--</option>
                            <option value="Monitor" >Monitor</option>
                            <option value="System Unit" >System Unit</option>
                            <option value="Scanner" >Scanner</option>
                            <option  value="Printer(Big)">Printer(Big)</option>
                            <option  value="Printer(Small)">Printer(Small)</option>
                            <option  value="4in1 Printer">4in1 Printer</option>
                            <option  value="UPS">UPS</option>
                            <option value="Laptop">Laptop</option>
                            <option value="3in1 Desktop Computer">3in1 Desktop Computer</option>
                     </select>
                </div>
    <!--Type-->
<!--Edit Device Type-->
<div style="height:6px;"></div>
<!--Station -->
        <div class="form-group">
            <Label>Station</Label>
            <br>
            <input type="text" name="station" class="form-control" placeholder="Enter Station" style="text-transform: uppercase; width:480px;" value="<?php echo $b['station'] ?>" class="form-control" name="station"required>
        </div>
<!--Station-->
<div style="height:6px;"></div>

<!--Department -->
<div class="form-group">
        <Label>Department</Label>
        <br>
        <input type="text" name="department" class="form-control" placeholder="Enter Department" style="text-transform: uppercase; width:480px;"  value="<?php echo $b['department'] ?>" class="form-control" name="department" required>
        </div>
<!--Department-->
 <div style="height:6px;"></div>

<!--Town-->
 <div class="form-group">
        <Label>Model</Label>
        <br>
        <input type="text" name="town" class="form-control" placeholder="Enter town" style="text-transform: uppercase; width:480px;"value="<?php echo $b['town'] ?>" class="form-control" name="town" required>
 </div>
<!--Town-->
<div style="height:6px;"></div>
     <!--Region -->
 <div class="form-group">
        <Label>Region</Label>
        <br>
        <input type="text" name="region" class="form-control" placeholder="Enter Region" style="text-transform: uppercase; width:480px"  value="<?php echo $b['region'] ?>" class="form-control" name="region" required>
        </div>
 <!--Region -->
 <div style="height:6px;"></div>

 <!--Serial Number-->
 <div class="form-group">
        <Label>Serial Number</Label>
        <br>
        <input type="text" name="snumber" class="form-control" placeholder="Enter Serial Number" style="text-transform: uppercase; width:480px"  value="<?php echo $b['snumber'] ?>" class="form-control" name="snumber" required>
        </div>
 <!--Region -->


 <!--Serial Number-->
   <!--Availability -->
   <!--Serial Number-->
 <div class="form-group">
        <Label>Availability</Label>
        <br>
        <input type="text" name="avail" class="form-control" placeholder="Availability" style="text-transform: uppercase; width:480px"  value="<?php echo $b['avail'] ?>" class="form-control" name="avail" required>
        </div>
 <!--Region -->

 <!--Availability -->
 <div style="height:10px;"></div>
 <div class="form-group">
        <Label>Comments</Label>
        <br>
        <input type="text" name="comment" class="form-control" placeholder="Enter any Comment" style="text-transform: uppercase; width:480px; height: 120px"  value="<?php echo $b['comment'] ?>" class="form-control" name="comment" required>
 </div>

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
    </div>
<!-- /.modal -->
