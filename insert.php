<?php

include 'connection.php';
	

	$sql_query = "INSERT INTO student (f__name,l_name) VALUES ('John', 'Doe')";
	

	if ($connection->query($sql_query) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "<br>Error: ".$connection->error;
	}

$connection->close();

?>