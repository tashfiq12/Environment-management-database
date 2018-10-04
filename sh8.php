<html>
<!--//WHERE EXISTS CLAUSE ON SECURITY TABLE-->
<head>
<title>QUERIES</title>
</head>
<body>
<?php
require_once("admin4.php");
?>
<div class="header">
 <h1 align="center">SECURITY GUARD HAVING SALARY HIGHER THAN AVG</h1>	
 </div>
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
 $db=oci_connect("anik4010", "1234", $conn);
$strSQL = "SELECT EMP_ID ,CONCAT(CONCAT(FIRST_NAME,' '),LAST_NAME),SALARY  FROM EMPLOYEE E WHERE  EXISTS (SELECT * FROM SECURITY S WHERE
S.EMP_ID =E.EMP_ID) AND SALARY >20000";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="400" border="1">
<tr>
<th width="91"> <div align="center">ID </div></th>
<th width="121"> <div align="center">NAME</div></th>
<th width="98"> <div align="center">SALARY</div></th>
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
