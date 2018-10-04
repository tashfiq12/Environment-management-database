<html>
<head>
<title> EMPLOYEE HISTORY</title>
</head>
<body>

<?php
require_once("auth.php");
require_once("admin4.php");
?>

<div class="header">
       <h1 align="center"> EMPLOYEE HISTORY INFO</h1>
  	
  </div>
</body>
</html>
<?php

$con = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$conn=oci_connect("anik4010", "1234", $con);
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * from  EMPLOYEE_HISTORY_TABLE');
oci_execute($stid);

echo "<table align=center border=2>
<tr>
<th>EMP_ID</th>
<th>DEPT_CODE</th>
<th>JOINING_DATE</th>
<th>FIRST_NAME</th>
<th>LAST_NAME</th>
<th>DESIGNATION</th>
<th>BLOOD_GROUP</th>




</tr>";
while (($row = oci_fetch_array($stid)) != false) {
	
    echo "<tr>";
	echo "<td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[2]."</td>";
	echo "<td>".$row[3]."</td>";
	echo "<td>".$row[4]."</td>";
	echo "<td>".$row[5]."</td>";
	echo "<td>".$row[6]."</td>";
	

	
   
	 
	echo "</tr>";
}
oci_free_statement($stid);
oci_close($conn);

?>



