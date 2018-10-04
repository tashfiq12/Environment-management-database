<html>
<head>
<title>DRIVER TABLE UPDATE</title>
</head>
<body>

<div class="header">
       <h1>DRIVER TABLE UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "UPDATE DRIVER  SET ";
$strSQL .="EMP_ID  = '".$_POST["EMP_ID"]."' ";
$strSQL .=",DRIVER_LICENSE_NO = '".$_POST["DRIVER_LICENSE_NO"]."' ";
$strSQL .=",LICENSE_DATE_EXPIRATION = to_date('".($_POST["LICENSE_DATE_EXPIRATION"])."','yyyy-mm-dd') ";

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