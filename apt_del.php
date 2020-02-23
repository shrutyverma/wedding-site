<?php
session_start();
echo $email=$_SESSION['email'];
$apt_id=$_REQUEST['apt_id'];
include('connection.php');
$query="delete from appointment where apt_id='$apt_id'";
mysql_query($query);	

header("location:user_profile.php");



?>