<html>
<head>
<title>Yearly Basis DELETE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">YEARLY BASIS RECORD DELETE</h1>
  	
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
<form name="frmMain" action="yearlybasisrec.php" method="post" OnSubmit="return onDelete();">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);


$strSQL = "SELECT * FROM YEARLY_BASIS";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="140"> <div align="center">EVALUATION NO </div></th>
    <th width="120"> <div align="center">REGION </div></th>
	<th width="120"> <div align="center">YEAR </div></th>
    <th width="120"> <div align="center">RAINFALL</div></th>
	<th width="120"> <div align="center">TEMPARATURE</div></th>
    <th width="120"> <div align="center">HUMIDITY </div></th>
	<th width="120"> <div align="center">AIR PRESSURE</div></th>
	<th width="30"> <div align="center">Delete </div></th>

  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <th><div align="center"><?php echo $objResult["EVALUATION_NO"];?></div></th>
    <th><div align="center"><?php echo $objResult["REGION"];?></th>
	<th><div align="center"><?php echo $objResult["YEAR"];?></div></th>
    <th><div align="center"><?php echo $objResult["RAINFALL"];?></th>
	<th><div align="center"><?php echo $objResult["TEMPARATURE"];?></div></th>
    <th><div align="center"><?php echo $objResult["HUMIDITY"];?></th>
	<th><div align="center"><?php echo $objResult["AIR_PRESSURE"];?></div></th>
    <th align="center"><input type="checkbox" name="chkDel[]" value="<?php echo $objResult["EVALUATION_NO"];?>"></th>
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