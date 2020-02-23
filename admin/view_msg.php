<?php
session_start();
if($_SESSION['username']=="")
{
session_destroy();
header('location:index.php?msg=3');
}
mysql_connect('localhost','root','');
mysql_select_db("pwp");
$query1="select * from tbl_touch order by tid";
$result=mysql_query($query1);
?>
<html>
<head>
<title>View Messages</title>
<style>
     .menu
{
	height:50px;
	width:220px;
	float:left;
	border-radius:5px;
	background:rgba(123,125,145,0.8);
	text-align:center;
	padding-top:20px;
	font-size:25px;
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
<a href="changepassword.php"><div class="menu">Change Password</div></a>
<a href="logout.php"><div class="menu">logout</div></a>
<br/><br/><br/><br/><br/>
<center> <h1>All Messages</h1></center>
<table border="2" cellspacing="1px" width="100%"cellpadding="10px" style="background-color:white">
    <tr>
     <th>Id</th>
	 <th>Name</th>
	 <th>Mobile</th>
	 <th>Email</th>
	 <th>Subject</th>
	 <th>Messages</th>
	</tr>
	   <?php
          mysql_connect('localhost','root','');
          mysql_select_db("pwp");
          $query1="select * from tbl_touch";
          $result=mysql_query($query1);
		  while($row=mysql_fetch_array($result,MYSQL_BOTH))
           {
        ?>
		<tr>
		    <td><?php echo $row[0];?></td>
            <td><?php echo $row[1];?></td>
            <td><?php echo $row[2];?></td>
            <td><?php echo $row[3];?></td>
            <td><?php echo $row[4];?></td>
			<td><?php echo $row[5];?></td>
	    </tr>
		<?php
           }
        ?>
</table>
</body>
</html>