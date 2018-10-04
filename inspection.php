<html>
<head>
<title>Inspection</title>
</head>
<body>

<?php
require_once("auth.php");
require_once("admin4.php");
?>

<div class="header">
       <h1 align="center">INSPECTION TABLE</h1>
  	
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

$stid = oci_parse($conn, 'SELECT * FROM INSPECTION');
oci_execute($stid);
echo "<table align=center border=2>
<tr>
<th>INSPECTION</th>
<th>INDUSTRY_REG_NO</th>
<th>INSPECTION_DATE</th>
<th>VIOLATION_CRITERIA</th>

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

