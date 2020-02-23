<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
 ?>
	 <script language="JavaScript" type="text/JavaScript">
	alert("Invalid Username or Passoword");
	</script>
	<?php
}
if($msg==2)
{
	
     ?>
	 <script language="JavaScript" type="text/JavaScript">
	alert("Logout successfully");
	</script>
	<?php
}
if($msg==3)
{
	?>
	 <script language="JavaScript" type="text/JavaScript">
	alert("Please LogIn to Continue");
	</script>
	<?php
}
if($msg==4)
{
	?>
	 <script language="JavaScript" type="text/JavaScript">
	alert("Please LogIn to Continue");
	</script>
	<?php
}
?>

<html>
<head>
<style>
body
{
	background-image:url(1.jpg);
	background-size:cover;
}
#login
{
	width:450px;
	height:200px;
	border:5px outset grey;
	margin:0px auto;
	padding:10px;
	background-color:blue;
}
input
{
	width:300px;
	height:35px;
	border:3px solid ;
	margin:10px;
}
</style>
</head>
<body>
<br/><br/>
<h1 align="center" style="color:blue">Admin Login</h1>
<br/>
<div id="login">
<form action="admincode.php" method="post">
<table cellspacing="5">
<tr>
<td><b>Username : </b></td><td><input name="username" placeholder="Enter your Username"></td>
</tr>
<tr>
<td><b>Password :</b></td><td><input type="password" name="password" placeholder="Enter your Password"></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="login"></td>
</tr>
</table>
</form>
</div>
</body>
</html>