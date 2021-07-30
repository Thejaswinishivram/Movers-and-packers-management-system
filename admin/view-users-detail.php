<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['mpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['update']))
{
$viewid=intval($_GET['viewid']);
$remark=$_POST['remark'];
$status=1;
$sql="update tbluser set Remark=:remark,Status=:status where ID=:viewid";
$query = $dbh->prepare($sql);
$query->bindParam(':viewid',$viewid,PDO::PARAM_STR);
$query->bindParam(':remark',$remark,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Remark has been updated successfully.")</script>';
header('location:old-booking.php');



}
    
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
$vid=$_GET['viewid'];
$sql="SELECT * from  tbluser where ID=$vid";
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
    <td><?php  echo ($row->MobileNumber);?></td>
  </tr>
  <tr>
    <th scope>Email</th>
    <td><?php  echo ($row->Email);?></td>
    <th>Location Shift From</th>
    <td><?php  echo ($row->Location);?></td>
  </tr>
  <tr>
    <th>Location Shift To</th>
    <td><?php  echo ($row->ShiftingLoc);?></td>
     <th>Date of Shifting</th>
    <td><?php  echo ($row->ShiftingDate);?></td>
  </tr>

  <tr>
   
    <th>Brief of Itmes</th>
    <td><?php  echo ($row->BreifItems);?></td>
     <th>Items to be shift</th>
    <td><?php  echo ($row->Items);?></td>
  </tr>
   <tr>
   
    <th>Professional Type</th>
    <td><?php  echo ($row->Professional);?></td>
    <th>Request Date</th>
    <td><?php  echo ($row->RequestDate);?></td>
  </tr>
  <?php if($row->Remark==""){?>    
<form name="query" method="post">
    <tr>
                                                <th>Admin Remark</th>
                                                <td colspan="3"><textarea name="remark" class="form-control" required="true"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td colspan="3">    
                                                        <button type="submit" class="btn btn-primary pull-left" name="update">
        Update <i class="fa fa-arrow-circle-right"></i>
                                </button>

                                                    </td>
                                                </tr>

</form>                                             
                                                    <?php } else {?>                                        
    
    <tr>
                                                <th>Admin Remark</th>
                                                <td colspan="1"><?php echo $row->Remark;?></td>
                                                 <th>Last Updation Date</th>
                                                <td ><?php echo $row->UpdationDate;?></td>
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
<?php } } ?>