<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$EVALUATION_NO       =	  $_POST['eid'];
$REGION = 	  $_POST['code'];
$YEAR       =	  $_POST['sal'];
$RAINFALL       =	  $_POST['fall'];
$TEMPARATURE = 	  $_POST['temp'];
$HUMIDITY = 	  $_POST['rel'];
$AIR_PRESSURE = 	  $_POST['des'];


$sql     = "INSERT into Yearly_basis(Evaluation_No,Region,Year,Rainfall,Temparature,HUMIDITY,Air_pressure)
VALUES(:eid,:code,:sal,:fall,:temp,:rel,:des)";
$qury  = oci_parse($db,$sql);
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':eid', $EVALUATION_NO );                      
    oci_bind_by_name($qury, ':code', $REGION );
    oci_bind_by_name($qury, ':sal', $YEAR  );
    oci_bind_by_name($qury, ':fall', $RAINFALL );
    oci_bind_by_name($qury, ':temp', $TEMPARATURE);
   
    oci_bind_by_name($qury, ':rel', $HUMIDITY );
    oci_bind_by_name($qury, ':des', $AIR_PRESSURE);
    oci_execute($qury);
    echo "Save Done<br />";
}
?>
