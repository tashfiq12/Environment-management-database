<?php
echo '<!DOCTYPE html>
<!DOCTYPE html>

<html>
<head>
	<title>Insertion</title>
</head>
<body>
  <div class="header">
       <h1>RESEARCH</h1>
  	
  </div>
   
   <form action="researchcode.php"  method="POST">
   	<table>
   		<tr>
   		    <td>ITEM NO</td>
   			<td><input type="text" name="ITEM" class="textInput"></td>
   		</tr>
		<tr>
   		    <td>ITEM NAME</td>
   			<td><input type="text" name="NAME" class="textInput"></td>
   		</tr>
		<tr>
   		    <td>INCHARGE ID</td>
   			<td><input type="text" name="INCHARGE" class="textInput"></td>
   		</tr>
		<tr>
   		    <td>DEPT CODE</td>
   			<td><input type="text" name="DCODE" class="textInput"></td>
   		</tr>


   		<tr>  
   			<td><input type="submit" name="ok" value="Insert"></td>
   		</tr>

   	</table>

   </form>

</body>
</html>'

?>
