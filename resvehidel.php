<html>
<head>
<title>RESPONSIBLE VEHICLES RECORD DELETE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">RESPONSIBLE VEHICLES RECORD DELETE</h1>
  	
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
<form name="frmMain" action="resvehidelrec.php" method="post" OnSubmit="return onDelete();">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);


$strSQL = "SELECT * FROM RESPONSIBLE_VEHICLES ";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="95"> <div align="center">EMP_ID </div></th>
    <th width="91"> <div align="center">ENGINE NO </div></th>
	<th width="91"> <div align="center">CHASIS NO </div></th>
	<th width="91"> <div align="center">ISSUE DATE </div></th>
	<th width="91"> <div align="center">VEHICLE NAME </div></th>
	<th width="30"> <div align="center">Delete </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <th><div align="center"><?php echo $objResult["EMP_ID"];?></div></th>
    <th><div align="center"><?php echo $objResult["ENGINE_NO"];?></th>
	<th><div align="center"><?php echo $objResult["CHASIS_NO"];?></th>
	<th><div align="center"><?php echo $objResult["ISSUE_DATE"];?></th>
	<th><div align="center"><?php echo $objResult["VEHICLE_NAME"];?></th>
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