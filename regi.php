<html>
<head>
<title>REGIONAL INDUSTRIES UPDATE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">REGGIONAL INDUSTRIES UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "SELECT * FROM REGIONAL_INDUSTRIES";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="120"> <div align="center">INDUSTRY REG NO </div></th>
    <th width="120"> <div align="center">LAST INSPECT DATE </div></th>
	<th width="120"> <div align="center">LAST PUNISHMENT DATE </div></th>
    <th width="120"> <div align="center">INDUSTRY NAME</div></th>
     <th width="120"> <div align="center">ADDRESS</div></th>
     <th width="120"> <div align="center"> POLLUTION LEVEL</div></th>
    <th width="30"> <div align="center">Edit </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult[0];?></div></td>
    <td><div align="center"><?php echo $objResult[1];?></td>
	<td><div align="center"><?php echo $objResult[2];?></div></td>
    <td><div align="center"><?php echo $objResult[3];?></td>
     <td><div align="center"><?php echo $objResult[4];?></td>
      <td><div align="center"><?php echo $objResult[5];?></td>

    <td align="center"><a href="regi2.php?INDUSTRY_REG_NO=<?php echo $objResult["INDUSTRY_REG_NO"];?>">Edit</a></td>
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