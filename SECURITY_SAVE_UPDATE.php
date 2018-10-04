<html>
<head>
<title>SECURITY UPDATE SAVE</title>
</head>
<body>

<div class="header">
       <h1>SECURITY UPDATE SAVE</h1>
  	
  </div>

<?php


$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "UPDATE SECURITY  SET ";
$strSQL .="EMP_ID  = '".$_POST["EMP_ID"]."' ";
$strSQL .=",RANK = '".$_POST["RANK"]."' ";
$strSQL .=",AUTHORIZED_WEAPON_NO = '".$_POST["AUTHORIZED_WEAPON_NO"]."' ";
$strSQL .=",THREAT_ENCOUNTERED_NO = '".$_POST["THREAT_ENCOUNTERED_NO"]."' ";
$strSQL .=",HEIGHT = '".$_POST["HEIGHT"]."' ";


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