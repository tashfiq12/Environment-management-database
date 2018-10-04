<html>
<head>
<title>YEARLY BASIS INSERT</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div class="header">
       <h1 align="center">YEARLY BASIS INSERT</h1>
  	
  </div>
<form action="yearlybasisinsave.php" name="frmAdd" method="post">

<table align="center" width="600" border="1">
  <tr>
    <th width="120"> <div align="center">EVALUATION NO </div></th>
    <th width="120"> <div align="center">REGION </div></th>
	<th width="120"> <div align="center">YEAR  </div></th>
    <th width="120"> <div align="center">RAINFALL</div></th>
	<th width="120"> <div align="center">TEMPARATURE</div></th>
    <th width="120"> <div align="center">HUMIDITY </div></th>
	<th width="120"> <div align="center">AIR_PRESSURE </div></th>

  </tr>
  <tr>
    <td><div align="center"><input type="text" name="eid" size="10"></div></td>
    <td><div align="center"><input type="text" name="code" size="10"></td>
    <td><div align="center"><input type="number" name="sal" size="10"></td>
    <td><div align="center"><input type="float" name="fall" size="10"></td>
	<td><div align="center"><input type="number" name="temp" size="10"></div></td>
    <td><div align="center"><input type="float" name="rel" size="10"></td>
	<td><div align="center"><input type="number" name="des" size="10"></div></td>

  </tr>
  </table>
 <!-- <input type="submit" name="submit" value="submit">-->
  <br>
  <div style="text-align:center;">
  <input type="submit" value=" submit" align="center" style="font-size:10pt;color:white;
background-color:black;border:1px solid #336600;padding:10px;<font color='#333'>margin-bottom:30px</font>">
	</div>
  </form>
</body>
</html>