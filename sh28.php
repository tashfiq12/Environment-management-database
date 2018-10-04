
<html>
<head>
<title>QUERY</title>
</head>
<body>
<?php
require_once("admin4.php");
?>
<div class="header">
 <h1 align="center">QUERY ON BUDGET,EXPENDITURE AND DEPARTMENT</h1>	
 </div>

<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
 $db=oci_connect("anik4010", "1234", $conn);
$strSQL = "SELECT DEPT_NAME,(SALARY_BUDGET + LOSS_DAM_BUD + EXTRA_BUD),
(LOSS_DAMG_EXP+EXTRA_EXPEDITURE+SALARY_BUDGET) FROM ACCOUNT_SEC A JOIN DEPARTMENT D ON
A.RESPONSIBLE_DEPT_CODE = D.DEPT_CODE
WHERE (SALARY_BUDGET + LOSS_DAM_BUD + EXTRA_BUD) != (LOSS_DAMG_EXP+EXTRA_EXPEDITURE+SALARY_BUDGET)";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="400" border="1">
<tr>
<th width="91"> <div align="center">DEPARTMENT NAME </div></th>
<th width="121"> <div align="center">TOTAL BUDGET</div></th>
<th width="98"> <div align="center">TOTAL EXPENDITURE</div></th>
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
