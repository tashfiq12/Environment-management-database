<html>
<head>
<title>DEPARTMENT UPDATE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">DEPARTMENT UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "SELECT * FROM DEPARTMENT";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="120"> <div align="center">DEPT_CODE</div></th>
	<th width="120"> <div align="center">DEPT_NAME</div></th>
    <th width="120"> <div align="center">DIRECTOR</div></th>
	<th width="120"> <div align="center">LOCATION</div></th>
	<th width="120"> <div align="center">DATE OF ESTABLISHMENT</div></th>
	<th width="120"> <div align="center">HOTLINE</div></th>


    <th width="30"> <div align="center">Edit </div></th>
  </tr>
,
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["DEPT_CODE"];?></div></td>
    <td><div align="center"><?php echo $objResult["DEPT_NAME"];?></td>
    <td><div align="center"><?php echo $objResult["DIRECTOR"];?></td>
    <td><div align="center"><?php echo $objResult["LOCATION"];?></td>
	<td><div align="center"><?php echo $objResult["DATE_OF_ESTABLISHMENT"];?></div></td>
    <td><div align="center"><?php echo $objResult["HOTLINE"];?></td>
	<td align="center"><a href="DEPARTMENT_UPDT_REC.php?DEPT_CODE=<?php echo $objResult["DEPT_CODE"];?>">Edit</a></td>
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