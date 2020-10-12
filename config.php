<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db= "test";
	$con = new mysqli($servername,$username,$password,$db)or die(mysqli_error($con));
	//echo "connection successfully ";
	
?>
