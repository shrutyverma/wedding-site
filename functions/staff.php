<?php
session_start();

// Login to doctors account
function loginfuntion($username,$password)
{
	//LOGIN QUERY
$resultlogin = mysql_query("SELECT * FROM admin WHERE username ='$username' AND password='$password' ");

$resultlogin2 = mysql_query("SELECT * FROM admin WHERE username ='$username' AND password!='$password' ");
// LOGIN VALIDATON
	if(mysql_num_rows($resultlogin) == 1)
	{
 	$_SESSION["username"] =$loginid;

	}
	
	elseif(mysql_num_rows($resultlogin2) == 1)
	{
		$is= "Invalid Password entered.";
		return $is;
	}
	else
	{
	$in= "Login ID not Exists. ";
	return $in;
	}
}
$resultpro = mysql_query("SELECT * FROM admin WHERE username ='$_SESSION[username]'");

while($row = mysql_fetch_array($resultpro))
  {
$_SESSION["id"] =  $row['id'] ; 	 	
  }
?>
