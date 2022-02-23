<!--- FIle Upload--->

<!--File Upload-->

<!-- Add Customer -->
    <div class="modal fade" id="addrelease" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New release Note</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addrelease.php" enctype="multipart/form-data">
						<div class="container-fluid">
						<div style="height:15px;"></div>
                           <!--Embossment -->
                             <div class="form-group">
                               <Label>Releasing Station</Label>
                                  <input type="text" name="fstation" class="form-control" placeholder="Enter Releasing Station" required>
                              </div>
                            <!--Embossment-->
                        <!---Drop down list-->
                        <div class="form-group">
                               <Label>Receiving Station</Label>
                                  <input type="text" name="rstation" class="form-control" placeholder="Enter Receiving Station" required>
                              </div>
        <!--Station -->
                <div class="form-group">
                   <Label>IT Equipment</Label>
                    <input type="text" name="equip" class="form-control" placeholder="Enter IT Equipment" style="text-transform:uppercase;" required>
                 </div>
        <!--Station-->
     <!--Department -->
              <div class="form-group">
                    <Label>Date</Label>
                     <input type="text" name="date" class="form-control" placeholder="Enter Date" style="text-transform:uppercase;" required>
               </div>
     <!--Department-->
     <!--Town-->
    <div class="form-group">
        <Label>Quantity</Label>
        <input type="text" name="qty" class="form-control" placeholder="Enter Quantity" style="text-transform:uppercase;" required>
    </div>
      <!--Town-->

      <!--Region -->
        <div class="form-group">
        <Label>Serial Number</Label>
        <input type="text" name="snum" class="form-control" placeholder="Enter Serial Number" style="text-transform:uppercase;" required>
        </div>
     <!--Region-->


<!--Availability-->
<div class="form-group">
        <Label>Model</Label>
        <input type="text" name="model" class="form-control" placeholder="Enter Model" style="text-transform:uppercase;" required>
        </div>
<!--Availability-->
<!--Availability-->

<!--upload-->

<!--Upload-->
<!--Availability-->
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