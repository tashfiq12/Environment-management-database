<html>
<head>
<title>EMPLOYEE</title>
</head>
<body>

<?php
require_once("auth.php");
require_once("admin4.php");
?>

<div class="header">
       <h1 align="center">EMPLOYEE TABLE</h1>
  	
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

$stid = oci_parse($conn, 'SELECT EMP_ID,DEPT_CODE,DATE_OF_BIRTH,SALARY,JOINING_DATE,FIRST_NAME,LAST_NAME,ROUND((SYSDATE - DATE_OF_BIRTH)/365,0),E.ADDRESS.HOUSE_NO,E.ADDRESS.STREET_NO,E.ADDRESS.SECTOR_NO,E.ADDRESS.CITY,RELIGION,DESIGNATION,BLOOD_GROUP FROM EMPLOYEE E');
oci_execute($stid);

echo "<table align=center border=2>
<tr>
<th>EMP ID</th>
<th>DEPT CODE</th>
<th>BIRTHDAY</th>
<th>SALARY</th>
<th>JOINING DATE</th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>AGE</th>
<th>HOUSE NO</th>
<th>STREET NO</th>
<th>SECTOR NO</th>
<th>CITY</th>
<th>RELIGION</th>
<th>DESIGNATION</th>
<th>BLOOD GROUP</th>
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
    echo "<td>".$row[7]."</td>";
	echo "<td>".$row[8]."</td>";
    echo "<td>".$row[9]."</td>";
    echo "<td>".$row[10]."</td>";
	echo "<td>".$row[11]."</td>";
	echo "<td>".$row[12]."</td>";
    echo "<td>".$row[13]."</td>";
    echo "<td>".$row[14]."</td>";
	echo "</tr>";
}
oci_free_statement($stid);
oci_close($conn);

?>


