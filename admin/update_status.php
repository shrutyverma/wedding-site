<?php
$btn_id=$_POST['id'];
//echo $btn_id;
$a=explode("=",$btn_id);
$id=$a[0];
$txt=$a[1];
if($txt=='Pending')
	$txt='Confirmed';
else
	$txt='Pending';
include("../connection.php");
$q=mysql_query("update appointment set status='$txt' where apt_id='$id'");
if(!$q)
	echo $txt;
else
	echo $txt;
?>