<?php
$con = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$conn=oci_connect("anik4010", "1234", $con);


$sql = 'BEGIN employee_age(:name, :message); END;';

$stmt = oci_parse($conn,$sql);

$name = date( 'Y-m-d', strtotime( '2009-01-31' ) );

oci_bind_by_name($stmt,':name',$name,32);

oci_bind_by_name($stmt,':message',$message,32);
//$time = strtotime('1990-01-01');



//$name = to_date('11-07-1990','DD-MM-YYYY');

oci_execute($stmt);

print "$message\n";
?>