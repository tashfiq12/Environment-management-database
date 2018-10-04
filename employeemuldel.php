<html>
<head>
<title>EMPLOYEE RECORD DELETE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">EMPLOYEE DELETE</h1>
  	
</div>
<script language="JavaScript">
	function onDelete()
	{
		if(confirm('Do you want to delete ?')==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
</script>
<form name="frmMain" action="employeemuldelrec.php" method="post" OnSubmit="return onDelete();">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);


$strSQL = "SELECT EMP_ID,DEPT_CODE,DATE_OF_BIRTH,SALARY,JOINING_DATE,FIRST_NAME,LAST_NAME,E.ADDRESS.HOUSE_NO,E.ADDRESS.STREET_NO,E.ADDRESS.SECTOR_NO,E.ADDRESS.CITY,RELIGION,DESIGNATION,BLOOD_GROUP FROM EMPLOYEE E";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="1200" border="1">
  <tr>
    <th width="140"> <div align="center">EMPLOYEE ID </div></th>
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
    <th width="30"> <div align="center">Delete </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <th><div align="center"><?php echo $objResult["EMP_ID"];?></div></th>
    <th><div align="center"><?php echo $objResult["DEPT_CODE"];?></th>
	<th><div align="center"><?php echo $objResult["DATE_OF_BIRTH"];?></div></th>
    <th><div align="center"><?php echo $objResult["SALARY"];?></th>
	<th><div align="center"><?php echo $objResult["JOINING_DATE"];?></div></th>
    <th><div align="center"><?php echo $objResult["FIRST_NAME"];?></th>
	<th><div align="center"><?php echo $objResult["LAST_NAME"];?></div></th>
	<th><div align="center"><?php echo $objResult["ADDRESS.HOUSE_NO"];?></th>
	<th><div align="center"><?php echo $objResult["ADDRESS.STREET_NO"];?></div></th>
    <th><div align="center"><?php echo $objResult["ADDRESS.SECTOR_NO"];?></th>
	<th><div align="center"><?php echo $objResult["ADDRESS.CITY"];?></div></th>
    <th><div align="center"><?php echo $objResult["RELIGION"];?></th>
	<th><div align="center"><?php echo $objResult["DESIGNATION"];?></div></th>
    <th><div align="center"><?php echo $objResult["BLOOD_GROUP"];?></th>
    <th align="center"><input type="checkbox" name="chkDel[]" value="<?php echo $objResult["EMP_ID"];?>"></th>
  </tr>
<?php
}
?>
</table>
<?php
oci_close($objConnect);
?>
<br>
  <div style="text-align:center;">
  <input type="submit" name="btnDelete"value="Delete" align="center" style="font-size:10pt;color:white;
background-color:black;border:1px solid #336600;padding:10px;<font color='#333'>margin-bottom:30px</font>">
	</div>
<!--<input type="submit" name="btnDelete" value="Delete">-->
</form>
</body>
</html>