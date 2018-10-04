

<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$ITEM_NO = $_POST['itno'];
$R_PROJECT_NO = $_POST['pno'];
$R_PROJECT_NAME = $_POST['pname'];
$REGION = $_POST['region'];
$START_DATE = date('d-m-Y', strtotime($_POST['sdate']));
$ENDING_DATE = date('d-m-Y', strtotime($_POST['edate']));
$RESEARCH_STATUS = $_POST['state'];


$sql     = "INSERT into RES_PROJECT(ITEM_NO,R_PROJECT_NO,R_PROJECT_NAME,REGION,START_DATE,ENDING_DATE,RESEARCH_STATUS) VALUES(:ab,:cd,:ef,:gh,to_date('" . $START_DATE . "','dd-mm-yy'),to_date('" . $ENDING_DATE . "','dd-mm-yy'),:ij)";
$qury  = oci_parse($db,$sql);
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $ITEM_NO);
    oci_bind_by_name($qury, ':cd', $R_PROJECT_NO );
    oci_bind_by_name($qury, ':ef', $R_PROJECT_NAME );
	oci_bind_by_name($qury, ':gh', $REGION);
	oci_bind_by_name($qury, ':ij', $RESEARCH_STATUS);


    oci_execute($qury);
    echo "Save Done<br />";
}
?>
