
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$OPERATION_CODE = $_POST['op'];
$FIELD_OFFICER_ID = $_POST['fid'];
$MOB_COURT_DATE= date('d-m-Y', strtotime($_POST['mc']));
$CHECKED_INDUSTRY = $_POST['ci'];
$PUNISHMENT_CODE = $_POST['pc'];



$sql     = "INSERT into MOBILE_COURT(SERIAL,OPERATION_CODE,FIELD_OFFICER_ID,MOB_COURT_DATE,CHECKED_INDUSTRY,PUNISHMENT_CODE) VALUES(MOBILE_COURT_SER.nextval,:ab,:cd,to_date('" . $MOB_COURT_DATE . "','dd-mm-yy'),:ef,:gh) ";
$qury  = oci_parse($db,$sql);
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $OPERATION_CODE);
    oci_bind_by_name($qury, ':cd', $FIELD_OFFICER_ID );
	oci_bind_by_name($qury, ':ef', $CHECKED_INDUSTRY);
    oci_bind_by_name($qury, ':gh', $PUNISHMENT_CODE );
    

    oci_execute($qury);
    echo "Save Done<br />";
}
?>
