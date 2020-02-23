<?php
session_start();
//$id=$_REQUEST['id'];
$username=$_SESSION['username'];
echo "welcome to Admin Zone"; 
if($_SESSION['username']=="")
{
session_destroy();
header('location:index.php');
}
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==8)
{
	?>
	 <script language="JavaScript" type="text/JavaScript">
	alert("Pic uploaded successfully");
	</script>
	<?php
}
include('connection.php');
$query="select * from admin where username='$username'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
	 $id=$row['id'];
	
}

?>

<html>
<head>
<style>
#header
{
	height:20%;
	width:26%;
	background-image:url(3.png);
	font-size:25px;
	font-weight:bold;
	text-align:center;
	border:1px solid;
	margin:0px auto;
}


.menu
{
	height:50px;
	width:100%;
	float:left;
	border-radius:5px;
	background:rgba(123,125,145,0.8);
	text-align:center;
	padding-top:20px;
	font-size:25px;
	margin:2px;
	color:white;
	transition:background 2s,color 2s,font-size 2s,font-weight 2s;
}
.menu:hover
{
	background:rgba(1,1,1,0.8);
	color:yellow;
	font-size:22px;
	font-weight:100;
	transition:background 2s,color 2s,font-size 2s,font-weight 2s;
}
</style>
</head>
<body background="1.jpg" style="background-size:cover;">
<div id="header"></div>
<br/><br/>
<a href="adminzone.php"><div class="menu">Dashboard</div></a>
<a href="profile.php"><div class="menu">Upload Photos</div></a>
<a href="upload_vid.php"><div class="menu">Upload Videos</div></a>
<a href="view_msg.php"><div class="menu">View Messages</div></a>
<a href="allappointment.php?id=<?php echo $row[0];?>"><div class="menu">View Appointments</div></a>
<a href="changepassword.php"><div class="menu">Change Password</div></a>
<a href="../timings.php?id=<?php echo $row[0];?>"><div class="menu">timings</div></a>
<a href="logout.php"><div class="menu">logout</div></a>

</body>
</html>