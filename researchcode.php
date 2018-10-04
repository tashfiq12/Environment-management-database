<?php

  $conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
   $db=oci_connect("anik4010", "1234", $conn);

	$ITEM_NO       =	  $_POST['ITEM'];
	$ITEM_NAME = 	  $_POST['NAME'];
	$INCHARGE_ID = 	  $_POST['INCHARGE'];
	$DEPT_CODE = 	  $_POST['DCODE'];
	
	$stmt= "INSERT INTO RESEARCH(ITEM_NO, ITEM_NAME,INCHARGE_ID,DEPT_CODE) VALUES (:ITEM_bv,:NAME_bv,:INCHARGE_bv,:DCODE_bv)";
    $s=oci_parse($db, $stmt);


 
oci_bind_by_name($s, "ITEM_bv", $ITEM_NO);
oci_bind_by_name($s, "NAME_bv", $ITEM_NAME);
oci_bind_by_name($s, ":INCHARGE_bv", $INCHARGE_ID);
oci_bind_by_name($s, ":DCODE_bv", $DEPT_CODE);
 


         oci_execute($s);
        echo "inserted<br>\n";
?>
