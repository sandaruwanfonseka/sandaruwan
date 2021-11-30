<?php 
session_start();


if($_SESSION['posi']=="Teacher"){
	echo "THIS IS A TEACHER LOGIN";
}else if($_SESSION['posi']=="Student"){
	echo "THIS IS A STUDENT LOGIN";
}else{
	echo "GUEST LOGIN";
}
?>


