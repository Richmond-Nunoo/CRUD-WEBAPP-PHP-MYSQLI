<!--New Connection-->
<?php include('session.php'); ?>
<?php include('header.php'); ?>
<head>
<link rel="stylesheet" href="style.css">
</head>


<body>



<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">

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
      
<!--Working on background color-->
<div style="background-color: #CAE7DF; width:150px;">
<?php echo "Date ".date("d-m-Y");?>
<br>
<!--Set timezone-->
<?php
date_default_timezone_set("GMT");
echo "Time: ".date("h:ia");
?>
</div>

<?php
$conn = mysqli_connect("localhost","root","","apos");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
<!--Dummy Page-->
<div class="home-content">
   <div class="overview-boxes">
       <div style="background-color: #CAE7DF"; class="box">
         <div class="right-side">
           <div class="box-topic">Total Monitors</div>
           <div class="number">
               <?php
               $sql="SELECT count(userid) AS total FROM customer WHERE stype='Monitor'";
               $result=mysqli_query($conn,$sql);
               $values=mysqli_fetch_assoc($result);
               $monitor=$values['total'];
               echo $monitor;
               echo"<br>";
               ?>
          </div>
           <div class="indicator ">
           
           </div>
         </div>
         <div class="icon">
         <i class="fa fa-desktop" style="font-size:40px" aria-hidden="true"></i>
         </div>
       </div>
       <div style="background-color: #CAE7DF"; class="box">
         <div class="right-side">
           <div class="box-topic">Total UPS</div>
           <div class="number">
           <?php
               $sql="SELECT count(userid) AS total FROM customer WHERE stype='UPS'";
               $result=mysqli_query($conn,$sql);
               $values=mysqli_fetch_assoc($result);
               $ups=$values['total'];
               echo $ups;
               echo"<br>";
               ?>
           </div>
           <div class="indicator">
           </div>
         </div>
         <i class="fa fa-plug" style="font-size:40px" aria-hidden="true"></i>
       </div>
       <div style="background-color: #CAE7DF"; class="box">
         <div class="right-side">
           <div class="box-topic">Total System Unit</div>
           <div class="number">
               <?php
           $sql="SELECT count(userid) AS total FROM customer WHERE stype='System Unit'";
           $result=mysqli_query($conn,$sql);
           $values=mysqli_fetch_assoc($result);
           $system_unit=$values['total'];
           echo $system_unit;
           ?>
           </div>
           <div class="indicator">
           </div>
         </div>
         <i class="fa fa-building-o" style="font-size:40px" aria-hidden="true"></i>
       </div>

       <div style="background-color: #CAE7DF"; class="box">
         <div class="right-side">
           <div class="box-topic">Total Laptops </div>
           <div class="number">
           <?php
           $sql="SELECT count(userid) AS total FROM customer WHERE stype='Laptop'";
           $result=mysqli_query($conn,$sql);
           $values=mysqli_fetch_assoc($result);
           $laptop=$values['total'];
           echo $laptop;
           ?>
            </div>
           <div class="indicator">
             
           </div>
         </div>
         <i class="fa fa-laptop" style="font-size:40px"  aria-hidden="true"></i>
       </div>
       <br>
       <br>
       <div class="line" style="margin-top: 150px;"></div>
<br>
<hr>
       <!--Next Line-->
       <div style="background-color: #CAE7DF"; class="box">
         <div class="right-side">
           <div class="box-topic">3in1 Desktop Computers</div>
           <div class="number">
           <?php
           $sql="SELECT count(userid) AS total FROM customer WHERE stype='3in1 Desktop Computer'";
           $result=mysqli_query($conn,$sql);
           $values=mysqli_fetch_assoc($result);
           $desktop=$values['total'];
           echo $desktop;
           ?>
            </div>
           <div class="indicator">
             <i class='bx bx-down-arrow-alt down'></i>
             <span class="text">Donations Received from Spanish Government</span>
           </div>
         </div>
         <i class="fa fa-television" style="font-size:40px"  aria-hidden="true"></i>
       </div>
       <!--Printer-->
       <div  style="background-color: #CAE7DF"; class="box">
         <div class="right-side">
           <div class="box-topic">Printers</div>
           <div class="number">

          <?php
          //small printer
           $sql="SELECT count(userid) AS total FROM customer WHERE stype='Printer(Small)' ";
           $sresult=mysqli_query($conn,$sql);
           $values=mysqli_fetch_assoc($sresult);
           $smallprinter=$values['total'];
         //  echo $smallprinter;
           //big printer
           $bigprinter="SELECT count(userid) AS total FROM customer WHERE stype='Printer(Big)' ";
           $result=mysqli_query($conn,$bigprinter);
           $values=mysqli_fetch_assoc($result);
           $bprinter=$values['total'];
          // echo $bprinter;
          echo $smallprinter+$bprinter
           ?>
            </div>
           <div class="indicator">
             <i class='bx bx-down-arrow-alt down'></i>
             <?php
           $sql="SELECT count(userid) AS total FROM customer WHERE stype='Printer(Big)' ";
           $result=mysqli_query($conn,$sql);
           $values=mysqli_fetch_assoc($result);
           $biprinter=$values['total'];
           echo $biprinter." Large printers in Inventory";
           ?>
           <br>
           <span class="text"> </span>
             <?php
           $sql="SELECT count(userid) AS total FROM customer WHERE stype='Printer(Small)' ";
           $result=mysqli_query($conn,$sql);
           $values=mysqli_fetch_assoc($result);
           $smprinter=$values['total'];
           echo $smprinter." Small Printers";
           ?>
           </div>
         </div>
         <i class="fa fa-fax" style="font-size:40px"  aria-hidden="true"></i>
       </div>

       <!--Scanner-->
       <div style="background-color: #CAE7DF"; class="box">
         <div class="right-side">
           <div class="box-topic">Scanners</div>
           <div class="number">
           <?php
           $sql="SELECT count(userid) AS total FROM customer WHERE stype='scanner'";
           $result=mysqli_query($conn,$sql);
           $values=mysqli_fetch_assoc($result);
           $scan=$values['total'];
           echo $scan;
           ?>
            </div>
           <div class="indicator">
             <i class='bx bx-down-arrow-alt down'></i>
             <span class="text">Scanners</span>
           </div>
         </div>
         <i class="fa fa-bullseye" style="font-size:40px"  aria-hidden="true"></i>
       </div>


       <!--Scanners-->
     </div>
</div>
     <!--Dummy Page-->

</div>
    </div>
    <div  class="row">
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


