<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$TASK_EXT      =	  $_POST['tsk'];
$DEPT_CODE = 	  $_POST['cod'];
$TASK_DATE      =	  date('d-m-Y', strtotime($_POST['tdob']));
$GUEST_MEMBER      =	  $_POST['mem'];


$sql     = "INSERT into IT_SEC(TASK_EXT,DEPT_CODE,TASK_DATE,GUEST_MEMBER ) VALUES(:ed,:dc,to_date('" . $TASK_DATE . "','dd-mm-yy'),:mm)";
$qury  = oci_parse($db,$sql);
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ed', $TASK_EXT);
    oci_bind_by_name($qury, ':dc', $DEPT_CODE );
    oci_bind_by_name($qury, ':mm', $GUEST_MEMBER );
    oci_execute($qury);
    echo "Save Done<br />";
}
?>
