<html>
<head>
<meta charset="UTF-8">
  <title>Account section Insert</title>

</head>

<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>


<!--<a href="admin.php" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Home</a>-->
<div class="header">
       <h1 align="center">Account Section INSERT</h1>
  	
  </div>
<form action="accinsave.php" name="frmAdd" method="post">

<table align="center" width="600" border="1">
  <tr>
    <th width="91"> <div align="center">ACCOUNT SUB CODE </div></th>
    <th width="97"> <div align="center">RESPONSIBLE DEPT </div></th>
	<th width="91"> <div align="center">SALARY BUDGET</div></th>
    <th width="97"> <div align="center">LOSS & DAMAGE BUDGET </div></th>
	<th width="91"> <div align="center">EXTRA BUDGET</div></th>
    <th width="97"> <div align="center">LOSS & DAMAGE EXPENDITURE</div></th>
	<th width="91"> <div align="center">EXTRA EXPENDITURE</div></th>
    <th width="97"> <div align="center">YEAR </div></th>
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="ACC_CODE" size="5"></div></td>
    <td><div align="center"><input type="text" name="RESPONSIBLE_DEPT_CODE" size="10"></td>
	<td><div align="center"><input type="number" name="SALARY_BUDGET" size="5"></div></td>
    <td><div align="center"><input type="number" name="LOSS_DAM_BUD" size="10"></td>
	<td><div align="center"><input type="number" name="EXTRA_BUD" size="5"></div></td>
    <td><div align="center"><input type="number" name="LOSS_DAMG_EXP" size="10"></td>
	<td><div align="center"><input type="number" name="EXTRA_EXPEDITURE" size="5"></div></td>
    <td><div align="center"><input type="number" name="YEAR" size="10"></td>
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