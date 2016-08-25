<?php 

	$dbhost='localhost';
	$username='root';
	$password='';
	$db='user';
	
	mysql_connect("$dbhost","$username","$password");
	mysql_select_db($db);
	echo "Connected to database";

?> 
