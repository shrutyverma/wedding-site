<?php
session_start();
$pass=$_POST['password'];
//echo $pass;
$username=$_SESSION['username'];
include("connection.php");
$update="update admin set password='$pass' where username='$username'";
mysql_query($update);
header("location:logout.php");
?>