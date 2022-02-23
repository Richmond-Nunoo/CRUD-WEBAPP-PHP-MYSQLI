<!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
				<a class="navbar-brand" href="#"> Computer Distribution</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span>  My Account</a></li>
                        <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation" style="background-color:white;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                    <li>
                 <a href="dashboard.php"><i class="fa fa-tachometer fa-fw"></i> Dashboard</a>
                     </li>
                    <li class="divider"></li>
                        <li>
                            <a href="customer.php"><i class="fa fa-home fa-fw"></i> Computers</a>
                        </li>
                        <li class="divider"></li>

                      <!--  <li><a href="release.php"><i class="fa fa-sign-in fa-fw">
                        </i> Release Notes</a>
                        </li>
-->
                        <!--Side navbar--->
                        <li>
                            <a href="#"><i class="fa fa-copy fa-fw"></i> Released Notes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="release.php"><i class="fa fa-money fa-fw"></i> Release Reports</a>
                                </li>
                                <li>
                                    <a href="scan.php"><i class="fa fa-barcode fa-fw"></i> Scanned Released files</a>
                                </li>
                            </ul>
                        </li>
                        <!---Side navbar-->
                        <li class="divider"></li>
            
                        <li>
                            <a href="stuff.php"><i class="fa fa fa-user fa-fw"></i> Stuff List</a>
                        </li>
                        <li class="divider"></li>
                 
                        <li>
                            <a href="report.php"><i class="fa fa-list fa-fw"></i> Reports</a>
                        </li>
                        <li class="divider"></li>
                  
						<li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>