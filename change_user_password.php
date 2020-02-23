<?php
session_start();
$username=$_SESSION['username'];
if($_SESSION['email']=="")
{
session_destroy();
header("Location:index.php");
}
include('connection.php');
$query="select * from tbl_user where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
 $pass=$row['pass'];	
?>
<html>
<head>
<style>
#header
{
	height:50px;
	width:100%;
	background:rgba(0,0,0,0.5);
	font-size:25px;
	font-weight:bold;
	text-align:center;
}
.menu
{
	height:50px;
	width:220px;
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
.btn
{
height:40px;
width:150px;
background:black;
border-radius:5px;
border:2px solid black;
color:white;
padding:10px;
text-decoration:none;
margin:10px;
cursor:pointer;
}
input
{
 width:200px;
 height:35px;
 border-radius:5px;
 margin:2px;
}

</style>
</head>
<script src="jquery-2.1.4.min.js">
</script>
<script>
$(document).ready(function()
{
	$("#txt1").blur(function()
	{
		var t1=$("#txt").val();
		var t2=$(this).val();
		if(t1==t2){
			$(this).css("border","2px solid green");
		}
		else{
			$(this).css("border","2px solid red");
			$(this).focus();
		}
	})
	$("#txt3").blur(function(){
		var t3=$("#txt2").val();
		var t4=$(this).val();
		if(t3==t4){
			$(this).css("border","2px solid green");
			//$("#butn").attr("disabled","false");
		}
		else{
			$(this).css("border","2px solid red");
			//$("#button").attr("disabled","true");
			$(this).focus();
		}
	})
})
</script>
<body bgcolor="blue">
<a href="adminzone.php"><div class="menu">Dashboard</div></a>
<a href="uploadpic.php"><div class="menu">Upload Photos</div></a>
<a href="upload_vid.php"><div class="menu">Upload Videos</div></a>
<a href="view_msg.php"><div class="menu">View Messages</div></a>
<a href="#"><div class="menu">Change Password</div></a>
<a href="logout.php"><div class="menu">logout</div></a>
<br/>
<br/>
<br/>

<h2 align="center">Change password</h2>
<form action="update_ad_password.php" method="post" align="center">
  <input type="hidden" value="<?php echo $pass;?>"id="txt"/> 
   <input type="password" id="txt1" placeholder="enter your password"><br/>
   <input type="password" id="txt2" placeholder="enter new password"><br/>
   <input type="password" id="txt3" name="password" placeholder="confirm password"><br/>
   <button type="submit" class="btn">Change</button>
   </form>
</body>
</html>
<?php
}
?> 