<html>
<head>
<title>QUERY</title>
</head>
<body>
<?php
require_once("admin4.php");
?>
<div class="header">
 <h1 align="center">QUERY ON YEARLY BASIS</h1>	
 </div>

<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
   $db=oci_connect("anik4010", "1234", $conn);
$strSQL = "SELECT REGION ,Year ,ROUND(RAINFALL,1),Air_Pressure FROM YEARLY_BASIS ORDER BY REGION,YEAR";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="400" border="1">
<tr>
<th width="91"> <div align="center">PLACE</div></th>
<th width="121"> <div align="center">YEAR</div></th>
<th width="98"> <div align="center">RAINFALL</div></th>
<th width="97"> <div align="center">AIR PRESSURE </div></th>
</tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
<tr>
<td><div align="center"><?php echo $objResult[0];?></div></td>
<td><?php echo $objResult[1];?></td>
<td><?php echo $objResult[2];?></td>
<td><div align="center"><?php echo $objResult[3];?></div></td>
</tr>
<?php
}
?>
</table>
<?php
?>
</body>
</html>
