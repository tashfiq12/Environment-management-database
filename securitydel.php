<html>
<head>
<title>SECURITY RECORD DELETE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">SECURITY RECORD DELETE</h1>
  	
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
<form name="frmMain" action="securitydelrec.php" method="post" OnSubmit="return onDelete();">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);


$strSQL = "SELECT * FROM SECURITY ";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="95"> <div align="center">EMP_ID </div></th>
    <th width="91"> <div align="center">RANK </div></th>
	<th width="95"> <div align="center">AUTHORIZED_WEAPON_NO </div></th>
    <th width="91"> <div align="center">THREAT_ENCOUNTERED_NO </div></th>
	<th width="95"> <div align="center">HEIGHT </div></th>
	<th width="30"> <div align="center">Delete </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <th><div align="center"><?php echo $objResult["EMP_ID"];?></div></th>
    <th><div align="center"><?php echo $objResult["RANK"];?></th>
	<th><div align="center"><?php echo $objResult["AUTHORIZED_WEAPON_NO"];?></div></th>
	<th><div align="center"><?php echo $objResult["THREAT_ENCOUNTERED_NO"];?></div></th>
	<th><div align="center"><?php echo $objResult["HEIGHT"];?></div></th>
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