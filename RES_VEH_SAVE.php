
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$EMP_ID = $_POST['id'];
$ENGINE_NO = $_POST['eno'];
$CHASIS_NO = $_POST['cno'];
$ISSUE_DATE = date('d-m-Y', strtotime($_POST['dt']));
$VEHICLE_NAME = $_POST['gn'];




$sql     = "INSERT into RESPONSIBLE_VEHICLES(EMP_ID,ENGINE_NO,CHASIS_NO,ISSUE_DATE,VEHICLE_NAME)VALUES(:ab,:cd,:ef,to_date('" . $ISSUE_DATE . "','dd-mm-yy'),:gh)";
$qury  = oci_parse($db,$sql);                                                                
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $EMP_ID);
    oci_bind_by_name($qury, ':cd', $ENGINE_NO);
	oci_bind_by_name($qury, ':ef', $CHASIS_NO);
	oci_bind_by_name($qury, ':gh', $VEHICLE_NAME);
    

    oci_execute($qury);
    echo "Save Done<br />";
}
?>
