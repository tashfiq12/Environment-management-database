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
  <h1 class="title">User View</h1>
  <ul>
    <li class="dropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="dropdown">Query</a>
      <ul class="dropdown-menu">
      
		<li><a href="show2.php" style="text-decoration: none">show1</a></li>
		<li><a href="show4.php" style="text-decoration: none">show2</a></li>
		<li><a href="climateresshow.php" style="text-decoration: none">Climate result show</a></li>
        
      </ul>
    </li>
	<li class="dropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="dropdown">Address</a>
      <ul class="dropdown-menu">
      
		<li><a href="addresssearch.php" style="text-decoration: none">Address</a></li>
		<li><a href="show4.php" style="text-decoration: none">show2</a></li>
        
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
