<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$OPERATION_CODE = $_POST['opcode'];
$DEPT_CODE = $_POST['deptcode'];
$OPERATION_NAME = $_POST['opname'];
$FIELD_OFFICER_ID = $_POST['fdid'];
$OPERATIONAL_OFF_ID = $_POST['opsid'];

$sql     = "INSERT into LAW_DEPT(OPERATION_CODE,DEPT_CODE,OPERATION_NAME,FIELD_OFFICER_ID,OPERATIONAL_OFF_ID) VALUES(:ab,:cd,:ef,:gh,:mm)";
$qury  = oci_parse($db,$sql);
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $OPERATION_CODE);
    oci_bind_by_name($qury, ':cd', $DEPT_CODE );
    oci_bind_by_name($qury, ':ef', $OPERATION_NAME );
	oci_bind_by_name($qury, ':gh', $FIELD_OFFICER_ID );
	oci_bind_by_name($qury, ':mm', $OPERATIONAL_OFF_ID);
    oci_execute($qury);
    echo "Save Done<br />";
}
?>
