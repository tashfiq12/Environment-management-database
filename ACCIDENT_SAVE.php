
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$EMP_ID = $_POST['id'];
$ACCIDENT_PLACE = $_POST['place'];
$ACCIDENT_DATE = date('d-m-Y', strtotime($_POST['accidate']));




$sql     = "INSERT into ACCIDENT(EMP_ID,ACCIDENT_PLACE,ACCIDENT_DATE)VALUES(:ab,:cd,to_date('" . $ACCIDENT_DATE . "','dd-mm-yy'))";
$qury  = oci_parse($db,$sql);                                                                
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $EMP_ID);
    oci_bind_by_name($qury, ':cd', $ACCIDENT_PLACE);
    

    oci_execute($qury);
    echo "Save Done<br />";
}
?>
