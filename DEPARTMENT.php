<?php
echo '<!DOCTYPE html>
<!DOCTYPE html>

<html>
<head>
	<title>Insertion</title>
</head>
<body>
  <div class="header">
       <h1>MAIN</h1>
  	
  </div>
   
   <form action="ms1.php"  method="POST">
   	<table>
   		<tr>
   		    <td>DEPARTMENT CODE</td>
   			<td><input type="text" name="CODE" class="textInput"></td>
   		</tr>
		<tr>
   		    <td>DEPARTMENT NAME</td>
   			<td><input type="text" name="NAME" class="textInput"></td>
   		</tr>
		<tr>
   		    <td>DIRECTOR</td>
   			<td><input type="text" name="DIR" class="textInput"></td>
   		</tr>
		<tr>
   		    <td>LOCATION</td>
   			<td><input type="text" name="LOC" class="textInput"></td>
   		</tr>
		 

   	 <tr>
         <td>Date of establish</td> 
        <td><input type="date" name="BD"></td>
      </tr>
	  <tr>
   		    <td>Hotline</td>
   			<td><input type="text" name="mail" class="textInput"></td>
   		</tr>


   		<tr>  
   			<td><input type="submit" name="ok" value="Insert"></td>
   		</tr>

   	</table>

   </form>

</body>
</html>'

?>
