<?php?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallery Video</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
    
    <!-- =======================================================
        Theme Name: Squadfree
        Theme URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
<!-- Insert to your webpage before the </head> -->
    <script src="vgallery/sliderengine/jquery.js"></script>
    <script src="vgallery/sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="vgallery/sliderengine/amazingslider-1.css">
    <script src="vgallery/sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
  
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" >
	<!-- Preloader -->
	<div id="preloader"  >
	  <div id="load" ></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation"  >
        <div class="container" >
		
		<div class="navbar-header page-scroll;" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
				<img src="pwp.png"></a>
			</div>
		
            <div class="navbar-header page-scroll;" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">					
                    <h1>Popular Wedding Planner</h1>
                </a>
				</div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav"  >
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
		<li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register<b class="caret" ></b></a>
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
    <section id="intro" class="intro" >
	
		<div class="slogan">
			<h2 style="color:#FDF84E;font-size:30px;">IT’S YOUR WEDDING – HAVE IT YOUR WAY!<span class="text_color"></span> </h2>
			<h4 style="color:#FDF84E;">WE STRIVE TO BE THE BEST AT WHAT WE DO.</h4>
		</div>
		<div class="page-scroll" >
			<a href="#video" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

    
    <!-- Insert to your webpage where you want to display the slider -->
	<section id="video" class="home-section text-center" style="background-color:#FDFBCD; ">
    <div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2 style="text-align:center;">videos</h2>
					<center><i class="fa fa-2x fa-angle-down"></i></center>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div></br>

	<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;margin:0px auto 108px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
			     <?php
				    mysql_connect('localhost','root','');
                    mysql_select_db("pwp");
					$query1="select * from upload_img";
                    $result=mysql_query($query1);
					while($row=mysql_fetch_array($result,MYSQL_BOTH))
					{						
				 ?>
			
                <li><img src="photo/thumb/<?php echo $row[1];?>" />
                <video preload="none" src="<?php echo $row[4];?>" ></video>
                </li>
				<?php
					}
				?>
                
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
			  <?php
			     mysql_connect('localhost','root','');
                 mysql_select_db("pwp");
			     $query="select * from upload_img";
                 $res=mysql_query($query);
				 while($row=mysql_fetch_array($res,MYSQL_BOTH))
				 {
				?>
                <li><img src="photo/thumb/<?php echo $row[1];?>" /></li>
                <?php
				 }
				?>
            </ul>
        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive JavaScript Image Slider">Responsive JavaScript Image Slider</a></div>
        </div>
    </div></br></br>
    <!-- End of body section HTML codes -->
    </section>
</body>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom" >
	<footer>
		<div class="container" >
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
                        <a href="https://bootstrapmade.com/free-one-page-bootstrap-themes-website-templates/"></a>
                    </div>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
   
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
   
    
</body>

</html>
