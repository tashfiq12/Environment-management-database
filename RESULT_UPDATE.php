
<html>
<head>
<title>RESULT UPDATE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">RESULT UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "SELECT * FROM RESULT";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>

<table align="center" width="600" border="1">
  <tr>
    <th width="120"> <div align="center">EMPLOYEE ID</div></th>
	<th width="120"> <div align="center">SSC PASSING YEAR</div></th>
    <th width="120"> <div align="center">SSC GPA</div></th>
	<th width="120"> <div align="center">HSC PASSING YEAR</div></th>
	<th width="120"> <div align="center">HSC GPA</div></th>
	<th width="120"> <div align="center">HONOURS PASSING YEAR</div></th>
	<th width="120"> <div align="center">HONOURS GPA</div></th>

    <th width="30"> <div align="center">Edit </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["EMP_ID"];?></div></td>
	<td><div align="center"><?php echo $objResult["SSC_PASS_YEAR"];?></div></td>
	<td><div align="center"><?php echo $objResult["SSC_GPA"];?></div></td>
	<td><div align="center"><?php echo $objResult["HSC_PASS_YEAR"];?></div></td>
	<td><div align="center"><?php echo $objResult["HSC_GPA"];?></div></td>

    <td><div align="center"><?php echo $objResult["HON_PASS_YEAR"];?></td>
	<td><div align="center"><?php echo $objResult["HON_GPA"];?></td>
	<td align="center"><a href="RESULT_UPDATE_REC.php?EMP_ID=<?php echo $objResult["EMP_ID"];?>">Edit</a></td>
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