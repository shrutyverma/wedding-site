<?php?>
<html lang="en">
<head>
<title>Album</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css1/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css1/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css1/grid.css" type="text/css" media="screen">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:700" rel="stylesheet" type="text/css">
<script src="js1/jquery-1.7.1.min.js"></script>
<script src="js1/jquery.galleriffic.js"></script>
<script src="js1/jquery.opacityrollover.js"></script>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->



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

</head>
<body id="page3">
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
			<a href="#content" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->
</body>
<section id="content" style="background-color:#FDFBCD; ">
  <div id="gallery">
    <div id="js">
	 <h2 class="indent-bot2">Photo Album</h2>
	  
      <div class="wrapper p4">
	  
        <div class="slideshow-container">
		
          <div id="slideshow" class="slideshow">
		  
		  </div>
		  
        </div>
        <div id="caption" class="caption-container"></div>
		
      </div>
	  
      <div id="thumbs" class="navigation">
        <ul class="thumbs noscript">
		<?php
		   
		  mysql_connect('localhost','root','');
          mysql_select_db("pwp");
		  $query="select * from tbl_pic";
		  $res1=mysql_query($query);
		  //echo $res1;
          while($row=mysql_fetch_array($res1,MYSQL_BOTH))
           {		  
		  ?>
          <li>
		         
		  <a class="thumb" href="images/thumbs/<?php echo $row[1];?>" > <img src="images/thumbs/<?php echo $row[1];?>" alt="" width="124" height="124"> </a>
            <div class="caption" style="background-color:pink; ">
			 <br>
              <h4 style="margin-left:10px;"><?php echo $row[11];?></h4>
              <div class="border-bot p3" style="margin-left:10px;">
                <p class="indent-bot"><em class="color-2"><?php echo $row[12];?></em></p>
                <a class="link-1" style="color:#f00058; text-decoration:underline;" href="comment/comment.php?picture_id=<?php echo $row[0];?>">Add Your Comment</a> </div>
              <div class="wrapper p2">
                <figure class="img-indent img-border1"><a href="#"><img src="images/thumbs/<?php echo $row[2];?>" alt=""></figure>
                <div class="extra-wrap">
                  <h6 style="color:#f00058;"><?php echo $row[8];?></h6>
                    <?php echo $row[5];?>
                   </div>
              </div>
              <div class="wrapper p2">
                <figure class="img-indent img-border1"><img src="images/thumbs/<?php echo $row[3];?>" alt=""></figure>
                <div class="extra-wrap">
                  <h6 style="color:#f00058;"><?php echo $row[9];?></h6>
                  
                  <?php echo $row[6];?> </div>
              </div>
              <div class="wrapper p2">
                <figure class="img-indent img-border1"><img src="images/thumbs/<?php echo $row[4];?>" alt=""></figure>
                <div class="extra-wrap">
                  <h6 style="color:#f00058;"><?php echo $row[10];?></h6>
                  
                  <?php echo $row[7];?></div>
              </div>
             </div> 
          </li>
		  <?php
		   }
		   ?>
          
        </ul>
      </div>
      <div id="controls"></div>
    </div>
  </div>
</section><body id="page-top" data-spy="scroll" data-target=".navbar-custom" >
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
    <script src="contactform/contactform.js"></script>
  
</body>
<script>
$(window).load(function () {
    var gallery = $('#thumbs').galleriffic({
        delay: 7000,
        numThumbs: 5,
        preloadAhead: 1000,
        enableTopPager: false,
        enableBottomPager: false,
        imageContainerSel: '#slideshow',
        controlsContainerSel: '#controls',
        captionContainerSel: '#caption',
        loadingContainerSel: '',
        renderSSControls: false,
        renderNavControls: true,
        playLinkText: '',
        pauseLinkText: '',
        prevLinkText: 'Prev',
        nextLinkText: 'Next',
        nextPageLinkText: '',
        prevPageLinkText: '',
        enableHistory: false,
        autoStart: 7000,
        syncTransitions: true,
        defaultTransitionDuration: 900
    });
});
</script>
</body>
</html>
