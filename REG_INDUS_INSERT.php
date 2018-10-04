
<html>
<head>

<title>REGIONAL INDUSTRIES INSERT</title>
</head>
<body>
<?php
require_once("auth.php");
require_once("admin4.php");
?>
<div style="text-align:center" class="header">
       <h1>REGIONAL INDUSTRIES INSERT</h1>
  	
  </div>
<form action="REG_INDUS_SAVE.php" name="frmAdd" method="post">

<table align="center" width="600" border="1">
<!--<table align="center" width="600" style="text-align:center;border-collapse:collapse;background-color:black;">-->
  <tr>
    <th width="120"> <div align="center">INDUSTRY REGISTRATION NO</div></th>
	<th width="120"> <div align="center">DATE OF LAST INSPECTION</div></th>
	<th width="120"> <div align="center">LAST PUNISHMENT DATE</div></th>

	<th width="120"> <div align="center">INDUSTRY NAME</div></th>
    <th width="120"> <div align="center">ADDRESS</div></th>
	<th width="120"> <div align="center">POLLUTION LEVEL</div></th>


  </tr>
  <tr>
    <td><div align="center"><input type="text" name="aw" size="10"></div></td>
    <td><div align="center"><input type="date" name="dt1" size="10"></td>
	<td><div align="center"><input type="date" name="dt2" size="10"></td>
	<td><div align="center"><input type="text" name="bw" size="10"></td>
    <td><div align="center"><input type="text" name="cw" size="10"></td>
	<td><div align="center"><input type="text" name="dw" size="10"></td>




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