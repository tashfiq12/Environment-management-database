<html>
<head>
<title>YEARLY BASIS UPDATE</title>
</head>
<body>

<div class="header">
       <h1>YEARLY BASIS UPDATE</h1>
  	
  </div>

<form action="yearlybasisupdatesave.php?EVALUATION_NO=<?php echo $_GET["EVALUATION_NO"];?>" name="frmEdit" method="post">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

//$objConnect = oci_connect("myuser","mypassword","TCDB");
$strSQL = "SELECT * FROM YEARLY_BASIS WHERE EVALUATION_NO = '".$_GET["EVALUATION_NO"]."' ";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
$objResult = oci_fetch_array($objParse);
if(!$objResult)
{
	echo "Not found EVALUATION NO =".$_GET["EVALUATION_NO"];
}
else
{
	
?>
<table width="600" border="1">
  <tr>
	<th width="90"> <div align="center">EVALUATION NO </div></th>
    <th width="90"> <div align="center">REGION </div></th>
	<th width="90"> <div align="center">YEAR </div></th>
    <th width="90"> <div align="center">RAINFALL</div></th>
	<th width="90"> <div align="center">TEMPARATURE</div></th>
    <th width="90"> <div align="center">HUMIDITY </div></th>
	<th width="90"> <div align="center">AIR PRESSURE</div></th>
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="EVALUATION NO" size="10" value="<?php echo $objResult["EVALUATION_NO"];?>"></div></td>
    <td><div align="center"><input type="text" name="REGION" size="10" value="<?php echo $objResult["REGION"];?>"></td>
	<td><div align="center"><input type="number" name="YEAR" size="10" value="<?php echo $objResult["YEAR"];?>"></div></td>
    <td><div align="center"><input type="float" name="RAINFALL" size="8" value="<?php echo $objResult["RAINFALL"];?>"></td>
	<td><div align="center"><input type="number" name="TEMPARATURE" size="10" value="<?php echo $objResult["TEMPARATURE"];?>"></div></td>
    <td><div align="center"><input type="float" name="HUMIDITY" size="8" value="<?php echo $objResult["HUMIDITY"];?>"></td>
	<td><div align="center"><input type="number" name="AIR PRESSURE" size="8" value="<?php echo $objResult["AIR_PRESSURE"];?>"></div></td>

  </tr>
  </table>
  <input type="submit" name="submit" value="submit">
  <?php
  }
  oci_close($objConnect);
  ?>
  </form>
</body>
</html>