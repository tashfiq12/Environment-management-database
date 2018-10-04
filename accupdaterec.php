<html>
<head>
<title>ACCOUNT UPDATE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">ACCOUNT UPDATE</h1>
  	
  </div>

<form action="accupdatesave.php?ACC_CODE=<?php echo $_GET["ACC_CODE"];?>" name="frmEdit" method="post">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

//$objConnect = oci_connect("myuser","mypassword","TCDB");
$strSQL = "SELECT * FROM ACCOUNT_SEC WHERE ACC_CODE = '".$_GET["ACC_CODE"]."' ";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
$objResult = oci_fetch_array($objParse);
if(!$objResult)
{
	echo "Not found ACC_SUB =".$_GET["ACC_SUB"];
}
else
{
	
?>
<table align="center" width="600" border="1">
  <tr>
	<th width="120"> <div align="center">ACCOUNT SUB CODE </div></th>
    <th width="120"> <div align="center">RESPONSIBLE DEPT </div></th>
	
    <th width="120"> <div align="center">SALARY BUDGET</div></th>
	<th width="120"> <div align="center">LOSS & DAMAGE BUDGET </div></th>
    <th width="120"> <div align="center">EXTRA BUDGET </div></th>
	<th width="120"> <div align="center">LOSS & DAMAGE EXPENDITURE</div></th>
    <th width="120"> <div align="center">EXTRA EXPENDITURE</div></th>
	<th width="120"> <div align="center">YEAR </div></th>
 
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="ACC_CODE" size="10" value="<?php echo $objResult["ACC_CODE"];?>"></div></td>
    <td><div align="center"><input type="text" name="RESPONSIBLE_DEPT_CODE" size="10" value="<?php echo $objResult["RESPONSIBLE_DEPT_CODE"];?>"></td>
	
    <td><div align="center"><input type="number" name="SALARY_BUDGET" size="8" value="<?php echo $objResult["SALARY_BUDGET"];?>"></td>
	<td><div align="center"><input type="number" name="LOSS_DAM_BUD" size="10" value="<?php echo $objResult["LOSS_DAM_BUD"];?>"></div></td>
    <td><div align="center"><input type="number" name="EXTRA_BUD" size="10" value="<?php echo $objResult["EXTRA_BUD"];?>"></td>
	<td><div align="center"><input type="number" name="LOSS_DAMG_EXP" size="10" value="<?php echo $objResult["LOSS_DAMG_EXP"];?>"></div></td>
    <td><div align="center"><input type="number" name="EXTRA_EXPEDITURE" size="8" value="<?php echo $objResult["EXTRA_EXPEDITURE"];?>"></td>
	<td><div align="center"><input type="number" name="YEAR" size="10" value="<?php echo $objResult["YEAR"];?>"></div></td>
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