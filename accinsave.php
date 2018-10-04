<html>
<head>
<title>ACCOUNT SECTION INSERT</title>
</head>
<body>
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "INSERT INTO ACCOUNT_SEC ";
$strSQL .="(ACC_CODE,RESPONSIBLE_DEPT_CODE,SALARY_BUDGET,LOSS_DAM_BUD,EXTRA_BUD,LOSS_DAMG_EXP,EXTRA_EXPEDITURE,YEAR) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["ACC_CODE"]."','".$_POST["RESPONSIBLE_DEPT_CODE"]."','".$_POST["SALARY_BUDGET"]."','".$_POST["LOSS_DAM_BUD"]."','".$_POST["EXTRA_BUD"]."','".$_POST["LOSS_DAMG_EXP"]."','".$_POST["EXTRA_EXPEDITURE"]."','".$_POST["YEAR"]."') ";
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
<input type="button" value="show" 
onclick="window.location.href='phonemuldel.php'" />
</form>
<form>
<input type="button" value="submit again" 
onclick="window.location.href='phoneinsert.php'" />
</form>

</body>
</html>

