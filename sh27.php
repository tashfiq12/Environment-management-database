<!--//NEGATIVE ROKTO DHARI EMPLOYEE DER DATABASE MANOB KOLLANE SOBCHEYE GURUTTOPURNO BHUMIKA PALON KORE-->
<html>
<head>
<title>QUERIES</title>
</head>
<body>
<?php
require_once("admin4.php");
?>
<div class="header">
 <h1 align="center">QUERY ON EMPLOYEE WITH NEGATIVE BLOOD</h1>	
 </div>
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
   $db=oci_connect("ANIK4010", "1234", $conn);
$strSQL = "select concat(first_name,concat(' ',last_name)) , blood_group , 
mobile_no  from  employee join phone using (emp_id) 
where blood_group like '%-'";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="400" border="1">
<tr>
<th width="91"> <div align="center">EMPLOYEE NAME </div></th>
<th width="121"> <div align="center">BLOOD GROUP</div></th>
<th width="98"> <div align="center">MOBILE NO</div></th>
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
