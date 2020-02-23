<?php
session_start();
$name=$_POST['name'];
echo $name;
$mob=$_POST['mob'];
echo $mob;
$email=$_POST['email'];
echo $email;
$pass=$_POST['pass'];
echo $pass;
$gender=$_POST['a'];
echo $gender;
$address=$_POST['address'];
echo $address;
$pic=$_FILES['file']['name'];
echo $pic;
$size=$_FILES['file']['size'];
echo $size;
$tmp_name=$_FILES['file']['tmp_name'];
echo $tmp_name;
$location="user/";
mysql_connect('localhost','root','');
mysql_select_db("pwp");
$query1="select * from tbl_user where email='$email'";
$res=mysql_query($query1);
if(mysql_num_rows($res)==1){
header("Location:user.php?msg=4");	
}
if(mysql_num_rows($res)!=1)
{
mysql_query($query="insert into tbl_user (name,email,pass,gender,address,pic,mob,dor) 
values ('$name','$email','$pass','$gender','$address','$pic','$mob',curdate())");
move_uploaded_file($tmp_name,$location.$pic);
header("Location:user_login.php?msg=5");
}


?>