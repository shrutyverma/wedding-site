<?php
session_start();
if($_SESSION['username']=="")
{
session_destroy();
header('location:index.php?msg=4');
}
include("connection.php");

	$filetmp = $_FILES["file"]["tmp_name"];
	$filename = $_FILES["file"]["name"];
	$filetype = $_FILES["file"]["type"];
	$filesize = $_FILES["file"]["size"];
	$fileinfo = getimagesize($_FILES["file"]["tmp_name"]);
	$filewidth = $fileinfo[0];
	$fileheight = $fileinfo[1];
	$filepath = "../images/".$filename;
	$filepath_thumb = "../images/thumbs/".$filename;
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
				
				$new_width = "603";
				$new_height = "603";
								
				$image_p = imagecreatetruecolor($new_width, $new_height);
				$image = $imagecreate($filepath); //photo folder
						
				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $filewidth, $fileheight);						
				$imageformat($image_p, $filepath_thumb);//thumb folder		
	
				$sql = "INSERT INTO tbl_pic (pic_name) VALUES ('$filename')";
				$result = mysql_query($sql);
				
			}
			
		}
	}

header('location:adminzone.php?msg=8');

?>