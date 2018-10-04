<html>
<head>
<title> REGIONAL HISTORY</title>
</head>
<body>

<?php
require_once("auth.php");
require_once("admin4.php");
?>

<div class="header">
       <h1 align="center"> REGIONAL HISTORY INFO</h1>
  	
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

$stid = oci_parse($conn, 'SELECT * from  REGIONAL_HISTORY_INDUSTRIES');
oci_execute($stid);

echo "<table align=center border=2>
<tr>
<th>INDUSTRY_REG_NO</th>
<th>DATE_OF_LAST_INSPECT</th>
<th>LAST_PUNISHMENT_DATE</th>
<th>INSDUSTRY_NAME</th>
<th>ADDRESS</th>
<th>POLLUTION_LEVEL</th>



</tr>";
while (($row = oci_fetch_array($stid)) != false) {
	
    echo "<tr>";
	echo "<td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[2]."</td>";
	echo "<td>".$row[3]."</td>";
	echo "<td>".$row[4]."</td>";
	echo "<td>".$row[5]."</td>";
	

	
   
	 
	echo "</tr>";
}
oci_free_statement($stid);
oci_close($conn);

?>



