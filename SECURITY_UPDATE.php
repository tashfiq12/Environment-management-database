
<html>
<head>
<title>SECURITY UPDATE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">SECURITY UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "SELECT * FROM SECURITY";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="120"> <div align="center">EMPLOYEE ID</div></th>
	<th width="120"> <div align="center">RANK</div></th>
 	<th width="120"> <div align="center">AUTHORIZED WEAPON NO</div></th>
	<th width="120"> <div align="center">THREAT ENCOUNTERED NO</div></th>
    <th width="120"> <div align="center">HEIGHT</div></th>

    <th width="30"> <div align="center">Edit </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["EMP_ID"];?></div></td>
	<td><div align="center"><?php echo $objResult["RANK"];?></div></td>
	<td><div align="center"><?php echo $objResult["AUTHORIZED_WEAPON_NO"];?></td>
	<td><div align="center"><?php echo $objResult["THREAT_ENCOUNTERED_NO"];?></td>
    <td><div align="center"><?php echo $objResult["HEIGHT"];?></td>

	<td align="center"><a href="SECURITY_UPDT_REC.php?EMP_ID=<?php echo $objResult["EMP_ID"];?>">Edit</a></td>
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