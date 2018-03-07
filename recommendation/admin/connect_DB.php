<?php

	//กำหนดค่าการเชื่อมต่อ DB

	$host = "emuseum_db";
	$username = "root";
	$dbname = "travel";
	$password2 = "heavygeese24"; 
	
	date_default_timezone_set('Asia/Bangkok');	
	$link = mysqli_connect($host,$username,$password2,$dbname);
	

	mysqli_query($link, "SET NAMES utf8");
	mysqli_commit($link);

	

?>
