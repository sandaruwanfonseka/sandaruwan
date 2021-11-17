<?php

class connection{
	
	function names($n1,$n2){
		
		$connection = new mysqli("localhost","root","","f_yr_project");


		if ($connection->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql_query = "INSERT INTO student (f_name,l_name) VALUES ('$n1', '$n2')";
	

		if ($connection->query($sql_query) === TRUE) {
		echo "New record created successfully";}
	}
}	

	$obj=new connection();
	
	
	$obj->names($_POST['packet_1'],$_POST['packet_2']);


?>