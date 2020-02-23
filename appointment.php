<?php
session_start();
$email=$_SESSION['email'];

if($_SESSION['email']=="")
{
	session_destroy();
	header("Location:user.php?msg=6");
}
$user_id=$_REQUEST['user_id'];
if($user_id!="")
{
include('connection.php');
$query="select * from tbl_user where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
	echo $name=$row['name'];
	echo $mob=$row['mob'];
	echo $address=$row['address'];
}
include('connection.php');
$query1="select user_id from appointment where user_id='$user_id'";
//echo $query1;
$result=mysql_query($query1);
//echo $result;
if(mysql_num_rows($result)==1)
{
 header("location:user_appointment.php?msg=7");
}
else if(mysql_num_rows($result)!=1)
{
	include('connection.php');
	$insert="insert into appointment (user_id,name,mob,address,apt_date)
	         values('$user_id','$name','$mob','$address',curdate())";
	mysql_query($insert);
	header("location:user_appointment.php?msg=9");
	
}
else
{
	 header("location:user_profile");
}
}
?>