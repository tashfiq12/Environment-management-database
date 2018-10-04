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

<form action="empupdatesave.php?EMP_ID=<?php echo $_GET["EMP_ID"];?>" name="frmEdit" method="post">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

//$objConnect = oci_connect("myuser","mypassword","TCDB");
$strSQL = "SELECT EMP_ID,DEPT_CODE,DATE_OF_BIRTH,SALARY,JOINING_DATE,FIRST_NAME,LAST_NAME,E.ADDRESS.HOUSE_NO,E.ADDRESS.STREET_NO,E.ADDRESS.SECTOR_NO,E.ADDRESS.CITY,RELIGION,DESIGNATION,BLOOD_GROUP FROM EMPLOYEE E WHERE EMP_ID = '".$_GET["EMP_ID"]."' ";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
$objResult = oci_fetch_array($objParse);
if(!$objResult)
{
	echo "Not found EMPLOYEE ID=".$_GET["EMP_ID"];
}
else
{
	
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
	<th width="120"> <div align="center">BLOOD_GROUP </div></th>
 
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="EMP_ID" size="10" value="<?php echo $objResult["EMP_ID"];?>"></div></td>
    <td><div align="center"><input type="text" name="DEPT_CODE" size="10" value="<?php echo $objResult["DEPT_CODE"];?>"></td>
	<td><div align="center"><input type="date" name="DATE_OF_BIRTH" size="10" value="<?php echo $objResult["DATE_OF_BIRTH"];?>"></div></td>
    <td><div align="center"><input type="text" name="SALARY" size="8" value="<?php echo $objResult["SALARY"];?>"></td>
	<td><div align="center"><input type="date" name="JOINING_DATE" size="10" value="<?php echo $objResult["JOINING_DATE"];?>"></div></td>
    <td><div align="center"><input type="text" name="FIRST_NAME" size="8" value="<?php echo $objResult["FIRST_NAME"];?>"></td>
	<td><div align="center"><input type="text" name="LAST_NAME" size="8" value="<?php echo $objResult["LAST_NAME"];?>"></div></td>
	<td><div align="center"><input type="number" name="HOUSE_NO" size="10" value="<?php echo $objResult["ADDRESS.HOUSE_NO"];?>"></div></td>
    <td><div align="center"><input type="number" name="STREET_NO" size="8" value="<?php echo $objResult["ADDRESS.STREET_NO"];?>"></td>
	<td><div align="center"><input type="text" name="SECTOR_NO" size="8" value="<?php echo $objResult["ADDRESS.SECTOR_NO"];?>"></div></td>
    <td><div align="center"><input type="text" name="CITY" size="8" value="<?php echo $objResult["ADDRESS.CITY"];?>"></td>
    <td><div align="center"><input type="text" name="RELIGION" size="8" value="<?php echo $objResult["RELIGION"];?>"></td>
	<td><div align="center"><input type="text" name="DESIGNATION" size="10" value="<?php echo $objResult["DESIGNATION"];?>"></div></td>
    <td><div align="center"><input type="text" name="BLOOD_GROUP" size="10" value="<?php echo $objResult["BLOOD_GROUP"];?>"></td>
    
  </tr>
  </table>
  <br>
  <div style="text-align:center;">
  <input type="submit" value=" submit" align="center" style="font-size:10pt;color:white;
background-color:black;border:1px solid #336600;padding:10px;<font color='#333'>margin-bottom:30px</font>">
	</div>
  <!--<input type="submit" name="submit" value="submit">-->
  <?php
  }
  oci_close($objConnect);
  ?>
  </form>
</body>
</html>