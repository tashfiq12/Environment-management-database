<?php

$conn = oci_connect('anik4010', '1234', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT SALARY_BUDGET,LOSS_DAM_BUD,EXTRA_BUD from ACCOUNT_SEC');
oci_execute($stid);

$stid1 = oci_parse($conn, 'begin myproc(:p1, :p2, :p3, :p4); end;');
oci_bind_by_name($stid1, ':p1', $p1);
oci_bind_by_name($stid1, ':p2', $p2);
oci_bind_by_name($stid1, ':p3', $p3);
oci_bind_by_name($stid1, ':p4', $p4, 40);
oci_execute($stid1);



echo "<table align=center border=2>
<tr>

<th>SALARY BUDGET</th>
<th> LOSS & DAM BUDGET</th>
<th>EXTRA BUDGET</th>
<th>TOTAL BUDGET</th>


</tr>";
while (($row = oci_fetch_array($stid)) != false) {
	
    
	echo "<tr>";
	echo "<td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[2]."</td>";
	//echo "<td>".$row[3]."</td>";
	//echo "<td>".$row[4]."</td>";
	//echo "<td>".$row[5]."</td>";

	
 
	echo "</tr>";
	$P1=$row[0] ;
	$p2=$row[1] ;
	$p3=$row[2] ;
	print "$p4\n";
}
//oci_free_statement($stid);





//$p1 = 8;


//print "$p2\n";   // prints 16

/*oci_free_statement($stid1);
oci_close($conn);*/

?>