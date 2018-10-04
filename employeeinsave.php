<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$EMP_ID       =	  $_POST['eid'];
$DEPT_CODE = 	  $_POST['code'];
$MDATE1 = date('d-m-Y', strtotime($_POST['dob']));
$Salary       =	  $_POST['sal'];
$Join_date       =	  date('d-m-Y', strtotime($_POST['join_date']));
$First       =	  $_POST['first'];
$Last = 	  $_POST['last'];
$Relegion = 	  $_POST['rel'];
$Designation = 	  $_POST['des'];
$Blood_group = 	  $_POST['blood'];

$sql     = "INSERT into Employee(EMP_ID,DEPT_CODE, DATE_OF_BIRTH,JOINING_DATE, SALARY,FIRST_NAME,LAST_NAME,RELIGION,DESIGNATION,BLOOD_GROUP )
VALUES(:ed,:dc,to_date('" . $MDATE1 . "','dd-mm-yy'),to_date('" . $Join_date . "','dd-mm-yy'),:sal,:fi,:la,:rel,:des,:blo)";
$qury  = oci_parse($db,$sql);
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ed', $EMP_ID);
    oci_bind_by_name($qury, ':dc', $DEPT_CODE );
    oci_bind_by_name($qury, ':sal', $Salary );
    oci_bind_by_name($qury, ':fi', $First);
    oci_bind_by_name($qury, ':la', $Last);
   
    oci_bind_by_name($qury, ':rel', $Relegion );
    oci_bind_by_name($qury, ':des', $Designation);
    oci_bind_by_name($qury, ':blo', $Blood_group);
    oci_execute($qury);
    echo "Save Done<br />";
}
?>
<html>
<head>
</head>
<body>
<br>
<?php
echo "Update Child Tables";
?>
<form>
<input type="button" value="show" 
onclick="window.location.href='employeemuldel.php'" />

</form>
<br>
<?php
echo "Wrong Submit!!? Want to Submit again?";
?>
<form>
<input type="button" value="submit again" 
onclick="window.location.href='employeeinsert.php'" />
</form>
</body>
</html>
