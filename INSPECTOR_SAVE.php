<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$EMP_ID = $_POST['id'];
$INSPECTION_STARTDATE = date('d-m-Y', strtotime($_POST['dt']));
$RESPONSIBLE_AREA = $_POST['rg'];
$RESPONSIBILITY = $_POST['res'];




$sql     = "INSERT into INSPECTOR(EMP_ID,INSPECTION_STARTDATE,RESPONSIBLE_AREA,RESPONSIBILITY)VALUES(:ab,to_date('" . $INSPECTION_STARTDATE . "','dd-mm-yy'),:cd,:ef)";
$qury  = oci_parse($db,$sql);                                                                
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $EMP_ID);
    oci_bind_by_name($qury, ':cd', $RESPONSIBLE_AREA);
	oci_bind_by_name($qury, ':ef', $RESPONSIBILITY);
    

    oci_execute($qury);
    echo "Save Done<br />";
}
?>

