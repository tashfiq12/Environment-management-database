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
 <h1 align="center">INDUSTRY SUSPENSION</h1>	
 </div>
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
   $db=oci_connect("anik4010", "1234", $conn);
$strSQL = "SELECT INDUSTRY_NAME,PAY_AMOUNT , SUSPENSION_DURATION , SERIAL, LAW_CLAUSE FROM REGIONAL_INDUSTRIES
RI JOIN MOBILE_COURT MC ON RI.INDUSTRY_REG_NO = 
MC.CHECKED_INDUSTRY JOIN 
PUNISHMENT P ON P.PUNISHMENT_CODE
=MC.PUNISHMENT_CODE 
WHERE MOB_COURT_DATE > TO_DATE('01/01/2016','DD/MM/YYYY') ";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="600" border="1">
<tr>
<th width="91"> <div align="center">INDUSTRY</div></th>
<th width="93"> <div align="center">PAID PUNISHMENT</div></th>
<th width="98"> <div align="center">SUSPENDED FOR</div></th>
<th width="101"> <div align="center">BY MOBILE COURT</div></th>
<th width="98"> <div align="center">UNDER LAW CLAUSE</div></th>
</tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
<tr>
<td><div align="center"><?php echo $objResult[0];?></div></td>
<td><div align="center"><?php echo $objResult[1];?></div></td>
<td><div align="center"><?php echo $objResult[2];?></div></td>
<td><div align="center"><?php echo $objResult[3];?></div></td>
<td><div align="center"><?php echo $objResult[4];?></div></td>
</tr>
<?php
}
?>
</table>
<?php
?>
</body>
</html>
