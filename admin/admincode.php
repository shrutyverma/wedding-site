<?php
session_start();
$username=$_POST['username'];
echo $username;
$pass=$_POST['password'];
echo $pass;
mysql_connect('localhost','root','');
mysql_select_db("pwp");
$query="select * from admin where username='$username' and password='$pass'";
    $res1=mysql_query($query);
	if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
	{
	echo $id=$row1[0];
	$_SESSION['username']=$username;
	header("Location:adminzone.php?id=$id");
	}
	else
	{
	header("Location:index.php?msg=1");
	}	
 ?>