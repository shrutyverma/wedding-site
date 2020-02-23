<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==7)
{
?>
<script>
 alert("You already have an Appointment");
</script>
<?php
}
if($msg==9)
{
?>
<script>
 alert("Appointment booked Successfully");
</script>
<?php
}

session_start();
$email=$_SESSION['email'];
if($_SESSION['email']=="")
{
session_destroy();
header("Location:user_login.php?msg=3");
}
include('connection.php');
$query="select user_id from tbl_user where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
//echo $row['patient_id'];
$user_id=$row[0];
?>


<html lang="en">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Appointment</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet" />
<Script Language=Javascript>
	 function CheckDate()
  {

var str1  = document.getElementById("demo1");
var str2  = document.getElementById("todate");
var string1 = str1.value;
var string2 = str2.value;

var arrfromdate = string1.split("-");
var fdate = arrfromdate[0];
var fmonth = arrfromdate[1];
var fyear = arrfromdate[2]; 

var arrtodate = string2.split("/");
var tdate = arrtodate[0];
var tmonth= arrtodate[1];
var tyear = arrtodate[2];

var date1 = new Date(fyear, fmonth, fdate); 
var date2 = new Date(tyear, tmonth, tdate);
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");


var dmonth = fmonth-1;

var date3 = new Date(fyear, dmonth, fdate); 
var dayname  = dayNames[date3.getDay()];

 if(date1 > date2)
 {
  alert("You cant take appointment for this date..");
   document.getElementById("demo1").style.backgroundColor="#FFFFE0"; 
  document.getElementById("demo1").value = "";
 return false;
 }
 else if(dayname =="Sunday")
 {
  alert("Sunday is Holiday..");
   document.getElementById("demo1").style.backgroundColor="#FFFFE0"; 
  document.getElementById("demo1").value = "";
 return false;
 }
 }
    </Script>
	<style>
 #outer
  {
	border:1px solid;
	width:40%;
	height:350px;
	margin:0px auto; 
	background-color:#FDFBCD;
  }
  #inner
  {
	 
	  margin:0px auto;
	  width:55%;
	  margin-top:20px;
  }
  body{
	  background-color:#FDFBCD;
	  background-size:cover;
	  background-repeat:no-repeat;
  }

	</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
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
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">My profile<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="user_profile.php">home</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   	<!-- Section: about -->
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<h1 align="center">Make an Appointment</h1>
  <div id="outer" >
        
        <div id="inner">
		 <?php
		 include('connection.php');
		 $query1="select * from tbl_user where email='$email'";
         $res1=mysql_query($query1);
         if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
		 ?>
		 <form method="post" action="appointmenttime.php?user_id=<?php echo $row1[0];?>">
		  <br/>
		   <center>  
		    <table>
		     <tr><th>Name : </th><th><input type="text" name="name" readonly="readonly" value=<?php echo $row1[1]; ?>></th></tr>
			 <tr><th>Mobile no : </th><th><input type="text" name="mob" readonly="readonly" value=<?php echo $row1[7]; ?>></th></tr>
			 <tr><th>Address : </th><th><input type="text" name="address" readonly="readonly" value=<?php echo $row1[5]; ?>></th></tr>
			 </table></center>
			 <br>
			<center> <input type="hidden" name="todate" id="todate" value="<?php echo $tdate; ?>">
             <h5><b> Appointment Date :</h5></b><label for="select"></label></center>
			 <script type="text/javascript">
             function show_alert()
             {
	           alert("Please select Date Time Picker");
             }
             </script>
             <script src="sample/datetimepicker_css.js"> </script>
            <center> <input type="Text" id="demo1" maxlength="25" size="25" onclick="show_alert()" name="dateofbirth" readonly  class="validate[required]"  onchange="CheckDate()"/>
             <img src="cal.gif" onclick="javascript:NewCssCal ('demo1','ddMMyyyy','','','','','future')"  style="cursor:pointer"/></center>
			 <br/>
             <center><b><input type="submit" name="submit" style="font-size:15;"></b></center>
		 </form>
         </div>
     </div>	</br>	</br>	</br>	</br>	</br>
	 
	<!-- /Section: about -->
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
