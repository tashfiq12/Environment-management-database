

<html>
<head>
<title>INSPECTOR UPDATE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">INSPECTOR UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "SELECT * FROM INSPECTOR";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="120"> <div align="center">EMPLOYEE ID</div></th>
	<th width="120"> <div align="center">INSPECTION STARTDATE</div></th>
    <th width="120"> <div align="center">RESPONSIBLE AREA</div></th>
	<th width="120"> <div align="center">RESPONSIBILITY</div></th>
    <th width="30"> <div align="center">Edit </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["EMP_ID"];?></div></td>
	<td><div align="center"><?php echo $objResult["INSPECTION_STARTDATE"];?></div></td>
    <td><div align="center"><?php echo $objResult["RESPONSIBLE_AREA"];?></td>
	<td><div align="center"><?php echo $objResult["RESPONSIBILITY"];?></td>
	<td align="center"><a href="INSPECTOR_UPDT_REC.php?EMP_ID=<?php echo $objResult["EMP_ID"];?>">Edit</a></td>
  </tr>
<?php
}
?>
</table>
<?php
oci_close($objConnect);
?>
</body>
</html>