<html>
<head>
<title>PHONE UPDATE</title>
</head>
<body>

<div class="header">
       <h1>PHONE UPDATE</h1>
  	
  </div>

<form action="phoneupdatesave.php?EMP_ID=<?php echo $_GET["EMP_ID"];?>" name="frmEdit" method="post">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

//$objConnect = oci_connect("myuser","mypassword","TCDB");
$strSQL = "SELECT * FROM PHONE WHERE EMP_ID = '".$_GET["EMP_ID"]."' ";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
$objResult = oci_fetch_array($objParse);
if(!$objResult)
{
	echo "Not found EMPLOYEE ID=".$_GET["EMP_ID"];
}
else
{
	
?>
<table width="600" border="1">
  <tr>
    <th width="150"> <div align="center">EMPLOYEE ID </div></th>
    <th width="120"> <div align="center">MOBILE NO </div></th>
 
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="EMP_ID" size="8" value="<?php echo $objResult["EMP_ID"];?>"></div></td>
    <td><div align="center"><input type="text" name="MOBILE_NO" size="30" value="<?php echo $objResult["MOBILE_NO"];?>"></td>
    
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