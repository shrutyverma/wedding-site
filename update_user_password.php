<?php
session_start();
$pass=$_POST['password'];
//echo $pass;
$email=$_SESSION['email'];
include("connection.php");
$update="update tbl_user set pass='$pass' where email='$email'";
mysql_query($update);
header("location:logout.php");
?>