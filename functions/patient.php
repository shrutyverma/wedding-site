<?php
session_start();

// Login to patient account
function loginfuntion($user_id,$password)
{
	

	//LOGIN QUERY
$resultlogin = mysql_query("SELECT * FROM tbl_user WHERE user_id ='$user_id' AND password='$password' ");

$resultlogin2 = mysql_query("SELECT * FROM tbl_user  WHERE user_id ='$user_id' AND password='$password' ");
// LOGIN VALIDATON
	if(mysql_num_rows($resultlogin) == 1)
	{
 				$_SESSION["user_id"] =$loginid;
				$resultpro = mysql_query("SELECT * FROM tbl_user WHERE user_id ='$_SESSION[user_id]'");
				while($row = mysql_fetch_array($resultpro))
  				{
				$_SESSION["name"] =  $row['name'];	 	
  				}
	}
	
	elseif(mysql_num_rows($resultlogin2) == 1)
	{
		$is= "Invalid Password.(Enter your Registered Password)";
		return $is; 
	}
	else
	{
		$in= "Login ID not Exists. ";
	return $in;
	}
	

  
}
	

?>