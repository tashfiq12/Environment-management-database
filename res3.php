<html>
<head>
<title>VEHICLE TABLE UPDATE</title>
</head>
<body>

<div class="header">
       <h1>VEHICLE TABLE UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "UPDATE RESPONSIBLE_VEHICLES  SET ";
$strSQL .="EMP_ID  = '".$_POST["EMP_ID"]."' ";
$strSQL .=",ENGINE_NO = '".$_POST["ENGINE_NO"]."' ";
$strSQL .=",CHASIS_NO = '".$_POST["CHASIS_NO"]."' ";
$strSQL .=",ISSUE_DATE = to_date('".($_POST["ISSUE_DATE"])."','yyyy-mm-dd') ";
$strSQL .=",VEHICLE_NAME  = '".$_POST["VEHICLE_NAME"]."' ";

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