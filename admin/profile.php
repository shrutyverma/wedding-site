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
		 height:auto;
		 width:50%;
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
	 
.menu
{
	height:50px;
	width:218px;
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
<form action="profile_code.php" method="post" enctype="multipart/form-data">
<center>
<table cellspacing="10px" border="1" cellpadding="10px" bordercolor="red" width="80%">
  <tr><td> Upload Gallery pic   :</td><td><input type="file" name="file" accept="image/*"></td></tr>
  <tr><td>caption</td><td><input type="text" name="caption"></td></tr>
  <tr><td>caption detail</td><td><input type="text" name="cap_detail"></td></tr>
  <tr><td> profile pic 1 : </td><td><input type="file" name="profile1"></td></tr>
  <tr><td>pic 1 caption :</td><td><input type="text" name="procmnt1"></td></tr>
  <tr><td>pic 1 detail :</td><td><input type="text" name="pro_cap1"></td></tr>
  <tr><td> profile pic 2 : </td><td><input type="file" name="profile2"></td></tr>
  <tr><td>pic 2 caption :</td><td><input type="text" name="procmnt2"></td></tr>
  <tr><td>pic 2 detail :</td><td><input type="text" name="pro_cap2"></td></tr>
  <tr><td> profile pic 3 : </td><td><input type="file" name="profile3"></td></tr>
  <tr><td>pic 3 caption :</td><td><input type="text" name="procmnt3"></td></tr>
  <tr><td>pic 3 detail :</td><td><input type="text" name="pro_cap3"></td></tr>  
  <tr><td colspan="2" align="center"> <input type="submit" value="upload"></td></tr>
</table>
</center>
</form>

</div>
</body>
</html>