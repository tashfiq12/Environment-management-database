<html>
<head>
<title> Phone </title>
</head>
<body>

<div class="header">
       <h1>PHONE</h1>
  	
  </div>

<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;

$objConnect = oci_connect("anik4010","1234",$conn);
$strSQL = "SELECT * FROM PHONE";
$objParse = oci_parse ($objConnect, $strSQL);
oci_execute ($objParse,OCI_DEFAULT);
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">EMPLOYEE ID </div></th>
    <th width="98"> <div align="center"> MOBILE NO </div></th>
    <th width="30"> <div align="center">Delete </div></th> 
  </tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["EMP_ID"];?></div></td>
    <td><?php echo $objResult["MOBILE_NO"];?></td>
    <td align="center"><a href="phonedelrecord.php?Emp_ID=<?php echo $objResult["EMP_ID"];?>">Delete</a></td>
  </tr>
<?php
}
?>
</table>
<?php
oci_close($objConnect);
?>
</body>
</html>