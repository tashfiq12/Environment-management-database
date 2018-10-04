<html>
<head>
<title>DEPARTMENT UPDATE SAVE</title>
</head>
<body>

<div class="header">
       <h1>DEPARTMENT UPDATE SAVE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "UPDATE DEPARTMENT  SET ";
$strSQL .="DEPT_CODE  = '".$_POST["DEPT_CODE"]."' ";
$strSQL .=",DEPT_NAME = '".$_POST["DEPT_NAME"]."' ";
$strSQL .=",DIRECTOR = '".$_POST["DIRECTOR"]."' ";
$strSQL .=",LOCATION = '".$_POST["LOCATION"]."' ";
$strSQL .=",DATE_OF_ESTABLISHMENT = to_date('".($_POST["DATE_OF_ESTABLISHMENT"])."','yyyy-mm-dd') ";
$strSQL .=",HOTLINE = '".$_POST["HOTLINE"]."' ";

$strSQL .="WHERE DEPT_CODE = '".$_GET["DEPT_CODE"]."' ";
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