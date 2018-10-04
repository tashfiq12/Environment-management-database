
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
       <h1>INSPECTOR INSERT</h1>
  	
  </div>
<form action="INSPECTOR_SAVE.php" name="frmAdd" method="post">

<table align="center" width="600" border="1">
<!--<table align="center" width="600" style="text-align:center;border-collapse:collapse;background-color:black;">-->
  <tr>
    <th width="120"> <div align="center">EMPLOYEE ID</div></th>
	<th width="120"> <div align="center">INSPECTION START DATE</div></th>
	<th width="120"> <div align="center">RESPONSIBLE AREA</div></th>
    <th width="120"> <div align="center">RESPONSIBILITY</div></th>

  </tr>
  <tr>
    <td><div align="center"><input type="text" name="id" size="10"></div></td>
    <td><div align="center"><input type="date" name="dt" size="10"></td>
	<td><div align="center"><input type="text" name="rg" size="10"></td>
    <td><div align="center"><input type="text" name="res" size="10"></td>



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