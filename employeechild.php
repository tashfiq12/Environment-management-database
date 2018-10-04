<html>
<head>

<title>INSPECTOR INSERT</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div style="text-align:center" class="header">
       <h1>RESULT INSERT</h1>
  	
  </div>
<form action="employeechildsave.php" name="frmAdd" method="post">

<table align="center" width="600" border="1">
<!--<table align="center" width="600" style="text-align:center;border-collapse:collapse;background-color:black;">-->
  <tr>
    <th width="120"> <div align="center">EMPLOYEE ID</div></th>
	
	<th width="120"> <div align="center">SSC PASSING YEAR</div></th>
	<th width="120"> <div align="center">SSC GPA</div></th>
   
    <th width="120"> <div align="center">HSC PASSING YEAR</div></th>
	 <th width="120"> <div align="center">HSC GPA</div></th>
    
    <th width="120"> <div align="center">HONOURS PASSING YEAR</div></th>
	<th width="120"> <div align="center">HONOURS GPA</div></th>

  </tr>
  
	<tr>
    <td><div align="center"><input type="text" name="EMP_ID" size="5"></div></td>
    <td><div align="center"><input type="text" name="SSC_PASS_YEAR" size="10"></td>
    <td><div align="center"><input type="text" name="SSC_GPA" size="5"></div></td>
    <td><div align="center"><input type="text" name="HSC_PASS_YEAR" size="10"></td>
	<td><div align="center"><input type="text" name="HSC_GPA" size="10"></td>
    <td><div align="center"><input type="text" name="HON_PASS_YEAR" size="5"></div></td>
    <td><div align="center"><input type="text" name="HON_GPA" size="10"></td>
  </tr>
  
  </table>
  
  <div class="header">
       <h1 align="center">PHONE INSERT</h1>
  	
  </div>
<!--<form action="phoneinsave.php" name="frmAdd" method="post">-->

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
  
  
  <!--<input type="submit" name="submit" value="submit">-->
  <br>
  <div style="text-align:center;">
  <input type="submit" value=" submit" align="center" style="font-size:10pt;color:white;
background-color:black;border:1px solid #336600;padding:10px;<font color='#333'>margin-bottom:30px</font>">
	</div>
  </form>
</body>
</html>