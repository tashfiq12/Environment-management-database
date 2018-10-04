<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$INDUSTRY_REG_NO = $_POST['aw'];
$DATE_OF_LAST_INSPECT = date('d-m-Y', strtotime($_POST['dt1']));
$LAST_PUNISHMENT_DATE = date('d-m-Y', strtotime($_POST['dt2']));
$INDUSTRY_NAME = $_POST['bw'];
$ADDRESS = $_POST['cw'];
$POLLUTION_LEVEL = $_POST['dw'];




$sql = "INSERT into REGIONAL_INDUSTRIES(INDUSTRY_REG_NO,DATE_OF_LAST_INSPECT,LAST_PUNISHMENT_DATE,INDUSTRY_NAME,ADDRESS,POLLUTION_LEVEL)
			VALUES(:ab,to_date('" . $DATE_OF_LAST_INSPECT . "','dd-mm-yy'),to_date('" . $LAST_PUNISHMENT_DATE . "','dd-mm-yy'),:cd,:ef,:gh)";
$qury  = oci_parse($db,$sql);                                                                
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $INDUSTRY_REG_NO);
	oci_bind_by_name($qury, ':cd', $INDUSTRY_NAME);
    oci_bind_by_name($qury, ':ef', $ADDRESS);
 	oci_bind_by_name($qury, ':gh', $POLLUTION_LEVEL);

    oci_execute($qury);
    echo "Save Done<br />";
}
?>

<html>
<head>
</head>
<body>
<br>
<?php
echo "Update Child Tables";
?>
<form>
<input type="button" value="show" 
onclick="window.location.href='INSPECTION_INSERT.php'" />

</form>
<br>
<?php
echo "Wrong Submit!!? Want to Submit again?";
?>
<form>
<input type="button" value="submit again" 
onclick="window.location.href='REG_INDUS_INSERT.php'" />
</form>
</body>
</html> 