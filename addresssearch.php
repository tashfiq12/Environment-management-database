<html>
<head>
<title>ADDRESS SEARCH</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">ADDRESS SEARCH</h1>
  	
  </div>

<?php
$strKeyword = null;
if(isset($_GET["txtKeyword"]))
{
	$strKeyword = $_GET["txtKeyword"];
}
?>
<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table align="center" width="500" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
<?php
	
	$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
    $objConnect = oci_connect("anik4010","1234",$conn);
	//$objConnect = oci_connect("myuser","mypassword","TCDB");
	$strSQL = "SELECT  * FROM ADDRESS WHERE (LOWER(EMP_ID) LIKE '%".$strKeyword."%' or UPPER(EMP_ID) LIKE '%".$strKeyword."%' or UPPER(CITY) LIKE '%".$strKeyword."%'  or LOWER(CITY) LIKE '%".$strKeyword."%'  )  ";
	/*$strSQL = "SELECT  * FROM CUSTOMER  WHERE (NAME LIKE '%".$_GET["txtKeyword"]."%' 
	or EMAIL LIKE '%".$_GET["txtKeyword"]."%' )  ";*/
	$objParse = oci_parse ($objConnect, $strSQL);
	oci_execute ($objParse);
	?>
	<table align="center" width="600" border="1">
	<tr>
		<th width="91"> <div align="center">EMPLOYEE ID </div></th>
		<th width="98"> <div align="center">HOUSE NO </div></th>
		<th width="198"> <div align="center">STREET NO </div></th>
		<th width="97"> <div align="center">SECTOR NO </div></th>
		<th width="59"> <div align="center">CITY </div></th>
	  </tr>
	<?php
	while($objResult = oci_fetch_array($objParse,OCI_BOTH))
	{
	?>
	<tr>
		<td><div align="center"><?php echo $objResult["EMP_ID"];?></div></td>
		<td><?php echo $objResult["HOUSE_NO"];?></td>
		<td><?php echo $objResult["STREET_NO"];?></td>
		<td><div align="center"><?php echo $objResult["SECTOR_NO"];?></div></td>
		<td align="right"><?php echo $objResult["CITY"];?></td>
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