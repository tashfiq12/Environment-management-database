<html>
<!--//QUERY DEALING WITH TOURISM--> 
<head>
<title>QUERIES</title>
</head>
<body>
<?php
require_once("admin4.php");
?>
<div class="header">
 <h1 align="center">TOURIST ATTRACTION</h1>	
 </div>
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
   $db=oci_connect("anik4010", "1234", $conn);
$strSQL = "SELECT T_Region,Place,Item_name FROM Natural_resource join Tourism using(Subsection_id) join Attraction using(Tour_ext_id) ";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="400" border="1">
<tr>
<th width="121"> <div align="center">REGION</div></th>
<th width="98"> <div align="center">PLACE</div></th>
<th width="97"> <div align="center">NAME </div></th>
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
