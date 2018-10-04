<html>
<head>
<title>ACCOUNT UPDATE</title>
</head>
<body>

<div class="header">
       <h1>ACCOUNT UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "UPDATE ACCOUNT_SEC  SET ";
$strSQL .="ACC_CODE  = '".$_POST["ACC_CODE"]."' ";
$strSQL .=",RESPONSIBLE_DEPT_CODE = '".$_POST["RESPONSIBLE_DEPT_CODE"]."' ";
$strSQL .=",YEAR = '".$_POST["YEAR"]."' ";
$strSQL .=",SALARY_BUDGET = '".$_POST["SALARY_BUDGET"]."' ";
$strSQL .=",LOSS_DAM_BUD  = '".$_POST["LOSS_DAM_BUD"]."' ";
$strSQL .=",EXTRA_BUD = '".$_POST["EXTRA_BUD"]."' ";
$strSQL .=",LOSS_DAMG_EXP = '".$_POST["LOSS_DAMG_EXP"]."' ";
$strSQL .=",EXTRA_EXPEDITURE = '".$_POST["EXTRA_EXPEDITURE"]."' ";

$strSQL .="WHERE ACC_CODE = '".$_GET["ACC_CODE"]."' ";
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
</body>
</html>