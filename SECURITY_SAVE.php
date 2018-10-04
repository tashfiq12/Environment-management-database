<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$EMP_ID = $_POST['id'];
$RANK  = $_POST['rk'];

$AUTHORIZED_WEAPON_NO = $_POST['res'];
$THREAT_ENCOUNTERED_NO = $_POST['rg'];
$HEIGHT = $_POST['ht'];

$sql     = "INSERT into SECURITY(EMP_ID,RANK,AUTHORIZED_WEAPON_NO,THREAT_ENCOUNTERED_NO,HEIGHT)VALUES(:ab,:cd,:ef,:gh,:ij)";
$qury  = oci_parse($db,$sql);                                                                
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $EMP_ID);
    oci_bind_by_name($qury, ':cd', $RANK);
	
	oci_bind_by_name($qury, ':ef', $AUTHORIZED_WEAPON_NO);
	oci_bind_by_name($qury, ':gh', $THREAT_ENCOUNTERED_NO);
	oci_bind_by_name($qury, ':ij', $HEIGHT);

    

    oci_execute($qury);
    echo "Save Done<br />";
}
?>

