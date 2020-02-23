<?php
session_start();
$email=$_POST['email'];
//echo $email;
$pass=$_POST['pass'];
//echo $pass;
mysql_connect('localhost','root','');
mysql_select_db("pwp");
$query="select * from tbl_user where email='$email' and pass='$pass'";
$res1=mysql_query($query);
            
    if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
	{
	$_SESSION['email']=$email;
	echo $email;
	header("Location:user_profile.php");
	}
	else
	{
	header("Location:user_login.php?msg=1");
	}
	
?>