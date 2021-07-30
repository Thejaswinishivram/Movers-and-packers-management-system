    <div class="header">
        <div class="container">
            <div class="w3l_header_left"> 
                <ul>
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
                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+<?php  echo htmlentities($row->MobileNumber);?></li>
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><?php  echo htmlentities($row->Email);?></li>
                </ul>
                <?php $cnt=$cnt+1;}} ?>
            </div>
            
            <div class="w3l_header_right">
                <ul>
                    <li><a href="admin/login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Admin</a></li>
                    
                </ul>
            </div>
            <div class="clearfix"> </div>
            <script type="text/javascript" src="js/demo.js"></script>
        </div>
    </div>
    <div class="logo_nav">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <div class="logo">
                        <h1><a class="navbar-brand" href="index.php">Movers & Pac<span>k</span>ers</a></h1>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php"><span data-hover="Home">Home</span></a></li>
                            <li><a href="services.php"><span data-hover="Services">Services</span></a></li>
                            <li><a href="about.php"><span data-hover="About">About</span></a></li>
                            <li><a href="request-quote.php"><span data-hover="Request Quote">Request Quote</span></a></li>
                            <li><a href="contact.php"><span data-hover="Contact Us">Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>