<html>
<head>
<title>ACCOUNT UPDATE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">ACCOUNT UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "SELECT * FROM ACCOUNT_SEC";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="120"> <div align="center">ACCOUNT SUB CODE </div></th>
    <th width="120"> <div align="center">RESPONSIBLE DEPT </div></th>
    <th width="120"> <div align="center">SALARY BUDGET</div></th>
	<th width="120"> <div align="center">LOSS & DAMAGE BUDGET </div></th>
    <th width="120"> <div align="center">EXTRA BUDGET </div></th>
	<th width="120"> <div align="center">LOSS & DAMAGE EXPENDITURE</div></th>
    <th width="120"> <div align="center">EXTRA EXPENDITURE</div></th>
	<th width="120"> <div align="center">YEAR </div></th>
    <th width="30"> <div align="center">Edit </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["ACC_CODE"];?></div></td>
    <td><div align="center"><?php echo $objResult["RESPONSIBLE_DEPT_CODE"];?></td>
	
    <td><div align="center"><?php echo $objResult["SALARY_BUDGET"];?></td>
	<td><div align="center"><?php echo $objResult["LOSS_DAM_BUD"];?></div></td>
    <td><div align="center"><?php echo $objResult["EXTRA_BUD"];?></td>
	<td><div align="center"><?php echo $objResult["LOSS_DAMG_EXP"];?></div></td>
    <td><div align="center"><?php echo $objResult["EXTRA_EXPEDITURE"];?></td>
	<td><div align="center"><?php echo $objResult["YEAR"];?></div></td>

    <td align="center"><a href="accupdaterec.php?ACC_CODE=<?php echo $objResult["ACC_CODE"];?>">Edit</a></td>
  </tr>
<?php
}
?>
</table>
<?php
oci_close($objConnect);
?>
</body>
</html>