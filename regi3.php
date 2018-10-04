<html>
<head>
<title>REGIONAL INDUSTRY UPDATE</title>
</head>
<body>

<div class="header">
       <h1>REGIONAL INDUSTRY UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "UPDATE REGIONAL_INDUSTRIES  SET ";
$strSQL .="INDUSTRY_REG_NO  = '".$_POST["INDUSTRY_REG_NO"]."' ";
$strSQL .=",DATE_OF_LAST_INSPECT = to_date('".($_POST["DATE_OF_LAST_INSPECT"])."','yyyy-mm-dd') ";
$strSQL .=",LAST_PUNISHMENT_DATE = to_date('".($_POST["LAST_PUNISHMENT_DATE"])."','yyyy-mm-dd') ";
$strSQL .=",INDUSTRY_NAME = '".$_POST["INDUSTRY_NAME"]."' ";
$strSQL .=",ADDRESS = '".$_POST["ADDRESS"]."' ";
$strSQL .=",POLLUTION_LEVEL = '".$_POST["POLLUTION_LEVEL"]."' ";

$strSQL .="WHERE INDUSTRY_REG_NO = '".$_GET["INDUSTRY_REG_NO"]."' ";
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