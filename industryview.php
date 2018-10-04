



<html>
<head>
<title>INDUSTRY_VIEW</title>
</head>
<body>

<?php
require_once("admin4.php");
?>

<div class="header">
       <h1 align="center">INDUSTRY_VIEW</h1>
  	
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

$stid = oci_parse($conn, 'select *from INDUSTRY_VIEW');
oci_execute($stid);

echo "<table align=center border=2>
<tr>

<th> ITEM_NAME</th>
<th> DEVELOPMENT_PROJECT_NAME</th>
<th>REGION</th>

</tr>";

while (($row = oci_fetch_array($stid)) != false) {
	
    echo "<tr>";
	echo "<td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[2]."</td>";
	echo "</tr>";
}
oci_free_statement($stid);
oci_close($conn);

?>



