<html>
<head>
<title>PHONE INSERT</title>
</head>
<body>
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "INSERT INTO RESULT ";
$strSQL .="(EMP_ID,SSC_PASS_YEAR,SSC_GPA,HSC_PASS_YEAR,HSC_GPA,HON_PASS_YEAR,HON_GPA) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["EMP_ID"]."','".$_POST["SSC_PASS_YEAR"]."','".$_POST["SSC_GPA"]."','".$_POST["HSC_PASS_YEAR"]."','".$_POST["HSC_GPA"]."','".$_POST["HON_PASS_YEAR"]."','".$_POST["HON_GPA"]."') ";
$objParse = oci_parse($objConnect, $strSQL);
$objExecute = oci_execute($objParse, OCI_DEFAULT);
$strSQL = "INSERT INTO PHONE ";
$strSQL .="(EMP_ID,MOBILE_NO) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["EMP_ID"]."','".$_POST["MOBILE_NO"]."') ";
$objParse = oci_parse($objConnect, $strSQL);
$objExecute = oci_execute($objParse, OCI_DEFAULT);

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


<form>
<input type="button" value="submit again" 
onclick="window.location.href='phoneinsert.php'" />
</form>

</body>
</html>

