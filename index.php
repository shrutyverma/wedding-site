<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==2)
{
	?>
   <script language="JavaScript" type="text/JavaScript">
	alert("Logout Successfully");</script>
<?php
}
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
		<li><a href="#contact">Contact Us</a></li>
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
			<a href="#about" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: about -->
    <section id="about" class="home-section text-center" style="background-color:#FDFBCD">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>About us</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		    <strong>
		    <p>POPULAR WEDDING  PLANNER (PWP) organize all type of functions be it wedding, birthday, 
			engagement, kitty party, wedding anniversaries or any other type of functions that our client
			may think of hosting  for more than 15 years . As wedding and event planner we will help 
			manage and execute your dreams and aspirations into reality. It is a dream of every parent,
			to find a suitable groom/bride and conduct the marriage in a grand manner. But, due to changes 
			that took place in the social and family set up over the years and time constraints, the 
			parents find it difficult to organize the marriage on their own. Further, it becomes impossible
			for them to seek the help of friends or relatives who suffer similar restraints. PWP, as an 
			experienced wedding planner assists such parents to conduct the marriage efficiently. 
            </p>
			<a href="about.php"><b>(Know more.)</b></a></p>
			</strong>
			
			
	</section>
	<!-- /Section: about -->
	

	<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray" style="background-color:#FDFBCD;">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Our Services</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-5.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>MAKE FULL WEDDING PLANNING  </h5>
						<p>This package is for those who don't have the
						time to devote to carry out all the research and
						a stress free experience throughout the entire 
						wedding planning process, let PWP do this for you.
						<a href="service.php"><b>(Read more.)</b></a></p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-7.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>CUSTOMIZED WEDDING SERVICES</h5>
						<p>Services in Customized Wedding Planning is 
						provide as per your requirements, so it on you
						what kind of service you require from us for your wedding planning.
						<a href="service.php"><b>(Read more.)</b></a></p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-8.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>WEDDING DAY SERVICES</h5>
						<p>Act as command central for the entire day
						comprehensive Day-Of coordination with Wedding Planner and Assistant
                         orchestrate ceremony line-up designed by our Event Planners.
						 <a href="service.php"><b>(Read more.)</b></a></p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-6.png" alt="" />
					</div>
					<div class="service-desc">
						<h5>FLOWER DECORATIONS</h5>
						<p>Flowers are one of nature's many gifts. They have the 
						power to express what words sometimes cannot, and to improve
						any environment in which they are placed.
						<a href="service.php"><b>(Read more.) </b></a></p>
					</div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	<!-- /Section: services -->
	

	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center" style="background-image:url(1.jpg);background-size:cover;">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey" style="background-color:rgba(0,0,0,0.2)">
                
                <form id="contact-form" action="touch_code.php" method="post" role="form" class="contactForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" style="color:white;">
                                Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                            <div class="validation"></div>
                        </div>
						<div class="form-group">
                            <label for="name" style="color:white;">
                                Mobile</label>
                            <input type="text" name="mob" pattern="[\d*]{10}" maxlength="10" title="Only numbers are allowed and must be of 10 digits" class="form-control" id="name" placeholder="Enter Your 10 digit Mobile number" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                            <div class="validation"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject" style="color:white;">
                                Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
					    <div class="form-group">
                            <label for="email" style="color:white;">
                                Email Address</label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" style="color:white;">
                                Message</label>
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required ></textarea>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact" style="color:white;">
			<br> 
			     <h5 style="margin-left:25px">Aakash Mathur</h5>
			     <h5 style="margin-left:25px">Director , PWP Inc.</h5>
			
			
				<h5 style="margin-left:25px">Main Office</h5>				
				<address style="margin-left:25px">
				  <strong>POPULAR WEDDING PLANNER</strong>
				  <br>
				  N8/247, Shiv Nivas, Newada,D.L.W., B.H.U. Road
                  Varanasi, India 221005
				  <br>
				  <abbr title="Phone">P:</abbr> (+91) 093891 66661
				</address>

				<address style="margin-left:25px">
				  <strong>Email</strong><br>
				  <a href="mailto:#" style="color:white;">email.name@example.com</a>
				</address>	
				<address style="margin-left:25px">
				  <strong>We're on social networks</strong><br>
                 <ul class="social-network social-circle">
                    <li><a href="https://www.facebook.com/popularweddingplanner/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

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
