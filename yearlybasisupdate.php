<html>
<head>
<title>yearly basis UPDATE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">YEARLY BASIS UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "SELECT * FROM YEARLY_BASIS";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
	<th width="100"> <div align="center">EVALUATION NO </div></th>
    <th width="90"> <div align="center">REGION </div></th>
	<th width="80"> <div align="center">YEAR </div></th>
    <th width="100"> <div align="center">RAINFALL</div></th>
	<th width="100"> <div align="center">TEMPARATURE</div></th>
    <th width="100"> <div align="center">HUMIDITY </div></th>
	<th width="100"> <div align="center">AIR PRESSURE</div></th>
    <th width="30"> <div align="center">Edit </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
	<td><div align="center"><?php echo $objResult["EVALUATION_NO"];?></div></td>
    <td><div align="center"><?php echo $objResult["REGION"];?></td>
	<td><div align="center"><?php echo $objResult["YEAR"];?></div></td>
    <td><div align="center"><?php echo $objResult["RAINFALL"];?></td>
	<td><div align="center"><?php echo $objResult["TEMPARATURE"];?></div></td>
    <td><div align="center"><?php echo $objResult["HUMIDITY"];?></td>
	<td><div align="center"><?php echo $objResult["AIR_PRESSURE"];?></div></td>
    <td align="center"><a href="yearlybasisupdaterec.php?EVALUATION_NO=<?php echo $objResult["EVALUATION_NO"];?>">Edit</a></td>
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