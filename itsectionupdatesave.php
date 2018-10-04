<html>
<head>
<title>IT SECTION UPDATE</title>
</head>
<body>

<div class="header">
       <h1>IT SECTION UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "UPDATE IT_SEC  SET ";
$strSQL .="TASK_EXT  = '".$_POST["TASK_EXT"]."' ";
$strSQL .=",DEPT_CODE = '".$_POST["DEPT_CODE"]."' ";
$strSQL .=",TASK_DATE = to_date('".($_POST["TASK_DATE"])."','yyyy-mm-dd') ";
$strSQL .=",GUEST_MEMBER = '".$_POST["GUEST_MEMBER"]."' ";

$strSQL .="WHERE TASK_EXT = '".$_GET["TASK_EXT"]."' ";
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