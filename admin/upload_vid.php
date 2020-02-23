<?php 
session_start();
if($_SESSION['username']=="")
{
session_destroy();
header('location:index.php?msg=4');
}
mysql_connect('localhost', 'root', '')or die("cannot connect to server"); 
mysql_select_db("pwp")or die("cannot select DB");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Video</title>
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
#outer
	 {
		 height:530px;
		 width:450px;
		 background-color:cyan;
		 border:1px solid;
		 margin:0px auto;
	 }
	 table
	 {
		 margin-top:20px;
		 margin-left:17px;
		 border:3px solid red;		 
	 }
	 img
	 {
		 border:3px solid red;
		 margin-top:15px
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
<div id="outer">
<form action="upload_vid.php" method="post" enctype="multipart/form-data">
<table cellspacing="8px" border="1" cellpadding="10px" bordercolor="red"><tr><td colspan="2"><input type="file" name="file_img" /></td></tr>
<tr><td>Paste Youtube Video  link : </td><td><input type="text" name="vchar" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="btn_upload" value="Upload"></td></tr>
</table>
</form>
<center><img src="2.jpg" width="400" height="300"></center>
</div>
<?php
if(isset($_POST['btn_upload']))
{
	$vchar=$_POST['vchar'];
	$filetmp = $_FILES["file_img"]["tmp_name"];
	$filename = $_FILES["file_img"]["name"];
	$filetype = $_FILES["file_img"]["type"];
	$filesize = $_FILES["file_img"]["size"];
	$fileinfo = getimagesize($_FILES["file_img"]["tmp_name"]);
	$filewidth = $fileinfo[0];
	$fileheight = $fileinfo[1];
	$filepath = "../photo/".$filename;
	$filepath_thumb = "../photo/thumb/".$filename;
	
	if($filetmp == "")
	{
		echo "please select a photo";
	}
	else
	{
		
		if($filesize > 5242880)
		{
			echo "photo > 5mb";
		}
		else
		{
			
			if($filetype != "image/jpeg" && $filetype != "image/png" && $filetype != "image/gif")
			{
				echo "Please upload jpg / png / gif";
			}
			else
			{
				
				move_uploaded_file($filetmp,$filepath);				
				
				if($filetype == "image/jpeg")
				{
				  $imagecreate = "imagecreatefromjpeg";
				  $imageformat = "imagejpeg";
				}
				if($filetype == "image/png")
				{						 
				  $imagecreate = "imagecreatefrompng";
				  $imageformat = "imagepng";
				}
				if($filetype == "image/gif")
				{						 
				  $imagecreate= "imagecreatefromgif";
				  $imageformat = "imagegif";
				}
				
				$new_width = "900";
				$new_height = "360";
								
				$image_p = imagecreatetruecolor($new_width, $new_height);
				$image = $imagecreate($filepath); //photo folder
						
				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $filewidth, $fileheight);						
				$imageformat($image_p, $filepath_thumb);//thumb folder		
	
				$sql = "INSERT INTO upload_img (img_name,img_path,img_type,vchar) VALUES ('$filename','$filepath','$filetype','$vchar')";
				$result = mysql_query($sql);
				
			}
			
		}
	}
}
?>

</body>
</html>