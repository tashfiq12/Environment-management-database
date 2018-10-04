<html>
<head>
<title>QUERY</title>
</head>
<body>
<?php
require_once("admin4.php");
?>
<div class="header">
 <h1 align="center">QUERY ON SERVING YEAR</h1>	
 </div>
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
$db=oci_connect("anik4010", "1234", $conn);
$strSQL = "SELECT CONCAT(FIRST_NAME,CONCAT(' ',LAST_NAME)), CONCAT(ROUND(((SYSDATE - JOINING_DATE)/365),0),' YEARS')
 , DEPT_NAME  FROM EMPLOYEE JOIN DEPARTMENT USING (DEPT_CODE)
WHERE  ROUND(((SYSDATE - JOINING_DATE)/365)) >= 5";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="400" border="1">
<tr>
<th width="91"> <div align="center">NAME</div></th>
<th width="121"> <div align="center">SERVING FOR</div></th>
<th width="98"> <div align="center">DEPARTMENT</div></th>
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
