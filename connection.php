<?php

$connection = new mysqli("localhost","root","","f_yr_project");


	if ($connection->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
		echo "Everythings ok !";
	}
	
?>