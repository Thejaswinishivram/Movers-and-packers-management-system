<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

  ?>
<!DOCTYPE html>
<html>
<head>
<title>Movers and Packers Management System|| Services</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<?php include_once('includes/header.php');?>
<!-- //header -->
<!-- banner1 -->
	<div class="banner1">
		<div class="container">
		</div>
	</div>

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a><i>|</i></li>
				<li>Services</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->

<!-- services -->
	<div class="services">

		<div class="container">
			<h3>Services</h3>
			<p class="quia">from our Side</p>

			<div class="w3l_services_grids">
				<?php
$sql="SELECT * from tblservices";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
				<div class="col-md-3 w3l_services_grid">
					<div class="w3l_services_grid1">
						
						<span><img src="admin/images/<?php echo $row->Image;?>" width="200" height="200" value="<?php  echo $row->Image;?>"></span>
						<p style="padding-top: 20px"><h4><?php  echo htmlentities($row->Title);?></h4></p>

						<p style="padding-top: 10px"><?php  echo substr(($row->Description),0,95);?>.</p>

					</div>

				</div>
				<?php $cnt=$cnt+1;}} ?>
				
				<div class="clearfix"> </div>
				
			</div>
			
		</div>

	</div>
<!-- //services -->

<?php include_once('includes/footer.php');?>
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>