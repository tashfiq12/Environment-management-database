<html>
<head>
<title>EMPLOYEE</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">EMPLOYEE SEARCH</h1>
  	
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
	/*$strSQL1 = "SELECT  * FROM ADDRESS WHERE (EMP_ID LIKE '%".$strKeyword."%' 
	or CITY LIKE '%".$strKeyword."%' )  ";*/
	$strSQL1 = "SELECT  ROW_NUMBER() OVER(ORDER BY EMP_ID) AS ROWNO, EMP_ID,DEPT_CODE,DATE_OF_BIRTH,SALARY,JOINING_DATE,FIRST_NAME,LAST_NAME,E.ADDRESS.HOUSE_NO,E.ADDRESS.STREET_NO,E.ADDRESS.SECTOR_NO,E.ADDRESS.CITY,RELIGION,DESIGNATION,BLOOD_GROUP FROM EMPLOYEE E  
			WHERE (LOWER(EMP_ID) LIKE '".$strKeyword."%' or UPPER(EMP_ID) LIKE '".$strKeyword."%' or UPPER(FIRST_NAME) LIKE '".$strKeyword."%'  or LOWER(FIRST_NAME) LIKE '".$strKeyword."%' )  ";

	$objParse = oci_parse($objConnect, $strSQL1);
	oci_execute ($objParse,OCI_DEFAULT);

	$Num_Rows = oci_fetch_all($objParse, $Result);

	$Per_Page = 10;   // Per Page

	if(!isset($_GET["Page"]))
	{
		$Page=1;
	}
	else
	{
		$Page = $_GET["Page"];
	}

	$Prev_Page = $Page-1;
	$Next_Page = $Page+1;

	$Page_Start = (($Per_Page*$Page)-$Per_Page);
	if($Num_Rows<=$Per_Page)
	{
		$Num_Pages =1;
	}
	else if(($Num_Rows % $Per_Page)==0)
	{
		$Num_Pages =($Num_Rows/$Per_Page) ;
	}
	else
	{
		$Num_Pages =($Num_Rows/$Per_Page)+1;
		$Num_Pages = (int)$Num_Pages;
	}
	$Page_End = $Per_Page * $Page;
	if ($Page_End > $Num_Rows)
	{
		$Page_End = $Num_Rows;
	}

	$Row_End = $Per_Page * $Page;
	if($Row_End > $Num_Rows)
	{
		$Row_End = $Num_Rows;
	}
	?>
	<table align="center" width="600" border="1">
  <tr>
    <th width="91"> <div align="center">EMPLOYEE ID </div></th>
	<th width="98"> <div align="center">DEPT CODE </div></th>
	<th width="198"> <div align="center">DATE OF BIRTH </div></th>
	<th width="97"> <div align="center">SALARY </div></th>
	<th width="59"> <div align="center">JOINING DATE </div></th>
	<th width="91"> <div align="center">FIRST NAME </div></th>
	<th width="98"> <div align="center">LAST NAME </div></th>
	<th width="120"> <div align="center">HOUSE NO </div></th>
	<th width="150"> <div align="center">STREET NO </div></th>
    <th width="120"> <div align="center">SECTOR NO </div></th>
	<th width="150"> <div align="center">CITY </div></th>
	<th width="198"> <div align="center">RELIGION </div></th>
	<th width="97"> <div align="center">DESIGNATION </div></th>
	<th width="59"> <div align="center">BLOOD GROUP </div></th>
  </tr>
<?php
	$strSQL2 = "SELECT C.* FROM ($strSQL1) C WHERE C.ROWNO > $Page_Start AND C.ROWNO <= $Row_End";
	$objParse = oci_parse($objConnect, $strSQL2);
	oci_execute ($objParse,OCI_DEFAULT);
	while($objResult = oci_fetch_array($objParse,OCI_ASSOC))
	{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["EMP_ID"];?></div></td>
    <td><div align="center"><?php echo $objResult["DEPT_CODE"];?></td>
	<td><div align="center"><?php echo $objResult["DATE_OF_BIRTH"];?></div></td>
    <td><div align="center"><?php echo $objResult["SALARY"];?></td>
	<td><div align="center"><?php echo $objResult["JOINING_DATE"];?></div></td>
    <td><div align="center"><?php echo $objResult["FIRST_NAME"];?></td>
	<td><div align="center"><?php echo $objResult["LAST_NAME"];?></div></td>
	<td><div align="center"><?php echo $objResult["ADDRESS.HOUSE_NO"];?></td>
	<td><div align="center"><?php echo $objResult["ADDRESS.STREET_NO"];?></div></td>
    <td><div align="center"><?php echo $objResult["ADDRESS.SECTOR_NO"];?></td>
	<td><div align="center"><?php echo $objResult["ADDRESS.CITY"];?></div></td>
    <td><div align="center"><?php echo $objResult["RELIGION"];?></td>
	<td><div align="center"><?php echo $objResult["DESIGNATION"];?></div></td>
    <td><div align="center"><?php echo $objResult["BLOOD_GROUP"];?></td>
  </tr>
<?php
}
?>
</table>
	<br>
	<div style="text-align:center;">
	Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
	<?php
	if($Prev_Page)
	{
		echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page&txtKeyword=$strKeyword'><< Back</a> ";
	}

	for($i=1; $i<=$Num_Pages; $i++){
		if($i != $Page)
		{
			echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i&txtKeyword=$strKeyword'>$i</a> ]";
		}
		else
		{
			echo "<b> $i </b>";
		}
	}
	if($Page!=$Num_Pages)
	{
		echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page&txtKeyword=$strKeyword'>Next>></a> ";
	}
	
	oci_close($objConnect);

	?>
	</div>
</body>
</html>