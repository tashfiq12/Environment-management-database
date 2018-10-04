<?php
$con = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$conn=oci_connect("anik4010", "1234", $con);


$sql = 'BEGIN sayHello(:name, :message); END;';

$stmt = oci_parse($conn,$sql);

oci_bind_by_name($stmt,':name',$name,32);

oci_bind_by_name($stmt,':message',$message,32);

$name = 'World';

oci_execute($stmt);

print "$message\n";
?>