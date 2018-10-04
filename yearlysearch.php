<html>
<head>
<title>Yearly basis SEARCH</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">Yearly Basis SEARCH</h1>
  	
  </div>
<?php
$strKeyword = null;
if(isset($_GET["txtKeyword"]))
{
	$strKeyword = $_GET["txtKeyword"];
}
?>
<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table align="center" width="599" border="1">
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
	$strSQL = "SELECT  * FROM Yearly_Basis WHERE (LOWER(Region) LIKE '%".$strKeyword."%' or UPPER(Region) LIKE '%".$strKeyword."%' or UPPER(Evaluation_No) LIKE '%".$strKeyword."%'  or LOWER(Evaluation_No) LIKE '%".$strKeyword."%'  )  ";
	/*$strSQL = "SELECT  * FROM CUSTOMER  WHERE (NAME LIKE '%".$_GET["txtKeyword"]."%' 
	or EMAIL LIKE '%".$_GET["txtKeyword"]."%' )  ";*/
	$objParse = oci_parse ($objConnect, $strSQL);
	oci_execute ($objParse);
	?>
	<table align="center" width="600" border="1">
	<tr>
		<th width="91"> <div align="center">EVALUATION_NO</div></th>
		<th width="98"> <div align="center">REGION </div></th>
		<th width="198"> <div align="center">YEAR </div></th>
		<th width="97"> <div align="center">RAINFALL </div></th>
		<th width="59"> <div align="center">TEMPARATURE </div></th>
		<th width="59"> <div align="center">HUMIDITY </div></th>
		<th width="59"> <div align="center">AIR PRESSURE </div></th>
	  </tr>
	<?php
	while($objResult = oci_fetch_array($objParse,OCI_BOTH))
	{
	?>
	<tr>
		<td><div align="center"><?php echo $objResult["EVALUATION_NO"];?></div></td>
		<td><?php echo $objResult["REGION"];?></td>
		<td><?php echo $objResult["YEAR"];?></td>
		<td><div align="center"><?php echo $objResult["RAINFALL"];?></div></td>
		<td align="right"><?php echo $objResult["TEMPARATURE"];?></td>
		<td align="right"><?php echo $objResult["HUMIDITY"];?></td>
		<td align="right"><?php echo $objResult["AIR_PRESSURE"];?></td>
		
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