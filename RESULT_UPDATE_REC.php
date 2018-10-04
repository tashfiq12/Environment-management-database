<html>
<head>
<title>RESULT UPDATE RECORD</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">RESULT UPDATE RECORD</h1>
  	
  </div>

<form action="RESULT_SAVE_UPDATE.php?EMP_ID=<?php echo $_GET["EMP_ID"];?>" name="frmEdit" method="post">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

//$objConnect = oci_connect("myuser","mypassword","TCDB");
$strSQL = "SELECT * FROM RESULT WHERE EMP_ID = '".$_GET["EMP_ID"]."' ";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
$objResult = oci_fetch_array($objParse);
if(!$objResult)
{
	echo "Not found EMP_ID =".$_GET["EMP_ID"];
}
else
{
	
?>
<table align="center" width="600" border="1">
  <tr>
	<th width="120"> <div align="center">EMPLOYEE ID</div></th>
	<th width="120"> <div align="center">SSC PASSING YEAR</div></th>
	<th width="120"> <div align="center">SSC GPA</div></th>
	<th width="120"> <div align="center">HSC PASSING YEAR</div></th>
	<th width="120"> <div align="center">HSC GPA</div></th>
    <th width="120"> <div align="center">HONOURS PASSING YEAR</div></th>
	<th width="120"> <div align="center">HONOURS GPA</div></th>
 
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="EMP_ID" size="10" value="<?php echo $objResult["EMP_ID"];?>"></div></td>
    <td><div align="center"><input type="text" name="SSC_PASS_YEAR" size="10" value="<?php echo $objResult["SSC_PASS_YEAR"];?>"></td>
    <td><div align="center"><input type="text" name="SSC_GPA" size="8" value="<?php echo $objResult["SSC_GPA"];?>"></td>
    <td><div align="center"><input type="text" name="HSC_PASS_YEAR" size="8" value="<?php echo $objResult["HSC_PASS_YEAR"];?>"></td>
    <td><div align="center"><input type="text" name="HSC_GPA" size="8" value="<?php echo $objResult["HSC_GPA"];?>"></td>
    <td><div align="center"><input type="text" name="HON_PASS_YEAR" size="8" value="<?php echo $objResult["HON_PASS_YEAR"];?>"></td>
    <td><div align="center"><input type="text" name="HON_GPA" size="8" value="<?php echo $objResult["HON_GPA"];?>"></td>

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