<html>
<head>
<title>REGIONAL INDUSTRY RECORD DELETE</title>
</head>
<body>
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);
//$objConnect = oci_connect("myuser","mypassword","TCDB");

	for($i=0;$i<count($_POST["chkDel"]);$i++)
	{
		if($_POST["chkDel"][$i] != "")
		{
			$strSQL = "DELETE FROM REGIONAL_INDUSTRIES ";
			$strSQL .="WHERE INDUSTRY_REG_NO = '".$_POST["chkDel"][$i]."' ";
			$objParse = oci_parse($objConnect, $strSQL);
			$objExecute = oci_execute($objParse, OCI_DEFAULT);
		}
	}

	oci_commit($objConnect); //*** Commit Transaction ***//
	echo "Record Deleted.";

oci_close($objConnect);
?>
</body>
</html>