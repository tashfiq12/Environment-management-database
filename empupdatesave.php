<html>
<head>
<title>EMPLOYEE UPDATE</title>
</head>
<body>

<div class="header">
       <h1>EMPLOYEE UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "UPDATE EMPLOYEE SET ";
$strSQL .="EMP_ID = '".$_POST["EMP_ID"]."' ";
$strSQL .=",DEPT_CODE = '".$_POST["DEPT_CODE"]."' ";
$strSQL .=",DATE_OF_BIRTH = to_date('".($_POST["DATE_OF_BIRTH"])."','yyyy-mm-dd') ";
$strSQL .=",SALARY = '".$_POST["SALARY"]."' ";
$strSQL .=",JOINING_DATE = to_date('".($_POST["JOINING_DATE"])."','yyyy-mm-dd') ";
$strSQL .=",FIRST_NAME = '".$_POST["FIRST_NAME"]."' ";
$strSQL .=",LAST_NAME = '".$_POST["LAST_NAME"]."' ";
$strSQL .=",ADDRESS   =ADDR('".$_POST["HOUSE_NO"]."','".$_POST["STREET_NO"]."','".$_POST["SECTOR_NO"]."','".$_POST["CITY"]."') ";
/*$strSQL .=",HOUSE_NO = '".$_POST["HOUSE_NO"]."' ";
$strSQL .=",STREET_NO = '".$_POST["STREET_NO"]."' ";
$strSQL .=",SECTOR_NO = '".$_POST["SECTOR_NO"]."' ";
$strSQL .=",CITY =       '".$_POST["CITY"]."' ";*/
$strSQL .=",RELIGION = '".$_POST["RELIGION"]."' ";
$strSQL .=",DESIGNATION = '".$_POST["DESIGNATION"]."' ";
$strSQL .=",BLOOD_GROUP = '".$_POST["BLOOD_GROUP"]."' ";

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