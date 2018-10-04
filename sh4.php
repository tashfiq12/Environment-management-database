<html>
<!--//SIMPLE QUERY ON ANIMAL AMD FOREST-->
<head>
<title>QUERIES</title>
</head>
<body>
<?php
require_once("admin4.php");
?>
<div class="header">
 <h1 align="center">Animal Info</h1>	
 </div>
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
   $db=oci_connect("anik4010", "1234", $conn);
$strSQL = "SELECT Sub_name,F_Region,Animal_name FROM Natural_resource join Forest on Natural_resource.Subsection_id= FOREST.Subsection_id join Animals on FOREST.Forest_ext_id=Animals.Forest_ext_id";
$objParse = oci_parse ($db, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="400" border="1">
<tr>
<th width="91"> <div align="center">RESOURCE NAME </div></th>
<th width="121"> <div align="center">REGION</div></th>
<th width="98"> <div align="center">ANIMAL NAME</div></th>
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
