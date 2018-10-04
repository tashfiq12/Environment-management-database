<!--//JUST A SIMPLE query-->
<head>
<title>QUERIES</title>
</head>
<body>
<?php
require_once("admin4.php");
?>
<div class="header">
 <h1 align="center">QUERY ON TEMPARATURE</h1>	
 </div>
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
   $db=oci_connect("anik4010", "1234", $conn);
$strSQL = "SELECT REGION , YEAR,Temparature FROM YEARLY_BASIS  ORDER BY YEAR ASC";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="400" border="1">
<tr>
<th width="91"> <div align="center">REGION</div></th>
<th width="121"> <div align="center">YEAR</div></th>
<th width="98"> <div align="center">TEMPARATURE(Degree)</div></th>
</tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
<tr>
<td><div align="center"><?php echo $objResult[0];?></div></td>
<td><div align="center"><?php echo $objResult[1];?></td>
<td><div align="center"><?php echo $objResult[2];?></td>
</tr>
<?php
}
?>
</table>
<?php
?>
</body>
</html>
