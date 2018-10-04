<html>
<head>
<title>IT SECTION UPDATE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">IT SECTION UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "SELECT * FROM IT_SEC";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="120"> <div align="center">TASK_EXT </div></th>
    <th width="120"> <div align="center">DEPT_CODE </div></th>
	<th width="120"> <div align="center">TASK_DATE </div></th>
    <th width="120"> <div align="center">GUEST_MEMBER</div></th>
    <th width="30"> <div align="center">Edit </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["TASK_EXT"];?></div></td>
    <td><div align="center"><?php echo $objResult["DEPT_CODE"];?></td>
	<td><div align="center"><?php echo $objResult["TASK_DATE"];?></div></td>
    <td><div align="center"><?php echo $objResult["GUEST_MEMBER"];?></td>

    <td align="center"><a href="itsectionupdaterec.php?TASK_EXT=<?php echo $objResult["TASK_EXT"];?>">Edit</a></td>
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