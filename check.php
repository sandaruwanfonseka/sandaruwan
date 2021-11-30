<?php
session_start();
	$user_name=$_POST['uname'];
	$password=$_POST['psw'];
	
	$conn=new mysqli("localhost","root","","school");
	
	$sql_1="SELECT * FROM employee WHERE username='$user_name' AND password='$password'";
	
	$result=$conn->query($sql_1);

	if(mysqli_num_rows($result)>0){
		
		echo "Correct username and password<br>Your name is ";
		
		$sql_2="SELECT position FROM employee WHERE username='$user_name'"; 
		
		$result_2=$conn->query($sql_2);
		$array_2=$result_2->fetch_assoc();
		
		$_SESSION['posi']=$array_2['position'];
		
		echo $_SESSION['posi'];
		
		echo "<br><a href='menu.php'>Go to menu</a>";
		
	}else{
		echo "wrong username and password";
	}
	
	
	
	
	
	
	
	

?>