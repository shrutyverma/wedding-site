<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
include("connection.php");
include("header1.php");

?>
<?php 

if(isset($_POST[dtar]))
{
	$datad = date("Y-m-d", strtotime($_POST['dtar']));
}
else
{
$datad = date("Y-m-d");
}

$resapp = mysql_query("SELECT * FROM appointment where app_date ='$datad'");

$resapp = mysql_query("SELECT * FROM appointment where app_date ='$datad'");

?>

<?php
if($_SESSION['username']=="")
{
session_destroy();
header('location:index.php?msg=3');
}
?>
<html>
<head>
<script src="jquery-2.1.4.min.js">
</script>
<script>
$(document).ready(function()
{
	
});
function demo(u)
{
	var btn=$(u);
	var btn_id=btn.attr("id");
	var btn_txt=btn.text();
	//alert(btn_txt);
	//Ajax part
	$.ajax({
		type:"post",
		url:"update_status.php",
		data:"id="+btn_id+"="+btn_txt,
		success:function(res){
			btn.text(res);
		}
	})
}

</script>
<style>
.menu
{
	height:50px;
	width:188px;
	float:left;
	border-radius:5px;
	background:rgba(123,125,145,0.8);
	text-align:center;
	padding-top:20px;
	font-size:20px;
	margin:2px;
	color:white;
	transition:background 2s,color 2s,font-size 2s,font-weight 2s;
}
.menu:hover
{
	background:rgba(1,1,1,0.8);
	color:yellow;
	font-size:22px;
	font-weight:100;
	transition:background 2s,color 2s,font-size 2s,font-weight 2s;
}
</style>
</head>
<body bgcolor="blue">
<a href="adminzone.php"><div class="menu">Dashboard</div></a>
<a href="profile.php"><div class="menu">Upload Photos</div></a>
<a href="upload_vid.php"><div class="menu">Upload Videos</div></a>
<a href="view_msg.php"><div class="menu">View Messages</div></a>
<a href="allappointment.php"><div class="menu">View Appointments</div></a>
<a href="changepassword.php"><div class="menu">Change Password</div></a>
<a href="logout.php"><div class="menu">logout</div></a>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<center> <h1>All Appointments</h1></center>
<p>      <form method="post" action="">
      
      <table width="465" border="1">
        <tr>
          <td width="152"><label for="textfield"><strong>Date :<?php  echo date("d-M-Y", strtotime($datad)); ?></strong></label></td>
          <td width="204"><script src="../datetimepicker_css.js"></script>
            <input type="text" id="demo1" maxlength="25" readonly="readonly" size="25" name="dtar" />
          <img src="../cal.gif" alt="" width="21" height="22" style="cursor:pointer" onclick="javascript:NewCssCal ('demo1','ddMMyyyy','','','','','')" /></td>
          <td width="87"><input type="submit" name="button" id="button" value="Search" /></td>
        </tr>
      </table></form></p>
<table border="2" cellspacing="0px" width="100%" style="background-color:white">
<tr>
            <th width="124" height="42" scope="col">App No.</th>
            <th width="54" scope="col">Client Name </th>
            <th width="102" scope="col">Mobile Number</th>
            <th width="78" scope="col">Address</th>
			<th width="78" scope="col">Date Of Booking</th>
			<th width="78" scope="col">Date Of Appointment</th>
            <th width="95" scope="col">Appointment Time</th>
            <th width="136" scope="col"><p>Status</p></th>
			
          </tr>
      <?php
  while($row1 = mysql_fetch_array($resapp))
  {
	  $respac = mysql_query("SELECT * FROM tbl_user where user_id='$row1[user_id]'");
	  ?>
          <tr>
            <td height="60">&nbsp;<?php echo $row1["apt_id"]; ?></td>
            <td><?php echo $row1["name"]; ?></td>
			 <td><?php echo $row1["mob"]; ?></td>
			  <td><?php echo $row1["address"]; ?></td>
			  <td><?php echo $row1["booking_date"]; ?></td>
			  <td><?php echo $row1["app_date"]; ?></td>
			  <td><?php echo $row1["app_time"]; ?></td>
			  <td align="center"><button id="<?php echo $row1[0];?>" onclick="demo(this)"><?php echo $row1["status"];?></button></td>
			  
         
          </tr>
          <?php
          }
		  ?></table>
</body>
</html>