<?php
	//Start session
	session_start();
	$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
    $objConnect = oci_connect("anik4010","1234",$conn);
	//Check whether the session variable SESS_MEMBER_ID is present or not
	/*if ((trim($_SESSION["Status"]) != "admin")) {
		header("location: login.php");
		exit();
	}*/
	if ((trim($_SESSION["STATUS"]) == "")) {
		header("location: login.php");
		exit();
	}
	if(!isset($_SESSION["STATUS"]) || (trim($_SESSION["STATUS"]) == "")) {
		header("location: login.php");
		exit();
	}
	if ((trim($_SESSION["STATUS"]) == "user")) {
		header("location: login.php");
		exit();
	}
	
?>