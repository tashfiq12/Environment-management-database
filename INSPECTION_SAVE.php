
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$EMP_ID = $_POST['id'];
$INDUSTRY_REG_NO = $_POST['rg'];
$INSPECTION_DATE = date('d-m-Y', strtotime($_POST['dt']));
$VIOLATION_CRITERIA = $_POST['res'];




$sql     = "INSERT into INSPECTION(EMP_ID,INDUSTRY_REG_NO,INSPECTION_DATE,VIOLATION_CRITERIA)VALUES(:ab,:cd,to_date('" . $INSPECTION_DATE . "','dd-mm-yy'),:ef)";
$qury  = oci_parse($db,$sql);                                                                
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $EMP_ID);
    oci_bind_by_name($qury, ':cd', $INDUSTRY_REG_NO);
	oci_bind_by_name($qury, ':ef', $VIOLATION_CRITERIA);
    

    oci_execute($qury);
    echo "Save Done<br />";
}
?>

