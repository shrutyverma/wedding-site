<?php
session_start();
if($_SESSION['username']=="")
{
session_destroy();
header('location:index.php?msg=4');
}
?>
	 

<html>
<head>
<title></title>
<style>
     #outer
	 {
		 height:530px;
		 width:400px;
		 background-color:cyan;
		 border:1px solid;
		 margin:0px auto;
	 }
	 table
	 {
		 margin-top:20px;
		 margin-left:17px;
		 border:3px solid red;
		 
	 }
	 img
	 {
		 border:3px solid red;
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
</style>
</head>
<body bgcolor="blue">
<a href="adminzone.php"><div class="menu">Dashboard</div></a>
<a href="uploadpic.php"><div class="menu">Upload Photos</div></a>
<a href="upload_vid.php"><div class="menu">Upload Videos</div></a>
<a href="view_msg.php"><div class="menu">View Messages</div></a>
<a href="changepassword.php"><div class="menu">Change Password</div></a>
<a href="logout.php"><div class="menu">logout</div></a>
<br/><br/><br/><br/><br/>
<div id="outer">
<form action="pic_code.php" method="post" enctype="multipart/form-data">
     <table cellspacing="10px" border="1" cellpadding="10px" bordercolor="red">
  <tr>  <td> Upload pic   :<input type="file" name="file" accept="image/*"></td></tr>
	<tr><td colspan="1" align="center"> <input type="submit" value="upload"></td>
	 </table>
</form>
<center><img src="4.png" width="350" height="350"></center>
</div>
</body>
</html>