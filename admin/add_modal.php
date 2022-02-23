<!-- Add Customer -->
    <div class="modal fade" id="addcustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Computer</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addcustomer.php" enctype="multipart/form-data">
						<div class="container-fluid">
						<div style="height:15px;"></div>
                           <!--Embossment -->
                             <div class="form-group">
                               <Label>Embossment ID</Label>
                                  <input type="text" name="emboss" class="form-control" placeholder="Enter Embossment ID" required>
                              </div>
                            <!--Embossment-->
                        <!---Drop down list-->
				<div class="form-group">
                 <label for="sel1">Device Type:</label>
                    <select class="form-control" id="sel1" name="stype"    placeholder="Select Device Type" required>
                            <option value="">--Select--</option>
                            <option value="Monitor" >Monitor</option>
                            <option value="System Unit" >System Unit</option>
                            <option value="Scanner" >Scanner</option>
                            <option  value="Printer(Big)">Printer(Big)</option>
                            <option  value="Printer(Small)">Printer(Small)</option>
                            <option value="4 in 1 printer">4in1 Printer</option>
                            <option  value="UPS">UPS</option>
                            <option value="Laptop">Laptop</option>
                            <option value="3in1 Desktop Computer">3in1 Desktop Computer</option>
                     </select>
                </div>
        <!--Station -->
                <div class="form-group">
                   <Label>Station</Label>
                    <input type="text" name="station" class="form-control" placeholder="Enter Station" style="text-transform:uppercase;" required>
                 </div>
        <!--Station-->
     <!--Department -->
              <div class="form-group">
                    <Label>Department</Label>
                     <input type="text" name="department" class="form-control" placeholder="Enter Department" style="text-transform:uppercase;" required>
               </div>
     <!--Department-->
     <!--Town-->
    <div class="form-group">
        <Label>Model</Label>
        <input type="text" name="town" class="form-control" placeholder="Enter Device Model" style="text-transform:uppercase;" required>
    </div>
      <!--Town-->

      <!--Region -->
        <div class="form-group">
        <Label>Region</Label>
        <input type="text" name="region" class="form-control" placeholder="Enter Region" style="text-transform:uppercase;" required>
        </div>
     <!--Region-->
      <!--Serial Number-->
      <div class="form-group">
        <Label>Serial Number</Label>
        <input type="text" name="snumber" class="form-control" placeholder="Enter Serial Number" style="text-transform:uppercase;" required>
        </div>
     <!--Serial Number-->


<!--Availability-->
<div class="form-group">
                 <label >Status:</label>
                    <select class="form-control" name="avail" required placeholder="Availability" required>
                            <option value="">--Select--</option>
                            <option value="Not Issued">Not Issued</option>
                            <option value="Issued">Issued</option>
                    </select>
</div>
<!--Availability-->
<!--Commments-->

<div class="form-group">
        <Label>Comments</Label>
        <input type="text" name="comment" class="form-control" placeholder="Enter Any comment" style="text-transform:uppercase; height: 80px" required>
</div>
<!--Comments-->
				</div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" name="save" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
    </div>
<!-- /.modal -->