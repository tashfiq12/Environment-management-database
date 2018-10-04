<?php
ob_start()
?>
<html>
<head>
<title>ThaiCreate.Com PHP & Authentication</title>
</head>
<body>
<?php
   function fncAuthentication() {
      header('WWW-Authenticate: Basic realm="localhost"');
      header("HTTP/1.0 401 Unauthorized");
      exit;
   }

   if (trim($_SERVER['PHP_AUTH_USER'])=="" or trim($_SERVER['PHP_AUTH_PW']) == "") {
      fncAuthentication();
   } else {

		echo "<br>User : ".$_SERVER["PHP_AUTH_USER"];
		echo "<br>Password : ".$_SERVER["PHP_AUTH_PW"];
   }

?>
</body>
</html>