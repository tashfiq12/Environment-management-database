<html>
<head>
<title>YEARLY BASIS UPDATE</title>
</head>
<body>

<div class="header">
       <h1>YEARLY BASIS UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "UPDATE YEARLY_BASIS SET ";
$strSQL .="EVALUATION_NO= '".$_POST["EVALUATION_NO"]."' ";
$strSQL .=",REGION = '".$_POST["REGION"]."' ";
$strSQL .=",YEAR = '".$_POST["YEAR"]."' ";
$strSQL .=",RAINFALL = '".$_POST["RAINFALL"]."' ";
$strSQL .=",TEMPARATURE = '".$_POST["TEMPARATURE"]."' ";
$strSQL .=",HUMIDITY= '".$_POST["HUMIDITY"]."' ";
$strSQL .=",AIR_PRESSURE = '".$_POST["AIR_PRESSURE"]."' ";

$strSQL .="WHERE EVALUATION_NO = '".$_GET["EVALUATION_NO"]."' ";
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