<html>
<head>
<title>DEPARTMENT UPDATE RECORD</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>

<div class="header">
       <h1 align="center">DEPARTMENT UPDATE RECORD</h1>
  	
  </div>

<form action="DEPARTMENT_SAVE_UPDATE.php?DEPT_CODE=<?php echo $_GET["DEPT_CODE"];?>" name="frmEdit" method="post">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

//$objConnect = oci_connect("myuser","mypassword","TCDB");
$strSQL = "SELECT * FROM DEPARTMENT WHERE DEPT_CODE = '".$_GET["DEPT_CODE"]."' ";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
$objResult = oci_fetch_array($objParse);
if(!$objResult)
{
	echo "Not found DEPT_CODE =".$_GET["DEPT_CODE"];
}
else
{
	
?>
<table align="center" width="600" border="1">
  <tr>
	<th width="120"> <div align="center">DEPT_CODE</div></th>
	<th width="120"> <div align="center">DEPT_NAME</div></th>
    <th width="120"> <div align="center">DIRECTOR</div></th>
	<th width="120"> <div align="center">LOCATION</div></th>
	<th width="120"> <div align="center">DATE OF ESTABLISHMENT</div></th>
	<th width="120"> <div align="center">HOTLINE</div></th>


  </tr>
  <tr>
    <td><div align="center"><input type="text" name="DEPT_CODE" size="10" value="<?php echo $objResult["DEPT_CODE"];?>"></div></td>
    <td><div align="center"><input type="text" name="DEPT_NAME" size="10" value="<?php echo $objResult["DEPT_NAME"];?>"></td>
	    <td><div align="center"><input type="text" name="DIRECTOR" size="8" value="<?php echo $objResult["DIRECTOR"];?>"></td>
    <td><div align="center"><input type="text" name="LOCATION" size="8" value="<?php echo $objResult["LOCATION"];?>"></td>

	<td><div align="center"><input type="date" name="DATE_OF_ESTABLISHMENT" size="10" value="<?php echo $objResult["DATE_OF_ESTABLISHMENT"];?>"></div></td>
    <td><div align="center"><input type="text" name="HOTLINE" size="8" value="<?php echo $objResult["HOTLINE"];?>"></td>

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