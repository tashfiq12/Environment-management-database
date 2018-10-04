

<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$ITEM_NO = $_POST['itno'];
$ITEM_NAME = $_POST['itmname'];
$INCHARGE_ID = $_POST['icid'];
$DEPT_CODE = $_POST['deptcode'];



$sql     = "INSERT into RESEARCH(ITEM_NO,ITEM_NAME,INCHARGE_ID,DEPT_CODE) VALUES(:ab,:cd,:ef,:gh)";
$qury  = oci_parse($db,$sql);
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $ITEM_NO);
    oci_bind_by_name($qury, ':cd', $ITEM_NAME );
    oci_bind_by_name($qury, ':ef', $INCHARGE_ID );
	oci_bind_by_name($qury, ':gh', $DEPT_CODE);
    oci_execute($qury);
    echo "Save Done<br />";
}
?>
