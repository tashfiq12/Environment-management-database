<html>
<head>
<title>EMPLOYEE UPDATE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>

<div class="header">
       <h1 align="center">EMPLOYEE UPDATE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

$strSQL = "SELECT EMP_ID,DEPT_CODE,DATE_OF_BIRTH,SALARY,JOINING_DATE,FIRST_NAME,LAST_NAME,E.ADDRESS.HOUSE_NO,E.ADDRESS.STREET_NO,E.ADDRESS.SECTOR_NO,E.ADDRESS.CITY,RELIGION,DESIGNATION,BLOOD_GROUP FROM EMPLOYEE E";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="120"> <div align="center">EMPLOYEE ID </div></th>
    <th width="120"> <div align="center">DEPT CODE </div></th>
	<th width="120"> <div align="center">DATE OF BIRTH </div></th>
    <th width="120"> <div align="center">SALARY</div></th>
	<th width="120"> <div align="center">JOINING DATE</div></th>
    <th width="120"> <div align="center">FIRST NAME </div></th>
	<th width="120"> <div align="center">LAST NAME </div></th>
	<th width="120"> <div align="center">HOUSE NO</div></th>
	<th width="120"> <div align="center">STREET NO</div></th>
    <th width="120"> <div align="center">SECTOR NO </div></th>
	<th width="120"> <div align="center">CITY </div></th>
    <th width="120"> <div align="center">RELIGION </div></th>
	<th width="120"> <div align="center">DESIGNATION </div></th>
	<th width="120"> <div align="center">BLOOD GROUP </div></th>
    <th width="30"> <div align="center">Edit </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["EMP_ID"];?></div></td>
    <td><div align="center"><?php echo $objResult["DEPT_CODE"];?></td>
	<td><div align="center"><?php echo $objResult["DATE_OF_BIRTH"];?></div></td>
    <td><div align="center"><?php echo $objResult["SALARY"];?></td>
	<td><div align="center"><?php echo $objResult["JOINING_DATE"];?></div></td>
    <td><div align="center"><?php echo $objResult["FIRST_NAME"];?></td>
	<td><div align="center"><?php echo $objResult["LAST_NAME"];?></div></td>
	<td><div align="center"><?php echo $objResult["ADDRESS.HOUSE_NO"];?></td>
	<td><div align="center"><?php echo $objResult["ADDRESS.STREET_NO"];?></div></td>
    <td><div align="center"><?php echo $objResult["ADDRESS.SECTOR_NO"];?></td>
	<td><div align="center"><?php echo $objResult["ADDRESS.CITY"];?></div></td>
    <td><div align="center"><?php echo $objResult["RELIGION"];?></td>
	<td><div align="center"><?php echo $objResult["DESIGNATION"];?></div></td>
    <td><div align="center"><?php echo $objResult["BLOOD_GROUP"];?></td>
    <td align="center"><a href="empupdaterec.php?EMP_ID=<?php echo $objResult["EMP_ID"];?>">Edit</a></td>
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