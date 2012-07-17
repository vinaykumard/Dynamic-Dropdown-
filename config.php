<?php
$mysql_hostname = "Host";
$mysql_user = "UserName";
$mysql_password = "Password";
$mysql_database = "DatabaseName";

	
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("We are Updating.. We'll get back soon");
mysql_select_db($mysql_database, $bd) or die("We are Updating.. We'll get back soon");

?>