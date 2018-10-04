<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
$db=oci_connect("anik4010", "1234", $conn);


?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Accordion Menu</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
body {
  color: #5D5F63;
  background: #293949;
  font-family: 'Open Sans', sans-serif;
  padding: 0;
  margin: 0;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
}
.sidebar-toggle {
  margin-left: -240px;
}
.sidebar {
  width: 240px;
  height: 100%;
  background: #293949;
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

</head>

<body>
  <aside class="sidebar">
  <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
      <li>
        <a href="admin2.php"><i class="fa fa-home"></i><span>Home</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-plus"></i><span>Insertion</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>

          <li><a href="extra.php">phoneinsert</a>
          </li>
          <li><a href="ui-panels.html">Panels</a>
          </li>
          <li><a href="ui-buttons.html">Buttons</a>
          </li>
          <li><a href="ui-slider-progress.html">Sliders &amp; Progress</a>
          </li>
          <li><a href="ui-modals-popups.html">Modals &amp; Popups</a>
          </li>
          <li><a href="ui-icons.html">Icons</a>
          </li>
          <li><a href="ui-grid.html">Grid</a>
          </li>
          <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
          </li>
          <li><a href="ui-nestable-list.html">Nestable Lists</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-trash-o"></i><span>Deletion</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="tables-basic.html">Basic Tables</a>
          </li>

          <li><a href="tables-data.html">Data Tables</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-refresh"></i><span>Update</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="forms-components.html">Components</a>
          </li>
          <li><a href="forms-validation.html">Validation</a>
          </li>
          <li><a href="forms-mask.html">Mask</a>
          </li>
          <li><a href="forms-wizard.html">Wizard</a>
          </li>
          <li><a href="forms-multiple-file.html">Multiple File Upload</a>
          </li>
          <li><a href="forms-wysiwyg.html">WYSIWYG Editor</a>
          </li>
        </ul>
      </li>
      
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-search"></i><span>Search</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="charts-chartjs.html">Chartjs</a>
          </li>
          <li><a href="charts-morris.html">Morris</a>
          </li>
          <li><a href="charts-c3.html">C3 Charts</a></li>
        </ul>
      </li>
      
      <li class="sub-menu">
        <a href="logout.php"><i class="fa fa-sign-out"></i><span>Signout</span></a>
      </li>
      
      </li>
    </ul>
  </div>
</aside>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
