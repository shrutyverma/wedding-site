<?php
session_start();
if($_SESSION['username']=="")
{
session_destroy();
header('location:index.php?msg=4');
}
//echo "hi";
    include("connection.php");
    $procap1=$_POST['pro_cap1'];
	
	$procap2=$_POST['pro_cap2'];
	$procap3=$_POST['pro_cap3'];
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
			}
			
		}
	}


	$profiletmp1 = $_FILES["profile1"]["tmp_name"];
	//echo $profiletmp1;
	$profilename1 = $_FILES["profile1"]["name"];
	//echo $profilename1;
	$profiletype1 = $_FILES["profile1"]["type"];
	$profilesize1 = $_FILES["profile1"]["size"];
			
	$procmnt1 = $_POST['procmnt1'];
	$caption = $_POST['caption'];
	$cap_detail = $_POST['cap_detail'];	
	$profileinfo1 = getimagesize($_FILES["profile1"]["tmp_name"]);
	//echo $profileinfo1;
	$profilewidth1 = $profileinfo1[0];
	$profileheight1 = $profileinfo1[1];
	$profilepath1 = "../images/".$profilename1;
	$profilepath_thumb1 = "../images/thumbs/".$profilename1;
	
    if($profiletmp1 == "")
	{
		echo "please select a photo";
	}
	else
	{
		
		if($profilesize1 > 5242880)
		{
			echo "photo > 5mb";
		}
		else
		{
			
			if($profiletype1 != "image/jpeg" && $profiletype1 != "image/png" && $profiletype1 != "image/gif")
			{
				echo "Please upload jpg / png / gif";
			}
			else
			{
				
				move_uploaded_file($profiletmp1,$profilepath1);				
				
				if($profiletype1 == "image/jpeg")
				{
				  $imagecreate1 = "imagecreatefromjpeg";
				  $imageformat1 = "imagejpeg";
				}
				if($profiletype1 == "image/png")
				{						 
				  $imagecreate1 = "imagecreatefrompng";
				  $imageformat1 = "imagepng";
				}
				if($profiletype1 == "image/gif")
				{						 
				  $imagecreate1 = "imagecreatefromgif";
				  $imageformat1 = "imagegif";
				}
				
				$new_width1 = "70";
				$new_height1 = "70";
								
				$image_p1 = imagecreatetruecolor($new_width1, $new_height1);
				$image1 = $imagecreate1($profilepath1); //photo folder
						
				imagecopyresampled($image_p1, $image1, 0, 0, 0, 0, $new_width1, $new_height1, $profilewidth1, $profileheight1);						
				$imageformat1($image_p1, $profilepath_thumb1);//thumb folder		
					
			}
			
		}
	}
	$profiletmp2 = $_FILES["profile2"]["tmp_name"];
	echo $profiletmp2;
	$profilename2 = $_FILES["profile2"]["name"];
	echo $profilename2;
	$profiletype2= $_FILES["profile2"]["type"];
	$profilesize2= $_FILES["profile2"]["size"];
	
	$procmnt2 = $_POST['procmnt2'];
     echo $procmnt2;
	$profileinfo2 = getimagesize($_FILES["profile2"]["tmp_name"]);
	//echo $profileinfo2;
	$profilewidth2 = $profileinfo2[0];
	$profileheight2 = $profileinfo2[1];
	$profilepath2 = "../images/".$profilename2;
	$profilepath_thumb2 = "../images/thumbs/".$profilename2;
	
	
	if($profiletmp2 == "")
	{
		echo "please select a photo";
	}
	else
	{
		
		if($profilesize2 > 5242880)
		{
			echo "photo > 5mb";
		}
		else
		{
			
			if($profiletype2 != "image/jpeg" && $profiletype2 != "image/png" && $profiletype2 != "image/gif")
			{
				echo "Please upload jpg / png / gif";
			}
			else
			{
				
				move_uploaded_file($profiletmp2,$profilepath2);				
				
				if($profiletype2 == "image/jpeg")
				{
				  $imagecreate2 = "imagecreatefromjpeg";
				  $imageformat2 = "imagejpeg";
				}
				if($profiletype2 == "image/png")
				{						 
				  $imagecreate2 = "imagecreatefrompng";
				  $imageformat2 = "imagepng";
				}
				if($profiletype2 == "image/gif")
				{						 
				  $imagecreate2 = "imagecreatefromgif";
				  $imageformat2 = "imagegif";
				}
				
				$new_width2 = "70";
				$new_height2 = "70";
								
				$image_p2 = imagecreatetruecolor($new_width2, $new_height2);
				$image2 = $imagecreate2($profilepath2); //photo folder
						
				imagecopyresampled($image_p2, $image2, 0, 0, 0, 0, $new_width2, $new_height2, $profilewidth2, $profileheight2);						
				$imageformat2($image_p2, $profilepath_thumb2);//thumb folder		
					
			}
			
		}
	}
	$profiletmp3 = $_FILES["profile3"]["tmp_name"];
	echo $profiletmp3;
	$profilename3 = $_FILES["profile3"]["name"];
	echo $profilename3;
	$profiletype3 = $_FILES["profile3"]["type"];
	$profilesize3 = $_FILES["profile3"]["size"];
	 
	$procmnt3 = $_POST['procmnt3'];
	echo $procmnt3;
	$profileinfo3 = getimagesize($_FILES["profile3"]["tmp_name"]);
	//echo $profileinfo3;
	$profilewidth3 = $profileinfo3[0];
	$profileheight3 = $profileinfo3[1];
	$profilepath3 = "../images/".$profilename3;
	$profilepath_thumb3 = "../images/thumbs/".$profilename3;
	

	if($profiletmp3 == "")
	{
		echo "please select a photo";
	}
	else
	{
		
		if($profilesize3 > 5242880)
		{
			echo "photo > 5mb";
		}
		else
		{
			
			if($profiletype3 != "image/jpeg" && $profiletype3 != "image/png" && $profiletype3 != "image/gif")
			{
				echo "Please upload jpg / png / gif";
			}
			else
			{
				
				move_uploaded_file($profiletmp3,$profilepath3);				
				
				if($profiletype3 == "image/jpeg")
				{
				  $imagecreate3 = "imagecreatefromjpeg";
				  $imageformat3 = "imagejpeg";
				}
				if($profiletype3 == "image/png")
				{						 
				  $imagecreate3 = "imagecreatefrompng";
				  $imageformat3 = "imagepng";
				}
				if($profiletype3 == "image/gif")
				{						 
				  $imagecreate3 = "imagecreatefromgif";
				  $imageformat3 = "imagegif";
				}
				
				$new_width3 = "70";
				$new_height3 = "70";
								
				$image_p3 = imagecreatetruecolor($new_width3, $new_height3);
				$image3 = $imagecreate3($profilepath3); //photo folder
						
				imagecopyresampled($image_p3, $image3, 0, 0, 0, 0, $new_width3, $new_height3, $profilewidth3, $profileheight3);						
				$imageformat3($image_p3, $profilepath_thumb3);//thumb folder		
					
			}
			
		}
	}
                $sql = "INSERT INTO tbl_pic (pic_name,profile1,profile2,profile3,procmnt1,procmnt2,procmnt3,pro_cap1,pro_cap2,pro_cap3,caption,cap_detail) 
				VALUES ('$filename','$profilename1','$profilename2','$profilename3','$procmnt1','$procmnt2','$procmnt3','$procap1','$procap2','$procap3','$caption','$cap_detail')";
				$result = mysql_query($sql);
                header('location:adminzone.php?msg=8');

?>