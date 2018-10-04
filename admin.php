<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
$db=oci_connect("anik4010", "1234", $conn);


?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style2.css">

  
</head>

<body>

  <div class="container">
  <h1 class="title">Admin View</h1>
  <ul>
    <li class="dropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="dropdown">Insertion</a>
      <ul class="dropdown-menu">
      
		<li><a href="employeeinsert.php" style="text-decoration: none">Insert in Employee</a></li>
		<li><a href="phoneinsert.php" style="text-decoration: none">Insert in Phone</a></li>
		<li><a href="itsectioninsert.php" style="text-decoration: none">Insert in It sec</a></li>
		<li><a href="yearlybasisinsert.php" style="text-decoration: none">Insert in Yearly Basis</a></li>
        
      </ul>
    </li>
    <li class="dropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="dropdown">Deletion</a>
      <ul class="dropdown-menu">
        
		<li><a href="employeemuldel.php" style="text-decoration: none">Delete From Employee</a></li>
		<li><a href="phonemuldel.php" style="text-decoration: none">Delete from Phone</a></li>
		<li><a href="itsectiondel.php" style="text-decoration: none">Delete From It Sec</a></li>
		<li><a href="yearlybasisdel.php" style="text-decoration: none">Delete from Yearly Basis</a></li>
        
      </ul>
    </li>
    <li class="dropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="dropdown">Update</a>
      <ul class="dropdown-menu">
        
		<li><a href="empupdate.php" style="text-decoration: none">Update Employee</a></li>
		<li><a href="phoneupdate.php" style="text-decoration: none">Update Phone</a></li>
		<li><a href="itsectionupdate.php" style="text-decoration: none">Update It Sec</a></li>
		<li><a href="yearlybasisupdate.php" style="text-decoration: none">Update Yearly Basis</a></li>
        
      </ul>
    </li>
	<li class="dropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="dropdown">Search</a>
      <ul class="dropdown-menu">
        
		<li><a href="employeepagesearch.php" style="text-decoration: none">Search in Employee</a></li>
		<li><a href="addresspagesearch.php" style="text-decoration: none">Search in Address</a></li>
		<li><a href="itsecsearch.php" style="text-decoration: none">Search in It Sec</a></li>
		<li><a href="yearlysearch.php" style="text-decoration: none">Search in Yearly Basis</a></li>
        
      </ul>
    </li>
	<li class="dropdown">
      <input type="checkbox" />
      <a href="logout.php" data-toggle="dropdown">Logout</a>
	</li>
  </ul>
</div>
  
  
</body>
</html>
