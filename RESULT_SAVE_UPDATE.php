<html>
<head>
<title>RESULT UPDATE SAVE</title>
</head>
<body>

<div class="header">
       <h1>RESULT UPDATE SAVE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "UPDATE RESULT  SET ";
$strSQL .="EMP_ID  = '".$_POST["EMP_ID"]."' ";

$strSQL .=",SSC_PASS_YEAR = '".$_POST["SSC_PASS_YEAR"]."' ";
$strSQL .=",SSC_GPA = '".$_POST["SSC_GPA"]."' ";
$strSQL .=",HSC_PASS_YEAR = '".$_POST["HSC_PASS_YEAR"]."' ";
$strSQL .=",HSC_GPA = '".$_POST["HSC_GPA"]."' ";
$strSQL .=",HON_PASS_YEAR = '".$_POST["HON_PASS_YEAR"]."' ";
$strSQL .=",HON_GPA = '".$_POST["HON_GPA"]."' ";
$strSQL .="WHERE EMP_ID = '".$_GET["EMP_ID"]."' ";
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