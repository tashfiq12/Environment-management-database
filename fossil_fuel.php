<html>
<head>
<title> Fossil Fuel</title>
</head>
<body>

<?php
require_once("auth.php");
require_once("admin4.php");
?>

<div class="header">
       <h1 align="center">Fossil Fuel TABLE</h1>
  	
  </div>
</body>
</html>




<?php

$con = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$conn=oci_connect("anik4010", "1234", $con);
//$conn=OCILogon('practice', 'mahmud123','localhost/orcl' );
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * From FOSSIL_FUEL');
oci_execute($stid);
echo "<table align=center border=2>
<tr>
<th>SUBSECTION_ID</th>
<th>F_FUEL_EXT_ID</th>
<th>FF_REGION</th>
<th>F_FUEL_TYPE</th>
<th>PRI_FUEL</th>
<th>PRI_FUEL_AMOUNT</th>
<th>F_RESOURCE_TYPE</th>
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
