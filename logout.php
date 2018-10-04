<?php
	//Start session
	session_start();	
		session_destroy();	

	//Unset the variables stored in session
	unset($_SESSION["HELLO_ID"]);
	unset($_SESSION["Status"]);
	
	header('location:login.php');
	
	
?>