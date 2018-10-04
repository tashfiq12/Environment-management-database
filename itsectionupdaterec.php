<html>
<head>
<title>IT SECTION UPDATE</title>
</head>
<body>

<div class="header">
       <h1>IT SECTION UPDATE</h1>
  	
  </div>

<form action="itsectionupdatesave.php?TASK_EXT=<?php echo $_GET["TASK_EXT"];?>" name="frmEdit" method="post">
<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$objConnect = oci_connect("anik4010","1234",$conn);

//$objConnect = oci_connect("myuser","mypassword","TCDB");
$strSQL = "SELECT * FROM IT_SEC WHERE TASK_EXT = '".$_GET["TASK_EXT"]."' ";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
$objResult = oci_fetch_array($objParse);
if(!$objResult)
{
	echo "Not found TASK_EXT =".$_GET["TASK_EXT"];
}
else
{
	
?>
<table width="600" border="1">
  <tr>
	<th width="120"> <div align="center">TASK_EXT</div></th>
    <th width="120"> <div align="center">DEPT CODE </div></th>
	<th width="120"> <div align="center">TASK_DATE </div></th>
    <th width="120"> <div align="center">GUEST_MEMBER </div></th>
 
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="TASK_EXT" size="10" value="<?php echo $objResult["TASK_EXT"];?>"></div></td>
    <td><div align="center"><input type="text" name="DEPT_CODE" size="10" value="<?php echo $objResult["DEPT_CODE"];?>"></td>
	<td><div align="center"><input type="date" name="TASK_DATE" size="10" value="<?php echo $objResult["TASK_DATE"];?>"></div></td>
    <td><div align="center"><input type="text" name="GUEST_MEMBER" size="8" value="<?php echo $objResult["GUEST_MEMBER"];?>"></td>

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