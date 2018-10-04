<html>
<head>
<title>EMPLOYEE INSERT</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">EMPLOYEE INSERT</h1>
  	
  </div>
<form action="employeeinsave.php" name="frmAdd" method="post">

<table align="center" width="600" border="1">
  <tr>
    <th width="120"> <div align="center">EMPLOYEE ID </div></th>
    <th width="120"> <div align="center">DEPT CODE </div></th>
	<th width="120"> <div align="center">DATE OF BIRTH </div></th>
    <th width="120"> <div align="center">SALARY</div></th>
	<th width="120"> <div align="center">JOINING DATE</div></th>
    <th width="120"> <div align="center">FIRST NAME </div></th>
	<th width="120"> <div align="center">LAST NAME </div></th>
    <th width="120"> <div align="center">RELIGION </div></th>
	<th width="120"> <div align="center">DESIGNATION </div></th>
    <th width="120"> <div align="center">BLOOD GROUP </div></th>
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="eid" size="10"></div></td>
    <td><div align="center"><input type="text" name="code" size="10"></td>
	<td><div align="center"><input type="date" name="dob" size="10"></div></td>
    <td><div align="center"><input type="number" name="sal" size="10"></td>
	<td><div align="center"><input type="date" name="join_date" size="10"></div></td>
    <td><div align="center"><input type="text" name="first" size="10"></td>
	<td><div align="center"><input type="text" name="last" size="10"></div></td>
    <td><div align="center"><input type="text" name="rel" size="10"></td>
	<td><div align="center"><input type="text" name="des" size="10"></div></td>
    <td><div align="center"><input type="text" name="blood" size="10"></td>
  </tr>
  </table>
  <br>
  <div style="text-align:center;">
  <input type="submit" value=" submit" align="center" style="font-size:10pt;color:white;
background-color:black;border:1px solid #336600;padding:10px;<font color='#333'>margin-bottom:30px</font>">
	</div>
 <!-- <div align="center"><input type="submit" name="submit" value="submit"></div> -->
  
  </form>
</body>
</html>