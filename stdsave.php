<html>
<head>
<title>PHONE INSERT</title>
</head>
<body>
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "INSERT INTO STUDENT ";
//$strSQL .="(EMP_ID,MOBILE_NO) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["ID"]."','".$_POST["NAME"]."',ADDR('".($_POST["HOUSENO"])."','".($_POST["STREETNO"])."','".($_POST["CITY"])."')) ";
$objParse = oci_parse($objConnect, $strSQL);
$objExecute = oci_execute($objParse,OCI_DEFAULT);
if($objExecute)
{
	oci_commit($objConnect); //*** Commit Transaction ***//
	echo "Save Done.";
}
else
{
	oci_rollback($objConnect); //*** RollBack Transaction ***//
	echo "Error Save [".$strSQL."";
}

oci_close($objConnect);
?>

