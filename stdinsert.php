<html>
<head>
<meta charset="UTF-8">
  <title>Student Insert</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
body {
  color: #5D5F63;
  background: #fdfdfd;
  font-family: 'Open Sans', italic;
  padding: 50px;
  margin: 0;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
}
.sidebar-toggle {
  margin-left: -240px;
}
.sidebar {
  width: 180px;
  height: 100%;
  background: #834d29;
  position: absolute;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  z-index: 100;
}
.sidebar #leftside-navigation ul,
.sidebar #leftside-navigation ul ul {
  margin: -2px 0 0;
  padding: 0;
}
.sidebar #leftside-navigation ul li {
  list-style-type: none;
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}
.sidebar #leftside-navigation ul li.active > a {
  color: #1abc9c;
}
.sidebar #leftside-navigation ul li.active ul {
  display: block;
}
.sidebar #leftside-navigation ul li a {
  color: #aeb2b7;
  text-decoration: none;
  display: block;
  padding: 18px 0 18px 25px;
  font-size: 12px;
  outline: 0;
  -webkit-transition: all 200ms ease-in;
  -moz-transition: all 200ms ease-in;
  -o-transition: all 200ms ease-in;
  -ms-transition: all 200ms ease-in;
  transition: all 200ms ease-in;
}
.sidebar #leftside-navigation ul li a:hover {
  color: #1abc9c;
}
.sidebar #leftside-navigation ul li a span {
  display: inline-block;
}
.sidebar #leftside-navigation ul li a i {
  width: 20px;
}
.sidebar #leftside-navigation ul li a i .fa-angle-left,
.sidebar #leftside-navigation ul li a i .fa-angle-right {
  padding-top: 3px;
}
.sidebar #leftside-navigation ul ul {
  display: none;
}
.sidebar #leftside-navigation ul ul li {
  background: #23313f;
  margin-bottom: 0;
  margin-left: 0;
  margin-right: 0;
  border-bottom: none;
}
.sidebar #leftside-navigation ul ul li a {
  font-size: 12px;
  padding-top: 13px;
  padding-bottom: 13px;
  color: #aeb2b7;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <link rel="stylesheet" href="css/style2.css">

</head>

<body>
<a href="admin.php" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Home</a>
<div class="header">
       <h1 align="center">STUDENT INSERT</h1>
  	
  </div>
<form action="stdsave.php" name="frmAdd" method="post">

<table align="center" width="600" border="1">
  <tr>
    <th width="150"> <div align="center">ID</div></th>
    <th width="120"> <div align="center">NAME</div></th>
	<th width="150"> <div align="center">HOUSENO</div></th>
    <th width="120"> <div align="center">STREETNO</div></th>
	<th width="150"> <div align="center">CITY</div></th>
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="ID" size="5"></div></td>
    <td><div align="center"><input type="text" name="NAME" size="10"></td>
	<td><div align="center"><input type="text" name="HOUSENO" size="5"></div></td>
    <td><div align="center"><input type="text" name="STREETNO" size="10"></td>
	<td><div align="center"><input type="text" name="CITY" size="5"></div></td>
  </tr>
  </table>
  <div align="center"><input type="submit" name="submit" value="submit"></div>
  </form>
</body>
</html>