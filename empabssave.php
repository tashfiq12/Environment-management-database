<html>
<head>
<title>EMPLOYEE INSERT</title>
</head>
<body>
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "INSERT INTO EMPLOYEE ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["EMP_ID"]."','".$_POST["DEPT_CODE"]."',to_date('".($_POST["DATE_OF_BIRTH"])."','yyyy-mm-dd'),'".$_POST["SALARY"]."',to_date('".($_POST["JOINING_DATE"])."','yyyy-mm-dd'),'".$_POST["FIRST_NAME"]."','".$_POST["LAST_NAME"]."',ADDR('".($_POST["HOUSE_NO"])."','".($_POST["STREET_NO"])."','".($_POST["SECTOR_NO"])."','".($_POST["CITY"])."'),'".$_POST["RELIGION"]."','".$_POST["DESIGNATION"]."','".$_POST["BLOOD_GROUP"]."') ";
//$strSQL .="('".$_POST["FIRST_NAME"]."','".$_POST["LAST_NAME"]."',ADDR('".($_POST["HOUSE_NO"])."','".($_POST["STREET_NO"])."','".($_POST["SECTOR_NO"])."','".($_POST["CITY"])."'),'".$_POST["RELIGION"]."','".$_POST["DESIGNATION"]."','".$_POST["BLOOD_GROUP"]."') ";
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

<form>
<input type="button" value="show" 
onclick="window.location.href='employeechild.php'" />
</form>
<form>
<input type="button" value="submit again" 
onclick="window.location.href='empabsinsert.php'" />
</form>

</body>
</html>

