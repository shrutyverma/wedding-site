<?php ?>
<head>
<script>

function submitcomment() {

var request;

try {

request= new XMLHttpRequest();

}

catch (tryMicrosoft) {

try {

request= new ActiveXObject("Msxml2.XMLHTTP");
}

catch (otherMicrosoft) 
{
try {
request= new ActiveXObject("Microsoft.XMLHTTP");
}

catch (failed) {
request= null;
}
}
}


var webpage= location.href;

position= webpage.lastIndexOf("/"); 

var lastpart= webpage.substring(position + 1);

var period= lastpart.indexOf(".");

var complete= lastpart.substring(0, period);

complete= complete.replace(/-/g, "_");


var url= "usercomments.php";
var username= document.getElementById("name_entered").value;
var usercomment= document.getElementById("comment_entered").value;
var pic= document.getElementById("pic_id").value;
var vars= "pic_id="+pic+"&name="+username+"&comment="+usercomment+"&webpage="+complete;
request.open("POST", url, true);

request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

request.onreadystatechange= function() {
if (request.readyState == 4 && request.status == 200) {
	var return_data=  request.responseText;
	document.getElementById("showcomments").innerHTML= return_data;
}
}

request.send(vars);
}
</script>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background-color:black;">
 <a style="color:#f00058; text-decoration:underline;" href="../album.php">Back</a>

<div id="outer" style="background:url(comment.jpg) no-repeat top center; background-size:cover;">
<div id="imgouter" style="background-color:rgba(0, 0, 0,0.8);">
<div id="img">
<?php
	     $pic_id=$_REQUEST['picture_id'];
         mysql_connect('localhost','root','');
         mysql_select_db("pwp");
		  
         $query="select * from tbl_pic where pic_id='$pic_id'";
         $res=mysql_query($query);
         if($row=mysql_fetch_array($res,MYSQL_BOTH))
         {
		 ?>
        
        <img src="../images/<?php echo $row[1];?>"  height="500" width="500"  style="border:5px outset transparent; "></br></br></br>
        <?php
		 }
	   
		?>
</div>
</div></br>
</br>
</br>
<div id="table">
<table>
<td><input type="hidden" id="pic_id" value="<?php echo $row[0];?>" /></td>
<tr>
<td>
</td>
<td>
Name:
</td>
</tr>


<tr>
<td>
</td>
<td>
<input type="text" id="name_entered"/>
</td>
</tr>

<tr>
<td>
</td>
<td>
Comment:
</td>
</tr>


<tr>
<td>
</td>
<td>
<textarea cols="35" rows="6" id="comment_entered">
</textarea>
</td>
</tr>

<tr>
<td>
</td>
<td>
<input type="submit" value="Comment" onclick="submitcomment();"/>
</td>
</tr>

</table>
</div>
<br><br>
<div id="showcomments" style="text-align:left;">
<?php
mysql_connect('localhost','root','');
mysql_select_db("pwp");
$val = mysql_query("select 1 from comment");

if($val !== FALSE)
{
$result= mysql_query( "SELECT * FROM comment where pic_id='$pic_id'ORDER BY ID DESC" ) 
or die("SELECT Error: ".mysql_error()); 

while ($row = mysql_fetch_array($result)){ 
$name_field= $row['name'];
$date_field= $row['date'];
$comment_field= $row['comments'];


echo "$name_field wrote: ($date_field) <br>";
echo "$comment_field";
echo "<br><hr><br>";

}
}

?>

</div>
</div>
</body>
