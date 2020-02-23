<?php 
session_start();
 $user_id=$_REQUEST['user_id'];
error_reporting(E_ERROR | E_PARSE);

 $appdater = date("Y-m-d", strtotime($_POST[dateofbirth]));
include("header1.php");
include("connection.php");

include("validation/header.php"); 

$resDapprec = mysql_query("SELECT * FROM appointment  user_id ='$user_id' AND app_date='$appdater'");
$appalrdytakn = mysql_num_rows($resDapprec);

$resDapp1 = mysql_query("SELECT * FROM appointment WHERE app_time='$wordChunks[$i]' AND app_date='$appdater'");
$resDapp = mysql_query("SELECT * FROM timings");
$resDapp = mysql_query("SELECT * FROM timings");
while($row12 = mysql_fetch_array($resDapp))
  			{
		$timrec = $row12["timings"];
			}
			


$wordChunks = explode(" ", $timrec);
for($i = 0; $i < count($wordChunks); $i++)
{
		$resDapp1 = mysql_query("SELECT * FROM appointment WHERE app_time='$wordChunks[$i]' AND app_date='$appdater'");
		while($row12t = mysql_fetch_array($resDapp1))
  			{
		$timrect = $row12t["app_time"];
			}
		
	if($timrect != $wordChunks[$i])
	{
	$ctime[$i] = $wordChunks[$i] ;
	}
}

if(isset($_POST["btnapp"]))
{
	
 $wordChunks = explode("-", $_POST['appdate']);
for($i = 0; $i < count($wordChunks); $i++)
{
$date[$i] = $wordChunks[$i] ;
}

if(strlen($date[1]) == 1)
{
$date[1] = "0". $date[1];
}
include("connection.php");
$query="select * from tbl_user where user_id='$user_id'";
$res1=mysql_query($query);
while($row=mysql_fetch_array($res1,MYSQL_BOTH))
{
	echo $name=$row['name'];
	echo $mob=$row['mob'];
	echo $address=$row['address'];
}
$apptakenrec = mysql_query("SELECT * FROM appointment");

$sql="INSERT INTO appointment(user_id,name,mob,address,booking_date,app_time,app_date,status) 
VALUES ('$user_id','$name','$mob','$address',now(),'$_POST[radio]', '$date[2]-$date[1]-$date[0]','Pending')";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}

header("Location: appointmenttaken.php?user_id=$user_id");

	
}
$date1 = date("Y-m-d h:i A"); 
$date2 = date("d-m-Y"); 
	

//$arraytime=array("09:00","09:15","09:30","09:45","10:00","10:15","10:30","10:45","11:00","11:15","11:30","11:45","12:00","12:15","12:30","12:45","01:00","01:15","01:30","01:45","02:00","02:15","02:30","02:45","03:00","03:15","03:30","03:45","04:00","04:15","04:30","04:45","05:00","05:15","05:30","05:45","06:00","06:15","06:30","06:45","07:00","07:15","07:30","07:45");
?>

   
 
<!-- ####################################################################################################### -->
<div id="container">
  <div class="wrapper">
    <div id="content">
      <h1>
        <?php

 echo "Appointment Date : ".$_POST[dateofbirth]. "<br>";

 $datap = strtotime(date("d-m-Y h:i A"));
// echo strtotime(date("d-m-Y h:i"));

//echo strtotime(date("d:m:Y  h:i")) - strtotime("12:12:2015 06:10");
?>
      </h1>
      <?php
	  if($appalrdytakn == 0)
	  {
	  ?>
      
      <h1>      Appointment Time
      </h1>
      
    <form id="formID" class="formular1" method="post" action="">
       
        <input type="hidden" name="appdate" value="<?php echo $_POST["dateofbirth"]; ?>">

<table width="734" border="1">
  <tr>
    <th width="253" align="center"><strong>Morning</strong></th>
    <th width="186" align="center"><strong>Afternoon</strong></th>
    <th width="273" align="center"><strong>Evening</strong></th>
   </tr>
    <tr> 
<?php


	echo "<td width='253' align='center'>";
	for ($ij=0; count($ctime) > $ij; $ij++)
  		{
	if( (strtotime($date1) < strtotime($_POST[dateofbirth]." ".$ctime[$ij]. "AM")) && ($ctime[$ij] == "09:00" || $ctime[$ij] ==  "09:15" || $ctime[$ij] == "09:30" || $ctime[$ij] == "09:45" || $ctime[$ij] == "10:00" ||$ctime[$ij] ==  "10:15" || $ctime[$ij] == "10:30" || $ctime[$ij] == "10:45" || $ctime[$ij] == "11:00" || $ctime[$ij] == "11:15" || $ctime[$ij] == "11:30" || $ctime[$ij] == "11:45"))
	{	
		echo "  <strong><input type='radio' name='radio' id='radio23' value='$ctime[$ij]'  class='validate[required] radio'/> $ctime[$ij] AM</strong><hr>";
	}
	}
	echo "</td>";
	
    echo "<td width='186' align='center'>";
	for ($ij=0; count($ctime) > $ij; $ij++)
  		{
	if( (strtotime($date1) < strtotime($_POST[dateofbirth]." ".$ctime[$ij]. "PM")) && ($ctime[$ij] == "12:00" || $ctime[$ij] == "12:15" || $ctime[$ij] == "12:30" || $ctime[$ij] == "12:45" || $ctime[$ij] == "01:00" || $ctime[$ij] == "01:15" || $ctime[$ij] == "01:30" || $ctime[$ij] == "01:45" || $ctime[$ij] == "02:00" || $ctime[$ij] == "02:15" || $ctime[$ij] == "02:30" || $ctime[$ij] == "02:45" || $ctime[$ij] == "03:00" || $ctime[$ij] == "03:15" || $ctime[$ij] == "03:30" || $ctime[$ij] == "03:45"))
	{
	echo "<strong><input type='radio' name='radio' id='radio23' value='$ctime[$ij]' class='validate[required] radio' /> $ctime[$ij] PM</strong><hr>";
	}
		}
	echo "</td>";
	
    echo "<td width='273' align='center'>";
	for ($ij=0; count($ctime) > $ij; $ij++)
  		{
	if( (strtotime($date1) < strtotime($_POST[dateofbirth]." ".$ctime[$ij]. "PM")) && ($ctime[$ij] == "04:00" || $ctime[$ij] == "04:15" || $ctime[$ij] == "04:30" || $ctime[$ij] == "04:45" || $ctime[$ij] == "05:00" || $ctime[$ij] == "05:15" || $ctime[$ij] == "05:30" || $ctime[$ij] == "05:45" || $ctime[$ij] == "06:00" || $ctime[$ij] == "06:15" || $ctime[$ij] == "06:30" || $ctime[$ij] == "06:45" || $ctime[$ij] == "07:00" || $ctime[$ij] == "07:15" || $ctime[$ij] == "07:30" || $ctime[$ij] == "07:45"))
	{
	echo "<strong><input type='radio' name='radio' id='radio23' value='$ctime[$ij]'  class='validate[required] radio'/> $ctime[$ij] PM</strong><hr>";
	}
		}
	echo "</td> ";
	
  
 ?>
</tr>
  <tr>
    <th colspan="3" align="center">  
    <input type="hidden" name="appdate" value="<?php echo $_POST[dateofbirth]; ?>">  
     <input type="submit" name="btnapp" id="btnapp" value="Click Here to Continue" /></th>
    </tr>
 </table>
 </form>
 <?php
	  }
	  else
	  {
		  ?>
   <form id="formID1" class="formular11" method="post" action="appointmenttaken.php">
        <table width="734" border="1">
          <tr>
    <th align="center"><strong>Failed</strong><strong></strong></th>
    </tr>
    <tr>
      <th align="center"></th>
    </tr>
    <tr>
    <th align="center">  
    <input type="hidden" name="appdate" value="<?php echo $_POST[dateofbirth]; ?>">  
     <input type="submit" name="btnapp" id="btnapp" value="Click Here to Check Appointment Records" /></th>
    </tr>
 </table>
  </form>
  <?php
	  }
	  ?>
      <h2>&nbsp;</h2>
</div>

    <br class="clear" />
  </div>
</div>
