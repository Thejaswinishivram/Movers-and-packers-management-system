<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['mpmsaid']==0)) {
  header('location:logout.php');
  } else{
$vid=$_GET['viewid'];
$isread=1;
$sql="update tblcontact set IsRead=:isread where ID=:vid";
$query=$dbh->prepare($sql);
$query->bindParam(':isread',$isread,PDO::PARAM_STR);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);
$query->execute();
?>

<!DOCTYPE html>
<html>
<head> 
    <title>Movers & Packers Management System | View Users</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
      <?php include_once('includes/header.php');?>
        <!-- end navbar top -->

        <!-- navbar side -->
        <?php include_once('includes/sidebar.php');?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">View Users</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                     
                                      <?php

$sql="SELECT * from  tblcontact where ID=$vid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                    
    <table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 User Details</td></tr>

    <tr>
    <th scope>Name</th>
    <td><?php  echo ($row->Name);?></td>
    <th scope>Mobile Number</th>
    <td><?php  echo ($row->Telephone);?></td>
  </tr>
  <tr>
    <th scope>Email</th>
    <td><?php  echo ($row->Email);?></td>
    <th>Subject</th>
    <td><?php  echo ($row->Subject);?></td>
  </tr>
  <tr>
    
     <th >Message</th>
    <td colspan="3"><?php  echo ($row->Message);?></td>
  </tr>

   
<?php $cnt=$cnt+1;}} ?>
</table>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
<?php }  ?>