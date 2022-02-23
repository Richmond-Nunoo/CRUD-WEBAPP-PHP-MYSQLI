<!--- FIle Upload--->

<!--File Upload-->

<!-- Add Customer -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Staff</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addstuff.php" enctype="multipart/form-data">
						<div class="container-fluid">
						<div style="height:15px;"></div>
                           <!--Embossment -->
                             <div class="form-group">
                               <Label>Staff Name</Label>
                                  <input type="text" name="stname" class="form-control" placeholder="Enter Stuff Name" >
                              </div>
                            <!--Embossment-->
                        <!---Drop down list-->
                        <div class="form-group">
                               <Label>Contact Number</Label>
                                  <input type="text" name="cnumber" class="form-control" placeholder="Enter Contact Number" required>
                              </div>
        <!--Station -->
                <div class="form-group">
                   <Label>Department</Label>
                    <input type="text" name="depart" class="form-control" placeholder="Enter Departmant" style="text-transform:uppercase;" required>
                 </div>
        <!--Station-->
     <!--Department -->
              <div class="form-group">
                    <Label>Rank</Label>
                     <input type="text" name="rank" class="form-control" placeholder="Enter Rank" style="text-transform:uppercase;" required>
               </div>
     <!--Department-->
     <!--Town-->
     <div class="form-group">
				    	  <label for="inputdefault">Users Profile Picture</label>
					      <input class="form-control" id="inputdefault" name="bimg" type="file">
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