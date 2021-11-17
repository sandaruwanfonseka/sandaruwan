<?php

$connection = new mysqli("localhost","root","","f_yr_project");


	if ($connection->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
		echo "Everythings ok !";
	}
	

	$sql_query = "INSERT INTO student (f__name,l_name) VALUES ('John', 'Doe')";
	

	if ($connection->query($sql_query) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "<br>Error: ".$connection->error;
	}

$connection->close();

?>