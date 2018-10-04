<html>
<head>
<meta charset="UTF-8">
  <title>Phone Insert</title>
  
  
  <!--<link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
body {
  color: #5D5F63;
  background: #fdfdfd;
  font-family: 'Open Sans', italic;
  padding: 100px;
  margin: 0;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
}


    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <link rel="stylesheet" href="css/style2.css">-->

</head>

<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>


<!--<a href="admin.php" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Home</a>-->
<div class="header">
       <h1 align="center">PHONE INSERT</h1>
  	
  </div>
<form action="phoneinsave.php" name="frmAdd" method="post">

<table align="center" width="600" border="1">
  <tr>
    <th width="150"> <div align="center">EMPLOYEE ID </div></th>
    <th width="120"> <div align="center">MOBILE NO </div></th>
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="EMP_ID" size="5"></div></td>
    <td><div align="center"><input type="text" name="MOBILE_NO" size="10"></td>
  </tr>
  </table>
  <!--<div align="center"><input type="submit" name="submit" value="submit"></div>-->
  <br>
  <div style="text-align:center;">
  <input type="submit" value=" submit" align="center" style="font-size:10pt;color:white;
background-color:black;border:1px solid #336600;padding:10px;<font color='#333'>margin-bottom:30px</font>">
	</div>
  </form>
</body>
</html>