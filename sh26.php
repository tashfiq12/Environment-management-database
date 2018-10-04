<!--//JESOB INSPECOTR RA INDUSTRY INSPECT KORTESE TADER NIYE -->
<html>
<head>
<title>QUERIES</title>
</head>
<body>
<?php
require_once("admin4.php");
?>
<div class="header">
 <h1 align="center">QUERY ON INSPECTOR INSPECTS INDUSTRY</h1>	
 </div>
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
   $db=oci_connect("ANIK4010", "1234", $conn);
$strSQL = "SELECT CONCAT(CONCAT(FIRST_NAME,' '),LAST_NAME) , INDUSTRY_NAME,
	TO_CHAR(DATE_OF_LAST_INSPECT, 'DD/MON/YYYY') 
	FROM INSPECTOR JOIN EMPLOYEE USING (EMP_ID) 
	JOIN INSPECTION USING (EMP_ID) 
	JOIN REGIONAL_INDUSTRIES USING (INDUSTRY_REG_NO)";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="400" border="1">
<tr>
<th width="91"> <div align="center">INSPECTORS </div></th>
<th width="121"> <div align="center">INSPECTED INDUSTRY</div></th>
<th width="98"> <div align="center">INSPECTION DATE</div></th>
</tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
<tr>
<td><div align="center"><?php echo $objResult[0];?></div></td>
<td><?php echo $objResult[1];?></td>
<td><?php echo $objResult[2];?></td>
</tr>
<?php
}
?>
</table>
<?php
?>
</body>
</html>
