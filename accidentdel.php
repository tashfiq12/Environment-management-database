<html>
<head>
<title>ACCIDENT RECORD DELETE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">ACCIDENT RECORD DELETE</h1>
  	
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
<form name="frmMain" action="accidentdelrec.php" method="post" OnSubmit="return onDelete();">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);


$strSQL = "SELECT * FROM ACCIDENT ";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table align="center" width="600" border="1">
  <tr>
    <th width="95"> <div align="center">EMPLOYEE ID </div></th>
    <th width="91"> <div align="center">ACCIDENT PLACE </div></th>
	<th width="91"> <div align="center">ACCIDENT DATE </div></th>
	<th width="30"> <div align="center">Delete </div></th>
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <th><div align="center"><?php echo $objResult["EMP_ID"];?></div></th>
    <th>
	<div align="center">
	<?php 
	if($objResult["ACCIDENT_PLACE"] == "")
	{	
		$objResult["ACCIDENT_PLACE"]="DATA";
		echo $objResult["ACCIDENT_PLACE"];
	}
	else
	{
    	echo "Data Not Valid";
		//echo $objResult["ACCIDENT_PLACE"];
	}
	?>
	</div>
	</th>
	<th><div align="center"><?php echo $objResult["ACCIDENT_DATE"];?></div></th>
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