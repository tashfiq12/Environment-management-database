<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$ITEM_NO = $_POST['itno'];
$D_PROJECT_NO = $_POST['pno'];
$D_PROJECT_NAME = $_POST['pname'];
$REGION = $_POST['region'];
$START_DATE = date('d-m-Y', strtotime($_POST['sdate']));
$ENDING_DATE = date('d-m-Y', strtotime($_POST['edate']));


$sql     = "INSERT into DEV_PROJECT(ITEM_NO,D_PROJECT_NO,D_PROJECT_NAME,REGION,START_DATE,ENDING_DATE) VALUES(:ab,:cd,:ef,:gh,to_date('" . $START_DATE . "','dd-mm-yy'),to_date('" . $ENDING_DATE . "','dd-mm-yy'))";
$qury  = oci_parse($db,$sql);
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $ITEM_NO);
    oci_bind_by_name($qury, ':cd', $D_PROJECT_NO );
    oci_bind_by_name($qury, ':ef', $D_PROJECT_NAME );
	oci_bind_by_name($qury, ':gh', $REGION);


    oci_execute($qury);
    echo "Save Done<br />";
}
?>
