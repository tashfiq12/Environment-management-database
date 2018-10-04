<html>
<head>
<title>VEHICLE TABLE UPDATE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">VEHICLE TABLE UPDATE</h1>
  	
  </div>

<form action="res3.php?EMP_ID=<?php echo $_GET["EMP_ID"];?>" name="frmEdit" method="post">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

//$objConnect = oci_connect("myuser","mypassword","TCDB");
$strSQL = "SELECT * FROM RESPONSIBLE_VEHICLES WHERE EMP_ID = '".$_GET["EMP_ID"]."' ";
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
	<th width="120"> <div align="center">DRIVER ID</div></th>
    <th width="120"> <div align="center">ENGINE NO </div></th>
     <th width="120"> <div align="center">CHASIS NO </div></th>
	<th width="120"> <div align="center">ISSUE DATE </div></th>
    <th width="120"> <div align="center">VEHICLE NAME </div></th>
 
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="EMP_ID" size="10" value="<?php echo $objResult[0];?>"></div></td>
    <td><div align="center"><input type="text" name="ENGINE_NO" size="10" value="<?php echo $objResult[1];?>"></td>
     <td><div align="center"><input type="text" name="CHASIS_NO" size="10" value="<?php echo $objResult[2];?>"></td>
	<td><div align="center"><input type="date" name="ISSUE_DATE" size="10" value="<?php echo $objResult[3];?>"></div></td>
    <td><div align="center"><input type="text" name="VEHICLE_NAME" size="8" value="<?php echo $objResult[4];?>"></td>

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