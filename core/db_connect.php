<?php

$dbhost = "localhost";
$dbuser = "pmauser";
$dbpass = "admin";
$dbname = "";

$dblink =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()) :
	die("Connection Failed : " . mysqli_connect_error());
endif;

?>
