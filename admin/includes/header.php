<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">
                    <strong style="color: white;font-size: 30px">MPMS</strong>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                 <?php
$sql="SELECT * from tblcontact where IsRead is null limit 5";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$newmsg=$query->rowCount();

            ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger"><?php echo $newmsg;?></span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <?php 
if($query->rowCount()>0){
                       foreach($results as $row)
{  ?>
                        <li>
                            <a href="view-queries.php?viewid=<?php echo $row->ID?>">
                                <div>
                                    <strong><span class=" label label-danger"><?php echo $row->Name;?></span></strong>
                                    <span class="pull-right text-muted">
                                        <em><?php echo $row->RequestDate;?></em>
                                    </span>
                                </div>
                                </a>
                        </li>
                      <?php }}  else {?>
                       
                      
                       
                        <li>
                           <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>No Records
                                   
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="unread-queries.php">
                                <strong>See All New Message</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>
                                       <?php
$sql="SELECT * from tbluser where Status is null limit 5";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$newbooking=$query->rowCount();

            ?>
               

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning"><?php echo $newbooking;?></span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                       <?php 
if($query->rowCount()>0){
                       foreach($results as $row)
{  ?>
                        <li>
                            <a href="view-users-detail.php?viewid=<?php echo htmlentities ($row->ID);?>">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i><?php echo $row->Name;?> <span style="font-size:10px;">(New Booking)</span>
                                    <span class="pull-right text-muted small"><?php echo $row->RequestDate;?></span>
                                </div>
                            </a>
                        </li>
                     <?php }}  else {?>
                          <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>No Records
                                   
                                </div>
                            </a>
                        </li>
                     <?php } ?>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="new-booking.php">
                                <strong>See All New bookings</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="admin-profile.php"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="change-password.php"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>