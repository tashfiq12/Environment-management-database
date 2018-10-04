
<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$EMP_ID = $_POST['itno'];
$DRIVER_LICENSE_NO = $_POST['pno'];
$LICENSE_DATE_EXPIRATION = date('d-m-Y', strtotime($_POST['edate']));



$sql     = "INSERT into DRIVER(EMP_ID,DRIVER_LICENSE_NO,LICENSE_DATE_EXPIRATION) VALUES(:ab,:cd,to_date('" . $LICENSE_DATE_EXPIRATION . "','dd-mm-yy')) ";
$qury  = oci_parse($db,$sql);
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $EMP_ID);
    oci_bind_by_name($qury, ':cd', $DRIVER_LICENSE_NO );
    

    oci_execute($qury);
    echo "Save Done<br />";
}
?>
