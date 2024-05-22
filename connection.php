<?php
	$DBConnect = mysqli_connect("localhost","root","","nfms");
	$con = $DBConnect;
	
	if (!$con) {
    	die("Connection failed: " . mysqli_connect_error());
	}
?>