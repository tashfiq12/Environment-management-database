<html>
<head>
<title>ACCOUNT UPDATE</title>
</head>
<body>

<div class="header">
       <h1>REGIONAL</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "UPDATE REGIONAL_INDUSTRIES SET ";
$strSQL .="INDUSTRY_REG_NO  = '".$_POST["INDUSTRY_REG_NO"]."' ";
$strSQL .=",POLLUTION_LEVEL = '".$_POST["POLLUTION_LEVEL"]."' ";

$strSQL .="WHERE INDUSTRY_REG_NO = '".$_GET["INDUSTRY_REG_NO"]."' ";
$objParse = oci_parse($objConnect, $strSQL);
$objExecute = oci_execute($objParse, OCI_DEFAULT);
if($objExecute)
{
	oci_commit($objConnect); //*** Commit Transaction ***//
	echo "Previous data has been saved to another Table.";
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
onclick="window.location.href='regionalhistory.php'" />
</form>

</body>
</html>