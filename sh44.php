<html>
<head>
<title>QUERY</title>
</head>
<body>
<?php
require_once("admin4.php");
?>
<div class="header">
 <h1 align="center"> subquery on fossil fuel</h1>	
 </div>
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
   $db=oci_connect("anik4010", "1234", $conn);
$strSQL = "SELECT FF_Region, pri_fuel,F_Fuel_type, pri_fuel_amount FROM Natural_resource JOIN Fossil_Fuel USING (Subsection_id) WHERE Pri_Fuel_Amount > ANY(SELECT AVG(Pri_Fuel_Amount) FROM Fossil_Fuel GROUP BY FF_REGION) order by F_Fuel_type ,pri_fuel_amount asc";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="400" border="1">
<tr>
<th width="91"> <div align="center">REGION</div></th>
<th width="121"> <div align="center">PRIMARY FUEL</div></th>
<th width="98"> <div align="center">FOSSIL FUEL TYPE</div></th>
<th width="98"> <div align="center">FOSSIL FUEL AMOUNT</div></th>
</tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
<tr>
<td><div align="center"><?php echo $objResult[0];?></div></td>
<td><?php echo $objResult[1];?></td>
<td><?php echo $objResult[2];?></td>
<td><?php echo $objResult[3];?></td>
</tr>
<?php
}
?>
</table>
<?php
?>
</body>
</html>
