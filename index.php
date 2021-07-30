<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Movers & Packers  :: Home Page</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- load-more -->
<script>
	$(document).ready(function () {
		size_li = $("#myList li").size();
		x=1;
		$('#myList li:lt('+x+')').show();
		$('#loadMore').click(function () {
			x= (x+1 <= size_li) ? x+1 : size_li;
			$('#myList li:lt('+x+')').show();
		});
		$('#showLess').click(function () {
			x=(x-1<0) ? 1 : x-1;
			$('#myList li').not(':lt('+x+')').hide();
		});
	});
</script>
<!-- //load-more -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
<?php include_once('includes/header.php');?>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="w3ls_banner_info">
				<h2>Movers & Packers</h2>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
					fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt.</p>
				<div class="wthree_more">
					<a href="services.php" class="button--wayra button--border-thick button--text-upper button--size-s">Services</a>
				</div>
			</div>
		</div>
	</div>
<!-- //banner -->




<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>testimonials</h3>
			<p class="quia">what our customers say</p>
			<div class="w3_testimonials_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>	
								<div class="w3_testimonials_grid">
									<img src="images/1.png" alt=" " class="img-responsive" />
									<h4><i>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil 
										impedit quo minus id quod maxime placeat facere possimus, omnis voluptas.</i></h4>
									<h5>Mr. Jacob</h5>
									<p>Founder</p>
								</div>
							</li>
							<li>	
								<div class="w3_testimonials_grid">
									<img src="images/2.png" alt=" " class="img-responsive" />
									<h4><i>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil 
										impedit quo minus id quod maxime placeat facere possimus, omnis voluptas.</i></h4>
									<h5>Mr. Jhon Kheler</h5>
									<p>Transport Agent</p>
								</div>
							</li>
							<li>	
								<div class="w3_testimonials_grid">
									<img src="images/3.png" alt=" " class="img-responsive" />
									<h4><i>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil 
										impedit quo minus id quod maxime placeat facere possimus, omnis voluptas.</i></h4>
									<h5>Thomas Carl</h5>
									<p>Transport Agent</p>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- flexSlider -->
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->
			</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- footer -->
	<?php include_once('includes/footer.php');?>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>