<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Services</title>

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
  .pdf
  {
	  background-color:white;
	  border:1px solid;
	  width:60%;
	  height:40%;
	  
  }
  .pic
  {
	 margin-left:20px;
	 margin-top:40px;
	 border:1px solid white;
	 height:122px;
	 width:122px;
	 float:left;
  }
  .rside
  {
	  
	  float:left;
	  border:2px solid white;
	  height:50px;
	  width:60%;
	  margin-top:40px;
	  margin-left:25px;	  
	  text-align:left;
  }
  .down
  {
	  
	  float:left;
	  border:2px solid white;
	  height:65px;
	  width:60%;
	  margin-top:3px;
	  margin-left:25px;	  
	  text-align:left;
  }
 
  .doc
	{
		border:1px solid purple;
		width:100%;
		height:30px;
		margin-top:20px;
		
	}
	.doc a
	{
	    color:red;
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
		<li><a href="service.php">Service</a></li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="video.php">Video</a></li>
            <li><a href="album.php">Images</a></li>
          </ul>
        </li>
		
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="user_login.php">Sign In</a></li>
            <li><a href="user.php">Sign Up</a></li>
          </ul>
        </li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h2 style="color:#FDF84E;font-size:30px;">IT’S YOUR WEDDING – HAVE IT YOUR WAY!<span class="text_color"></span> </h2>
			<h4 style="color:#FDF84E;">WE STRIVE TO BE THE BEST AT WHAT WE DO.</h4>
		</div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: services -->
      <section id="service" class="home-section text-center" style="background-image:url(1.jpg)">
	     <div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Services We Offer</h2>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		 <div class="container">
		     <div id="document" style="width:31%;height:630px;border:4px dashed red;float:right;
		     margin-top:5px;margin-right:5px; background-color:purple;">
		     <div class="doc">
			     <a href="doc/COORDINATION AND MANAGEMENT.pdf" target="_blank" ><b>COORDINATION AND MANAGEMENT</b>
				 </a>
				 </div>
				 <div class="doc">
			     <a href="doc/CUSTOMIZED WEDDING SERVICES.pdf" target="_blank" ><b>CUSTOMIZED WEDDING SERVICES</b>
				 </a>
				 </div>
				 <div class="doc">
			     <a href="doc/FLOWER DECORATIONS.pdf" target="_blank" ><b>DECOR AND SET DESIGN</b>
				 </a>
				 </div>
				 <div class="doc">
			     <a href="doc/WEDDING DAY SERVICES.pdf" target="_blank" ><b>WEDDING DAY SERVICES</b>
				 </a>
				 </div>
				 <div class="doc">
			     <a href="doc/WEDDING TRANSPORT.pdf" target="_blank" ><b>WEDDING TRANSPORT</b>
				 </a>
				 </div>
				 <div class="doc">
			     <a href="doc/VENUE SELECTION.pdf" target="_blank" ><b>VENUE SELECTION</b>
				 </a>
				 </div>
				 <div class="doc">
			     <a href="doc/PHOTOGRAPHY AND VIDEOGRAPHY.pdf" target="_blank" ><b>PHOTOGRAPHY AND VIDEOGRAPHY</b>
				 </a>
				 </div>
				 <div class="doc">
			     <a href="doc/MARRIAGE  MANDAPAMS.pdf" target="_blank" ><b>MARRIAGE  MANDAPS</b>
				 </a>
				 </div>
				 <div class="doc">
			     <a href="doc/BARAT.pdf" target="_blank" ><b>BARAT</b>
				 </a>
				 </div>
				 <div class="doc">
			     <a href="doc/HAIR AND MAKEUP.pdf" target="_blank" ><b>HAIR AND MAKEUP</b>
				 </a>
				 </div>
				 <div class="doc">
			     <a href="doc/MAKE FULL WEDDING PLANNING.pdf" target="_blank" ><b>MAKE FULL WEDDING PLANNING</b>
				 </a>
				 </div>
				 <div class="doc">
			     <a href="doc/HONEYMOON TRAVELS.pdf" target="_blank" ><b>HONEYMOON TRAVELS</b>
				 </a>
				 </div>
			</div>
		   <div class="pdf" >
		     <div class="pic">
			     <a href="doc/COORDINATION AND MANAGEMENT.pdf" target="_blank">
				 <img src="img/7.png" height="120px" width="120px" align="left">
				 </a>			 
			 </div>
			 <div class="rside">
			     <h2>Gold Package</h2>
			 </div>
			 <div class="down">
			     <p>This package is for those who don't have the time to devote to carry out all the research 
				 and a stress free experience throughout the entire wedding planning process, let PWP do this 
				 for you. <a href="doc/COORDINATION AND MANAGEMENT.pdf" target="_blank"><b>(Read More)</b> </a>
				 </p>
				 <a href="doc/COORDINATION AND MANAGEMENT.pdf" target="_blank">
				 <button type="button" class="btn btn-danger" style="border-radius:15%">Details</button>
				 </a>
			 </div>			
		   </div>
		      <br>
		     <div class="pdf" >
		     <div class="pic">
			  
				 <a href="doc/COORDINATION AND MANAGEMENT.pdf" target="_blank">
				 <img src="img/7.png" height="120px" width="120px" align="left">
				 </a>			 
			 </div>
			 <div class="rside">
			     <h2>Silver Package</h2>
			 </div>
			 <div class="down">
			     <p>This package is for those who don't have the time to devote to carry out all the research 
				 and a stress free experience throughout the entire wedding planning process, let PWP do this 
				 for you. <a href="doc/COORDINATION AND MANAGEMENT.pdf" target="_blank"><b>(Read More)</b> </a>
				 </p>
				 <a href="doc/COORDINATION AND MANAGEMENT.pdf" target="_blank">
				 <button type="button" class="btn btn-danger" style="border-radius:15%">Details</button>
				 </a>
			 </div>			
		   </div>
		     <br>
			 <div class="pdf" >
		     <div class="pic">
			  
				 <a href="doc/COORDINATION AND MANAGEMENT.pdf" target="_blank">
				 <img src="img/7.png" height="120px" width="120px" align="left">
				 </a>			 
			 </div>
			 <div class="rside">
			     <h2>Diamond Package</h2>
			 </div>
			 <div class="down">
			     <p>This package is for those who don't have the time to devote to carry out all the research 
				 and a stress free experience throughout the entire wedding planning process, let PWP do this 
				 for you. <a href="doc/COORDINATION AND MANAGEMENT.pdf" target="_blank"><b>(Read More)</b> </a>
				 </p>
				 <a href="doc/COORDINATION AND MANAGEMENT.pdf" target="_blank">
				 <button type="button" class="btn btn-danger" style="border-radius:15%">Details</button>
				 </a>
			 </div>			
		   </div>
		   </div>
		     <br>
			 
	  </section>

	

    
	<!-- /Section: services -->
	

	

	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
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
