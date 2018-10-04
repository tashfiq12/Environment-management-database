<!--//QUERY IS FINE BUT DATA NOT FOUNG MANIPULATION REQUIRED,DEVELOPMENRT,RESEARCH,DEPARTMENT RELATED SHUNDOR QUERY BY MAHMUD VAI-->
<html>
<head>
<title>QUERIES</title>
</head>
<body>
<?php
require_once("admin4.php");
?>
<div class="header">
 <h1 align="center">REGION WISE PROJECT DURATION</h1>	
 </div>
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
   $db=oci_connect("anik4010", "1234", $conn);
$strSQL = "SELECT R_PROJECT_NAME  , 
	CONCAT(FIRST_NAME,CONCAT(' ',LAST_NAME)) ,TRUNC((TO_DATE(RP.ENDING_DATE,'DD/MON/YYYY')-TO_DATE(RP.START_DATE,'DD/MON/YYYY'))/12,0) , RP.REGION FROM 
	EMPLOYEE E JOIN RESEARCH R ON E.EMP_ID = R.INCHARGE_ID 
	JOIN RES_PROJECT RP ON R.ITEM_NO = RP.ITEM_NO";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="400" border="1">
<tr>
<th width="91"> <div align="center">PROJECT NAME </div></th>
<th width="121"> <div align="center">PERSON NAME</div></th>
<th width="98"> <div align="center">DURATION(months)</div></th>
<th width="97"> <div align="center">REGION </div></th>
</tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
<tr>
<td><div align="center"><?php echo $objResult[0];?></div></td>
<td><div align="center"><?php echo $objResult[1];?></td>
<td><div align="center"><?php echo $objResult[2];?></td>
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
