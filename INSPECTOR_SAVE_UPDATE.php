<html>
<head>
<title>INSPECTOR UPDATE SAVE</title>
</head>
<body>

<div class="header">
       <h1>INSPECTOR UPDATE SAVE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "UPDATE INSPECTOR  SET ";
$strSQL .="EMP_ID  = '".$_POST["EMP_ID"]."' ";
$strSQL .=",INSPECTION_STARTDATE = to_date('".($_POST["INSPECTION_STARTDATE"])."','YYYY-MM-DD') ";

$strSQL .=",RESPONSIBLE_AREA = '".$_POST["RESPONSIBLE_AREA"]."' ";
$strSQL .=",RESPONSIBILITY = '".$_POST["RESPONSIBILITY"]."' ";

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