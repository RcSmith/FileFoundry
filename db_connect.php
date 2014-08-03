<?php

$hostname = "db530243879.db.1and1.com";
$database = "db530243879";
$username = "dbo530243879";
$password = "apollo18";

$link = mysql_connect($hostname, $username, $password);

if(!$link) {
	die('Connection failed: ' .mysql_error());
} else {
	echo "Connection to MySQL server " .$hostname . " successful!" . PHP_EOL;	
}

$db_selected = mysql_select_db($database, $link);
if(!db_selected) {
	die('Can\'t select database: ' . mysql_error());
} else {
	echo 'Database ' .$database . 'succesfully selected!';
}

mysql_close($link);

?>
