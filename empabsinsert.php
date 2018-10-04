<html>
<head>
<meta charset="UTF-8">
  <title>eMPLOYEE Insert</title>
  
  
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
       <h1 align="center">EMPLOYEE INSERT</h1>
  	
  </div>
<form action="empabssave.php" name="frmAdd" method="post">

<table align="center" width="100" border="1">
  <tr>
    <th width="91"> <div align="center">EMPLOYEE ID </div></th>
    <th width="98"> <div align="center">DEPT CODE </div></th>
	<th width="198"> <div align="center">BIRTHDAY </div></th>
    <th width="97"> <div align="center">SALARY </div></th>
	<th width="59"> <div align="center">JOINING DATE </div></th>
    <th width="91"> <div align="center">FIRST NAME </div></th>
	<th width="98"> <div align="center">LAST NAME </div></th>
    <th width="120"> <div align="center">HOUSE NO </div></th>
	<th width="150"> <div align="center">STREET NO </div></th>
    <th width="120"> <div align="center">SECTOR NO </div></th>
	<th width="150"> <div align="center">CITY </div></th>
    <th width="198"> <div align="center">RELIGION</div></th>
	<th width="97"> <div align="center">DESIGNATION </div></th>
    <th width="59"> <div align="center">BLOOD GROUP </div></th>
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="EMP_ID" size="5"></div></td>
    <td><div align="center"><input type="text" name="DEPT_CODE" size="10"></td>
	<td><div align="center"><input type="date" name="DATE_OF_BIRTH" size="5"></div></td>
    <td><div align="center"><input type="number" name="SALARY" size="10"></td>
	<td><div align="center"><input type="date" name="JOINING_DATE" size="5"></div></td>
    <td><div align="center"><input type="text" name="FIRST_NAME" size="10"></td>
	<td><div align="center"><input type="text" name="LAST_NAME" size="5"></div></td>
    <td><div align="center"><input type="number" name="HOUSE_NO" size="10"></td>
	<td><div align="center"><input type="number" name="STREET_NO" size="5"></div></td>
    <td><div align="center"><input type="text" name="SECTOR_NO" size="10"></td>
	<td><div align="center"><input type="text" name="CITY" size="5"></div></td>
    <td><div align="center"><input type="text" name="RELIGION" size="10"></td>
	<td><div align="center"><input type="text" name="DESIGNATION" size="5"></div></td>
    <td><div align="center"><input type="text" name="BLOOD_GROUP" size="10"></td>
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