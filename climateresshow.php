<html>
<head>
<title>Climate Table</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>

<div class="header">
       <h1 align="center">Climate Table</h1>
  	
  </div>
</body>
</html>
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
   $db=oci_connect("anik4010", "1234", $conn);
$strSQL = "SELECT REGION , TEMPARATURE , RAINFALL, HUMIDITY FROM yearly_basis 
WHERE TEMPARATURE > (SELECT AVG(TEMPARATURE) FROM yearly_basis)
OR rainfall >  (SELECT AVG(TEMPARATURE) FROM yearly_basis )
AND HUMIDITY < (SELECT AVG(HUMIDITY) FROM yearly_basis)
ORDER BY rainfall";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="400" border="1">
<tr>
<th width="91"> <div align="center">Region</div></th>
<th width="121"> <div align="center">Temparature</div></th>
<th width="98"> <div align="center">Rainfall</div></th>
<th width="97"> <div align="center">Humidity</div></th>
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
