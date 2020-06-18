<?php 
	
	$dbhost = "localhost";
	$dbname = "db_uasoop";
	$dbuser = "root";
	$dbpass = "";

	$koneksi = new PDO ("mysql:host=".$dbhost.";
							dbname=".$dbname. "",
							 $dbuser, $dbpass);
 ?>