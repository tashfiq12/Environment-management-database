<html>
<head>
<title>REG TRIGGER</title>
</head>
<body>
<?php
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">POLLUTION LEVEL UPDATE TRIGGER</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "SELECT INDUSTRY_REG_NO,POLLUTION_LEVEL FROM REGIONAL_INDUSTRIES";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="120"> <div align="center">INDUSTRY_REG_NO </div></th>
	<th width="120"> <div align="center">POLLUTION_LEVEL </div></th>
    <th width="30"> <div align="center">Edit </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["INDUSTRY_REG_NO"];?></div></td>
    <td><div align="center"><?php echo $objResult["POLLUTION_LEVEL"];?></td>

    <td align="center"><a href="regtriggerrec.php?INDUSTRY_REG_NO=<?php echo $objResult["INDUSTRY_REG_NO"];?>">Edit</a></td>
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