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
$image=$_FILES["image"]["name"];
$extension = substr($image,strlen($image)-4,strlen($image));
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{

$img=md5($image).time().$extension;
 move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$img);
$sql="insert into tblservices(Title,Description,Image)values(:title,:des,:img)";
$query=$dbh->prepare($sql);
$query->bindParam(':title',$title,PDO::PARAM_STR);
$query->bindParam(':des',$des,PDO::PARAM_STR);
$query->bindParam(':img',$img,PDO::PARAM_STR);

 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Sevice has been added.")</script>';
echo "<script>window.location.href ='add-services.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
}
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Movers & Packers Management System | Add Services</title>
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
                    <h1 class="page-header">Add Services</h1>
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
                                    
    <div class="form-group"> <label for="exampleInputEmail1">Title</label> <input type="text" name="title" value="" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Description</label> <textarea type="text" name="description" value="" class="form-control" required='true'></textarea> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Image</label><input type="file" name="image" value=""  class="form-control" required='true'> </div>
     
     <p style="padding-left: 450px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Add</button></p> </form>
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