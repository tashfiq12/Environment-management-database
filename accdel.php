<html>
<head>
<title>ACCOUNT RECORD DELETE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">ACCOUNT RECORD DELETE</h1>
  	
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
<form name="frmMain" action="accdelrec.php" method="post" OnSubmit="return onDelete();">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);


$strSQL = "SELECT * FROM ACCOUNT_SEC";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table class="table table-striped table-bordered table-condensed" align="center">
	<thead>
  <tr>
    <th width="91"> <div align="center">ACCOUNT SUB CODE </div></th>
    <th width="93"> <div align="center">RESPONSIBLE DEPT </div></th>
	<th width="91"> <div align="center">SALARY BUDGET</div></th>
    <th width="93"> <div align="center">LOSS & DAMAGE BUDGET</div></th>
	<th width="91"> <div align="center">EXTRA BUDGET</div></th>
    <th width="93"> <div align="center">LOSS & DAMAGE EXPENDITURE</div></th>
	<th width="91"> <div align="center">EXTRA EXPENDITURE</div></th>
    <th width="93"> <div align="center">YEAR</div></th>
    <th width="30"> <div align="center">Delete </div></th>
   </tr>
  </thead>
  <tbody>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <th><div align="center"><?php echo $objResult["ACC_CODE"];?></div></th>
    <th><?php echo $objResult["RESPONSIBLE_DEPT_CODE"];?></th>
	<th><div align="center"><?php echo $objResult["SALARY_BUDGET"];?></div></th>
    <th><?php echo $objResult["LOSS_DAM_BUD"];?></th>
	<th><div align="center"><?php echo $objResult["EXTRA_BUD"];?></div></th>
    <th><?php echo $objResult["LOSS_DAMG_EXP"];?></th>
	<th><div align="center"><?php echo $objResult["EXTRA_EXPEDITURE"];?></div></th>
    <th><?php echo $objResult["YEAR"];?></th>
    <th align="center"><input type="checkbox" name="chkDel[]" value="<?php echo $objResult["ACC_CODE"];?>"></th>
	<td>
                <a class="blue-text"><i class="fa fa-user"></i></a>
                <a class="teal-text"><i class="fa fa-pencil"></i></a>
                <a class="red-text"><i class="fa fa-times"></i></a>
    </td>
  </tr>

<?php
}
?>
</tbody>
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