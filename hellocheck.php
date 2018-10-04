<?php
	session_start();
	$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
    $objConnect = oci_connect("anik4010","1234",$conn);
	
	
	//mysql_connect("localhost","root","root");
	//mysql_select_db("mydatabase");
	$strSQL = "SELECT * FROM HELLO WHERE HELLO_NAME = '".$_POST["txtUsername"]."' ";
	$strSQL .="AND PASS = '".$_POST["txtPassword"]."' ";
	/*$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";*/
	
	$objParse = oci_parse ($objConnect, $strSQL);
	oci_execute ($objParse,OCI_DEFAULT);
	$objResult = oci_fetch_array($objParse);
	if(!$objResult)
	{
		//echo "Not found HELLO_NAME=".$_GET["HELLO_NAME"];
		echo "Username and Password Incorrect!";
	}
	
	/*$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}*/
	else
	{
			$_SESSION["HELLO_ID"] = $objResult["HELLO_ID"];
			$_SESSION["Status"] = $objResult["Status"];

			//session_write_close();
			
			if($objResult["STATUS"] == "user")
			{
				header("location:addresspagesearch.php");
			}
			else
			{
				header("location:index.php");
			}
	}
	//mysql_close();
?>