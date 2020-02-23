<?php
session_start();

$email=$_SESSION['email'];

if($_SESSION['email']=="")
{
session_destroy();
header("Location:user_login.php?msg=3");
}
include('connection.php');
$query="select * from tbl_user where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{	
?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet" />
	
    
    
    
    
    <!-- =======================================================
        Theme Name: Squadfree
        Theme URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
<style>
  #outer
  {
	border:2px solid;
	width:80%;
	height:600px;
	margin:0px auto; 
	background-color:#900C3F;
  }
  #pic
  {
	border:1px solid;
	width:300px;
	height:560px;
	float:left;
	margin-left:20px;
	margin-top:20px;
  }
  #profile
  {
	 margin-left:20px;
	 margin-top:20px;
	 border:1px solid;
	 width:710px;
	 height:560px;
	 float:left
  }
  .button
  {
	  border:3px solid red;
	  width:250px;
	  height:50px;
	  font-size:20px;
	  background:black;
      border-radius:5px;
	  color:white;
      padding:7px;
      text-decoration:none;
      margin:10px;
      cursor:pointer;
	  transition:background 2s,color 2s,font-size 2s,font-weight 2s;
  }
  .button:hover
{
	background:rgba(1,1,1,0.8);
	color:red;
	font-size:22px;
	font-weight:100;
	transition:background 2s,color 2s,font-size 2s,font-weight 2s;
}
  
</style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
		<div class="navbar-header page-scroll;" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
				<img src="pwp.png"></a>
			</div>
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
				
                    <h1>Popular Wedding Planner</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
		<li><a href="doc_view.php">Service</a></li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="video.php">Video</a></li>
            <li><a href="album.php">Images</a></li>
          </ul>
        </li>
		<li><a href="#contact">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Sign In</a></li>
            <li><a href="user.php">Sign Up</a></li>
          </ul>
        </li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: about -->
    <section id="about" class="home-section text-center" style="background-color:#FDFBCD">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Welcome User</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		    
		    <div id="outer">
			 <div id="pic" style="background-color:#FDFBCD">
			     <img src="user/<?php echo $row[6];?>" width="298" height="300">			 
			 </div>
			 <div id="profile" style="background-color:#FDFBCD">
			     <br/>
			     <center><h1>My Profile</h1></center>
				 <h3>Name :  <?php echo $row[1];?> </h3>
                 <h3>Email Id :  <?php echo $row[2];?> </h3>
                 <h3>Mobile No :  <?php echo $row[7];?> </h3>
                 <br/>	
                <center><a href="user_passchange.php"><div class="button">Change Password</div></a></center>
                <center> <a href="logout.php"><div class="button">Logout</div></a>	</center>	
                <center> <a href="date.php?user_id=<?php echo $row[0];?>"><div class="button">Book Appointment</div></a>	</center>				
                <center> <a href="user_appointment.php?user_id=<?php echo $row[0];?>"><div class="button">View Appointment</div></a>	</center>
				 
			 </div>			
			
			
			
			</div>
<?php
}
?>
	</section>
	<!-- /Section: about -->
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#about" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Popular Wedding Planner. All rights reserved.</p>
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree
                        -->
                    </div>
				</div>
			</div>	
		</div>
	</footer>

<script src="assets/js/custom.js"></script>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
	

    
</body>
</html>
