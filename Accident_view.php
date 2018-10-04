<html>
<head>
<title>ACCIDENT OCCURED VIEW</title>
</head>
<body>

<?php
require_once("admin4.php");
?>

<div class="header">
       <h1 align="center">ACCIDENT_OCCURED SEARCH</h1>
  	
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

$stid = oci_parse($conn, 'SELECT * FROM ACCIDENT_OCCURED');
oci_execute($stid);

echo "<table align=center border=2>
<tr>
<th>EMP ID</th>
<th>EMPLOYEE NAME</th>
<th>ACCIDENT PLACE</th>
<th>ACCIDENT DATE </th>

</tr>";
while (($row = oci_fetch_array($stid)) != false) {
	
    echo "<tr>";
	echo "<td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
	echo "</tr>";
}
oci_free_statement($stid);
oci_close($conn);

?>





