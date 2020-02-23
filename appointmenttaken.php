<?php 
session_start();
$user_id=$_REQUEST['user_id'];
include("connection.php");
include("header.php");
 


//CHECKS login button is submitted or not

?>
<!-- ####################################################################################################### -->
<?php 
include('connection.php');
$query="select * from appointment where user_id='$user_id'";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
  $apt_id=$row['apt_id'];
}
$resapp = mysql_query("SELECT * FROM appointment where user_id='$user_id'");
?>

<div id="container">
  <div class="wrapper">
    <div id="content">

      <h1>Appointments</h1>
      <table width="605" border="1">
      <tr>
            <th width="40" height="58" scope="col">App No.</th>
            <th width="53" scope="col">Booking<br />Date</th>
            <th width="89" scope="col">Appointment Time</th>
			<th width="85" scope="col"><p>Appointment<br /> Date</p></th>
            <th width="42" scope="col">Status</th>
           </tr>
          <?php
		  
          while($row1 = mysql_fetch_array($resapp))
  {
	  ?>
          <tr>
            <td>&nbsp;<?php echo $row1["apt_id"]; ?></td>
            <td>&nbsp;<?php echo $row1[5]; ?></td>
            <td>&nbsp;<?php echo $row1[6]; ?></td>
			<td>&nbsp;<?php echo $row1[7]; ?></td>
            <td><?php echo $row1["status"]; ?></td>
             </tr>
          <?php
          }
		  ?>
        </table>
        
        <a href="date.php">back</a>


