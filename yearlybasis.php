<?php

$con = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$conn = oci_connect("anik4010","1234",$con);

//$conn=OCILogon('anik4010', '1234','localhost/orcl' );
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * from Yearly_Basis');
oci_execute($stid);
echo "<table border=2>
<tr>
<th>EVALUATION_NO</th>
<th>REGEION</th>
<th>YEAR</th>
<th>Rainfall</th>
<th>TEMPARATURE</th>
<th>HUMIDITY</th>
<th>AIR_PRESSURE</th>

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
	//echo "<td>".$row[7]."</td>";
	echo "</tr>";
}
oci_free_statement($stid);
oci_close($conn);

?>
