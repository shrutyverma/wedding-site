<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db("pwp");
mysql_query($query="select * tbl_doc");
header("Location:service.php");