<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['mpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$mpmsaid=$_SESSION['mpmsaid'];
 $title=$_POST['title'];
$des=$_POST['description'];
$eid=$_GET['editid'];
$sql="update tblservices set Title=:title,Description=:des where ID=:eid";
$query=$dbh->prepare($sql);
$query->bindParam(':title',$title,PDO::PARAM_STR);
$query->bindParam(':des',$des,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);

 $query->execute();

   echo '<script>alert("Service detail has been updated")</script>';
  

}
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Movers & Packers Management System | Update Services</title>
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
                    <h1 class="page-header">Update Services</h1>
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
                                    <form method="post" enctype="multipart/form-data"> 
                                      <?php
$eid=$_GET['editid'];
$sql="SELECT * from  tblservices where ID=$eid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                    
    <div class="form-group"> <label for="exampleInputEmail1">Title</label> <input type="text" name="title" value="<?php  echo $row->Title;?>" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Description</label> <textarea type="text" name="description" value="" class="form-control" required='true'><?php  echo $row->Description;?></textarea> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Image</label><img src="images/<?php echo $row->Image;?>" width="100" height="100" value="<?php  echo $row->Image;?>"><a href="changeimage.php?editid=<?php echo $row->ID;?>"> &nbsp; Edit Image</a> </div>
     <?php $cnt=$cnt+1;}} ?>
     <p style="padding-left: 450px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Update</button></p> </form>
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