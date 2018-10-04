<html>
<head>
<title>RESULT DELETE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">EMPLOYEE RESULT RECORD DELETE</h1>
  	
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
<form name="frmMain" action="resultdelrec.php" method="post" OnSubmit="return onDelete();">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);


$strSQL = "SELECT * FROM RESULT ";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="91"> <div align="center">EMPLOYEE ID </div></th>
	<th width="93"> <div align="center">SSC PASS YEAR</div></th>
    <th width="91"> <div align="center">SSC GPA </div></th>
	<th width="89"> <div align="center">HSC PASS YEAR</div></th>
    <th width="97"> <div align="center">HSC GPA</div></th>
	<th width="92"> <div align="center">HON PASS YEAR</div></th>
	<th width="87"> <div align="center">HON GPA</div></th>
	
	<th width="30"> <div align="center">Delete </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <th><div align="center"><?php echo $objResult["EMP_ID"];?></div></th>
    <th><div align="center"><?php echo $objResult["SSC_PASS_YEAR"];?></th>
	<th><div align="center"><?php echo $objResult["SSC_GPA"];?></div></th>
    <th><div align="center"><?php echo $objResult["HSC_PASS_YEAR"];?></th>
	<th><div align="center"><?php echo $objResult["HSC_GPA"];?></th>
	<th><div align="center"><?php echo $objResult["HON_PASS_YEAR"];?></div></th>
    <th><div align="center"><?php echo $objResult["HON_GPA"];?></th>
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