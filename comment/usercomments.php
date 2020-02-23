<?php
$pic_id=$_POST['pic_id'];
//echo $pic_id;

$name_entered= $_POST['name'];
//echo $name_entered;
$comment_entered= $_POST['comment'];
//echo $comment_entered;
$table= $_POST['webpage'];
//echo $table;
$date= date("m-d-Y");
//echo $date;
$user = "user"; 
//echo $user;
$password = "password"; 
//echo $password;
$host = "host"; 
//echo $host;
$dbase = "database"; 
//echo $dbase;
$connection= mysql_connect ('localhost','root','');
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysql_select_db("pwp", $connection);


$val = mysql_query("select 1 from $table");

if($val !== FALSE)
{
   
if ((!empty($name_entered)) && (!empty($comment_entered)))
{
mysql_query("INSERT INTO $table ( pic_id, name, date, comments)
VALUES ($pic_id, '$name_entered', '$date', '$comment_entered')");
}

$result= mysql_query( "SELECT * FROM $table where pic_id='$pic_id' ORDER BY ID DESC" ) 
or die("SELECT Error: ".mysql_error()); 

while ($row = mysql_fetch_array($result)){ 
$name_field= $row['name'];
$date_field= $row['date'];
$comment_field= $row['comments'];


echo "$name_field wrote: ($date_field) <br>";
echo "$comment_field";
echo "<br><hr><br>";

}
}

else
{
  

$createtable= "CREATE TABLE $table
( ".
"ID INT NOT NULL AUTO_INCREMENT, ".
"pic_id INT(4) NOT NULL,".
"name VARCHAR(50) NOT NULL, ".
"date VARCHAR(50) NOT NULL, ".
"comments VARCHAR(60000) NOT NULL, ".
"PRIMARY KEY (ID)
);
";

$create= mysql_query($createtable, $connection);


if ($create)
{

if ((!empty($name_entered)) && (!empty($comment_entered)))
{
mysql_query("INSERT INTO $table ( pic_id, name, date, comments)
VALUES ($pic_id, '$name_entered', '$date', '$comment_entered')");
	
}

$result= mysql_query( "SELECT * FROM $table where pic_id='$pic_id' ORDER BY ID DESC" ) 
or die("SELECT Error: ".mysql_error()); 


while ($row = mysql_fetch_array($result)){ 
$name_field= $row['name'];
$date_field= $row['date'];
$comment_field= $row['comments'];


echo "$name_field wrote: ($date_field)<br>";
echo "$comment_field";
echo "<br><hr><br>";

}

}//if createtable

}//else

?> 

