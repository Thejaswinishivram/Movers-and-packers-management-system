<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

    if(isset($_POST['submit']))
  {


 $name=$_POST['name'];
  $telephone=$_POST['telephone'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];
 
$sql="insert into tblcontact(Name,Telephone,Email,Subject,Message)values(:name,:telephone,:email,:subject,:message)";
$query=$dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':telephone',$telephone,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);

 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Message Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='contact.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Movers & Packers  :: Mail Us</title>
<!-- for-mobile-apps -->

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
<!-- banner1 -->
	<div class="banner1">
		<div class="container">
		</div>
	</div>

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a><i>|</i></li>
				<li>Mail Us</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->

<!-- mail -->
	<div class="mail">
		<div class="container">
		
			<div class="col-md-4 wthree_contact_left">
				<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>

				<h4>Address</h4>
				<p><?php  echo htmlentities($row->PageDescription);?></p>
				<ul>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Free Phone :+<?php  echo htmlentities($row->MobileNumber);?></li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><?php  echo htmlentities($row->Email);?></li>
				</ul>
			</div>
			<?php $cnt=$cnt+1;}} ?>
			<div class="col-md-8 wthree_contact_left">
				<h4>Contact Form</h4>
				<form action="#" method="post">
					<div class="col-md-6 wthree_contact_left_grid">
						<input type="text" name="name" value="Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name*';}" required="true">
						<input type="email" name="email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="true">
					</div>
					<div class="col-md-6 wthree_contact_left_grid">
						<input type="text" name="telephone" value="Telephone*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone*';}" required="true" maxlength="10" pattern="[0-9]+">
						<input type="text" name="subject" value="Subject*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="true">
					</div>
					<div class="clearfix"> </div>
					<textarea  name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="true">Message...</textarea>
					<input type="submit" value="Submit" name="submit">
					<input type="reset" value="Clear">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //mail -->
<?php include_once('includes/footer.php');?>
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>