<html>
<head>
<title>REGIONAL INDUSTRIES UPDATE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">REGIONAL INDUSTRIES UPDATE</h1>
  	
  </div>

<form action="regi3.php?INDUSTRY_REG_NO=<?php echo $_GET["INDUSTRY_REG_NO"];?>" name="frmEdit" method="post">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

//$objConnect = oci_connect("myuser","mypassword","TCDB");
$strSQL = "SELECT * FROM REGIONAL_INDUSTRIES WHERE INDUSTRY_REG_NO  = '".$_GET["INDUSTRY_REG_NO"]."' ";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
$objResult = oci_fetch_array($objParse);
if(!$objResult)
{
	echo "Not found INDUSTRY NO =".$_GET["INDUSTRY_REG_NO"];
}
else
{
	
?>
<table align="center" width="600" border="1">
  <tr>
	<th width="120"> <div align="center">INDUSTRY REG NO</div></th>
    <th width="120"> <div align="center">LAST INSPECT </div></th>
	<th width="120"> <div align="center">LAST PUNISHMENT </div></th>
    <th width="120"> <div align="center">INDUSTRY_NAME </div></th>
     <th width="120"> <div align="center"> ADDRESS </div></th>
      <th width="120"> <div align="center">POLLUTION_LEVEL </div></th>
 
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="INDUSTRY_REG_NO" size="10" value="<?php echo $objResult[0];?>"></div></td>
    <td><div align="center"><input type="date" name="DATE_OF_LAST_INSPECT" size="10" value="<?php echo $objResult[1];?>"></td>
	<td><div align="center"><input type="date" name="LAST_PUNISHMENT_DATE" size="10" value="<?php echo $objResult[2];?>"></div></td>
    <td><div align="center"><input type="text" name="INDUSTRY_NAME" size="8" value="<?php echo $objResult[3];?>"></td>
      <td><div align="center"><input type="text" name="ADDRESS" size="8" value="<?php echo $objResult[4];?>"></td>
        <td><div align="center"><input type="text" name="POLLUTION_LEVEL" size="8" value="<?php echo $objResult[5];?>"></td>

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