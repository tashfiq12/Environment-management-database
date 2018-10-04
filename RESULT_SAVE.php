<?php
$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$db=oci_connect("anik4010", "1234", $conn);

$EMP_ID = $_POST['id'];

$SSC_PASS_YEAR = $_POST['sscy'];
$SSC_GPA = $_POST['sscg'];

$HSC_PASS_YEAR = $_POST['hscy'];
$HSC_GPA = $_POST['hscg'];

$HON_PASS_YEAR = $_POST['hony'];
$HON_GPA = $_POST['hong'];


$sql     = "INSERT into RESULT(EMP_ID,SSC_PASS_YEAR,SSC_GPA,HSC_PASS_YEAR,HSC_GPA,HON_PASS_YEAR,HON_GPA)VALUES(:ab,:cd,:ef,:gh,:ij,:kl,:mn)";
$qury  = oci_parse($db,$sql);                                                                
if(!$qury)
    echo oci_error();
else
{
    oci_bind_by_name($qury, ':ab', $EMP_ID);
    oci_bind_by_name($qury, ':ef', $SSC_GPA);
    oci_bind_by_name($qury, ':cd', $SSC_PASS_YEAR);
    oci_bind_by_name($qury, ':ij', $HSC_GPA);
    oci_bind_by_name($qury, ':gh', $HSC_PASS_YEAR);
    oci_bind_by_name($qury, ':mn', $HON_GPA);
	oci_bind_by_name($qury, ':kl', $HON_PASS_YEAR);
    

    oci_execute($qury);
    echo "Save Done<br />";
}
?>

