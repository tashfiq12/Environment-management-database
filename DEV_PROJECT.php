



<html>
<head>
<title> DEV_PROJECT</title>
</head>
<body>

<?php
require_once("auth.php");
require_once("admin4.php");
?>

<div class="header">
       <h1 align="center">DEVELOPMENT TABLE</h1>
  	
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

$stid = oci_parse($conn, 'SELECT * from  DEV_PROJECT');
oci_execute($stid);

echo "<table align=center border=2>
<tr>

<th> ITEM_NO</th>
<th>  D_PROJECT_NO</th>
<th> D_PROJECT_NAME</th>
<th>REGION</th>
<th>START_DATE</th>
<th>ENDING_DATE</th>



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



