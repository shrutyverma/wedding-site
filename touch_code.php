<?php
session_start();

$name=$_POST['name'];
//echo $name;
$mob=$_POST['mob'];
//echo $mob
$email=$_POST['email'];
//echo $email;
$subject=$_POST['subject'];
//echo $subject;
$message=$_POST['message'];
//echo $message;

mysql_connect('localhost','root','');
mysql_select_db("pwp");
mysql_query($query="insert into tbl_touch (name,mob,email,subject,message) values ('$name','$mob','$email','$subject','$message')");

//mysql_query($query);


header("Location:index.php");



?>