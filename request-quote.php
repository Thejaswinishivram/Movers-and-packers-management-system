<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

    if(isset($_POST['submit']))
  {


 
 $name=$_POST['name'];
  $mobnum=$_POST['mobnum'];
 $email=$_POST['email'];
 $location=$_POST['location'];
 $sloc=$_POST['slocation'];
 $sdate=$_POST['sdate'];
  $bitems=$_POST['bitems'];
 $items=$_POST['items'];
 $professional=$_POST['professional'];

$sql="insert into tbluser(Name,MobileNumber,Email,Location,ShiftingLoc,ShiftingDate,BreifItems,Items,Professional)values(:name,:mobnum,:email,:location,:sloc,:sdate,:bitems,:items,:professional)";
$query=$dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':location',$location,PDO::PARAM_STR);
$query->bindParam(':sloc',$sloc,PDO::PARAM_STR);
$query->bindParam(':sdate',$sdate,PDO::PARAM_STR);
$query->bindParam(':bitems',$bitems,PDO::PARAM_STR);
$query->bindParam(':items',$items,PDO::PARAM_STR);
$query->bindParam(':professional',$professional,PDO::PARAM_STR);


 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Request Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='request-quote.php'</script>";
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
<title>Movers & Packers  :: Request Quote</title>
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
				<li>Request Quote</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->

<!-- mail -->
	<div class="mail">
		<div class="container">
			
			<div class="col-md-12 wthree_contact_left">
				<h4>Request Quote</h4>
				<form action="#" method="post">
					<div class="col-md-12 wthree_contact_left_grid">
						<strong>Name </strong><input type="text" name="name" value="Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name*';}" required="true"></div>
						<div class="col-md-12 wthree_contact_left_grid">
						<strong>Email:</strong><input type="email" name="email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="true">
					</div>
					<div class="col-md-12 wthree_contact_left_grid" style="padding-top: 20px">
						<strong>Mobile Number </strong><input type="text" name="mobnum" value="Mobile Number*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone*';}" required="true" maxlength="10" pattern="[0-9]+"></div>
						<div class="col-md-12 wthree_contact_left_grid" style="padding-top: 20px">
						<strong>Where do you want the Packers & Movers service?</strong><input type="text" name="location" value="Where do you want the Packers & Movers service?*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="true">
					</div>
					<div class="col-md-12 wthree_contact_left_grid" style="padding-top: 20px">
						<strong>Where are you shifting?</strong><input type="text" name="slocation" value="Where are you shifting?*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone*';}" required="true"></strong></div>
						<div class="col-md-12 wthree_contact_left_grid" style="padding-top: 20px">
						<strong style="padding-right: 20px">Date of Shifting</strong><input type="date" name="sdate" value="Where do you want the Packers & Movers service?*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="true" >
					</div>
					<div class="col-md-12 wthree_contact_left_grid" style="padding-top: 20px">
						<strong style="padding-right: 20px">What do you want to shift?</strong><select type="text" name="bitems" value="What do you want to shift?*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="true">
							<option value="">Choose................</option>
							<option value="Very Few items($65-$75)">Very Few items($65- $75)</option>
							<option value="1 BHK($80-$100)">1 BHK($80-$100)</option>
							<option value="Very Few items($65-$75)">2 BHK($100-$120)</option>
							<option value="Very Few items($65-$75)">3 BHK($140-$180)</option>
						</select>
					</div>
					<div class="col-md-12 wthree_contact_left_grid" style="padding-top: 20px">
						<strong>Please mention all the items that you are willing to shift?</strong> <textarea  name="items" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="true">Please mention all the items that you are willing to shift?...</textarea>
					</div>
					<div class="col-md-12 wthree_contact_left_grid" style="padding-top: 20px;padding-bottom: 20px">
						<strong>Select your professional wisely </strong><select type="" name="professional" value="What do you want to shift?*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="true">
							<option value="">Select your professional wisely</option>
							<option value="Handpicked professionals(Only 3% of packers and movers meet our quality criteria))">Handpicked professionals(Only 3% of packers and movers meet our quality criteria)</option>
							<option value="Trusted & Reliable professionals(Professionals are background verified)">Trusted & Reliable professionals(Professionals are background verified)</option>
							<option value="vet the professional before hiring(Professional wiil be responsible for theft,damages and delay">vet the professional before hiring(Professional wiil be responsible for theft,damages and delay</option>
							
						</select>
					</div>
					<div class="clearfix"> </div>
					
					<input type="submit" value="Submit" name="submit">
					<input type="reset" value="Clear">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //mail -->
<!-- footer -->
	<?php include_once('includes/footer.php');?>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>