<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
$db=oci_connect("anik4010", "1234", $conn);


?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Zigzag dropdown menu concept</title>
  
  
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      /* Clearing floats */
.cf:before,
.cf:after {
  content: " ";
  display: table;
}

.cf:after {
  clear: both;
}

.cf {
  *zoom: 1;
}

/* Mini reset, no margins, paddings or bullets */
.menu,
.submenu {
  margin: 0;
  padding: 0;
  list-style: none;
}

/* Main level */
.menu {			
  margin: 50px auto;
  width: 800px;
  /* http://www.red-team-design.com/horizontal-centering-using-css-fit-content-value */
  width: -moz-fit-content;
  width: -webkit-fit-content;
  width: fit-content;	
}

.menu > li {
  background: #34495e;
  float: left;
  position: relative;
  transform: skewX(25deg);
}

.menu a {
  display: block;
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  font-family: Arial, Helvetica;
  font-size: 14px;
}		

.menu li:hover {
  background: #e74c3c;
}		

.menu > li > a {
  transform: skewX(-25deg);
  padding: 1em 2em;
}

/* Dropdown */
.submenu {
  position: absolute;
  width: 280px;
  left: 50%; margin-left: -100px;
  transform: skewX(-25deg);
  transform-origin: left top;
}

.submenu li {
  background-color: #34495e;
  position: relative;
  overflow: hidden;		
}						

.submenu > li > a {
  padding: 1em 2em;			
}

.submenu > li::after {
  content: '';
  position: absolute;
  top: -125%;
  height: 100%;
  width: 100%;			
  box-shadow: 0 0 50px rgba(0, 0, 0, .9);			
}		

/* Odd stuff */
.submenu > li:nth-child(odd){
  transform: skewX(-25deg) translateX(0);
}

.submenu > li:nth-child(odd) > a {
  transform: skewX(25deg);
}

.submenu > li:nth-child(odd)::after {
  right: -50%;
  transform: skewX(-25deg) rotate(3deg);
}				

/* Even stuff */
.submenu > li:nth-child(even){
  transform: skewX(25deg) translateX(0);
}

.submenu > li:nth-child(even) > a {
  transform: skewX(-25deg);
}

.submenu > li:nth-child(even)::after {
  left: -50%;
  transform: skewX(25deg) rotate(3deg);
}

/* Show dropdown */
.submenu,
.submenu li {
  opacity: 0;
  visibility: hidden;			
}

.submenu li {
  transition: .2s ease transform;
}

.menu > li:hover .submenu,
.menu > li:hover .submenu li {
  opacity: 1;
  visibility: visible;
}		

.menu > li:hover .submenu li:nth-child(even){
  transform: skewX(25deg) translateX(15px);			
}

.menu > li:hover .submenu li:nth-child(odd){
  transform: skewX(-25deg) translateX(-15px);			
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <ul class="menu cf">
  <li><a href="admin3.php">Home</a></li>
  <li>
    <a href="">Insertion</a>
    <ul class="submenu">
      <li><a href="empabsinsert.php">Employee Table</a></li>
      <li><a href="phoneinsert.php">Phone Table</a></li>
      <li><a href="itsectioninsert.php">It Section Table</a></li>
      <li><a href="yearlybasisinsert.php">Yearly Basis Table</a></li>
	  <li><a href="accountinsert.php">Insert in Account</a></li>
	  <li><a href="RESEARCH_INSERT.php">Insert in Research</a></li>
	  <li><a href="RES_PROJ_INSERT.php">Insert in RESEARCH PROJECT</a></li>
	  <li><a href="DEV_PROJ_INSERT.php">Insert in DEVELOPMENT PROJECT</a></li>
	  <li><a href="DRIVER_INSERT.php">Insert in Driver</a></li>
	  <li><a href="REG_INDUS_INSERT.php">Insert in Regional Industries</a></li>
	  <li><a href="INSPECTOR_INSERT.php">Insert in Inspector</a></li>
	  <li><a href="INSPECTION_INSERT.php">Insert in Inspection</a></li>
	  <li><a href="LAW_DEPT_INSERT.php">Insert in Law Department</a></li>
	  <li><a href="RESPONSIBLE_VEHICLES_INSERT.php">Insert in Responsible Vehicles</a></li>
	  <li><a href="SECURITY_INSERT.php">Insert in Security</a></li>
	  <li><a href="mobilecourtinsert.php">Insert in Mobile Court</a></li>
	  <li><a href="pollevelinsert.php">Insert in Pollution Level Checker</a></li>
    </ul>			
  </li>
  <li>
    <a href="">Deletion</a>
    <ul class="submenu">
      <li><a href="employeemuldel.php">Delete from Employee</a></li>
      <li><a href="phonemuldel.php">Delete from Phone</a></li>
      <li><a href="itsectiondel.php">Delete from It_sec</a></li>
      <li><a href="yearlybasisdel.php">Delete from Yearly Basis</a></li>
	  <li><a href="accdel.php">Delete From Account</a></li>
	  <li><a href="accidentdel.php">Delete From Accident</a></li>
      <li><a href="devdel.php">delete From Development Project</a></li>
	  <li><a href="driverdel.php">Delete From Driver</a></li>
	  <li><a href="inspectiondel.php">Delete From Inspection</a></li>
	  <li><a href="lawdel.php">Delete From Law Department</a></li>
	  <li><a href="regindusdel.php">delete From Regional Industries</a></li>
	  <li><a href="researchdel.php">Delete From R & D</a></li>
	  <li><a href="resprodel.php">Delete From Research Project</a></li>
	  <li><a href="resvehidel.php">Delete From Responsible Vehicles</a></li>
	  <li><a href="securitydel.php">Delete From Security</a></li>
	  
	  <li><a href="mobiledel.php">Delete From Mobile Court</a></li>
	  <li><a href="polleveldel.php">Delete From Pollution level Checker</a></li>
    </ul>			
  </li>
  <li>
    <a href="">Update</a>
    <ul class="submenu">
      <li><a href="DEPARTMENT_UPDATE.php">Update Department</a></li>
	  <li><a href="empupdate.php">Update Employee</a></li>
      <li><a href="phoneupdate.php">Update Phone</a></li>
      <li><a href="itsectionupdate.php">Update It Section</a></li>
      <li><a href="yearlybasisupdate.php">Update Yearly Basis</a></li>
	  <li><a href="accountupdate.php">Update Account</a></li>
	  <li><a href="dri1.php">Update Driver</a></li>
	  <li><a href="INSPECTOR_UPDATE.php">Update iNSPECTOR</a></li>
	  <li><a href="regi.php">Update Regional Industry</a></li>
	  <li><a href="res1.php">Update Responsible Vehicles</a></li>
	  <li><a href="SECURITY_UPDATE.php">Update Security</a></li>
	
    </ul>			
  </li>
  <li>
    <a href="">Search</a>
    <ul class="submenu">
      <li><a href="employeepagesearch.php">Seach in Employee</a></li>
      <li><a href="addresspagesearch.php">Search in Phone</a></li>
      <li><a href="itsecsearch.php">Search in It Section</a></li>
      <li><a href="yearlysearch.php">search in Yearly Basis</a></li>
    </ul>			
  </li>
  <li>
    <a href="">Show</a>
    <ul class="submenu">
      <li><a href="deptshow.php">DEPARTMENT Table</a></li>
	  <li><a href="employeeshow.php">Employee Table</a></li>
      <li><a href="tourism.php">Tourism Table</a></li>
      <li><a href="attraction.php">Attraction Table</a></li>
      <li><a href="inspection.php">Inspection Table</a></li>
	  <li><a href="ACCIDENT.php">Accident Table</a></li>
	  <li><a href="animal.php">Animals Table</a></li>
	  <li><a href="DEV_PROJECT.php">Development Table</a></li>
	  <li><a href="DRIVER.php">Driver Table</a></li>
	  <li><a href="ENFORCESSHOW.php">Enforces Table</a></li>
	  <li><a href="Forest.php">Forest Table</a></li>
	  <li><a href="fossil_fuel.php">Fossil_fuel Table</a></li>
	  <li><a href="LAWSHOW.php">LAW Table</a></li>
	  <li><a href="phoneshow.php">Phone Table</a></li>
	  <li><a href="POLLUTIONSHOW.php">POLLUTION Table</a></li>
	  <li><a href="PUNISHMENT.php">PUNISHMENT Table</a></li>
	  <li><a href="REGIONAL_INDUSTRIES.php">REGIONAL INDUSTRIES Table</a></li>
	  <li><a href="RESEARCHSHOW.php">RESPONSIBLE VEHICLES Table</a></li>
	  <li><a href="RESSHOW.php">RESEARCH PROJECT Table</a></li>
	  <li><a href="RESULTSHOW.php">RESULT Table</a></li>
	  <li><a href="SECURITYSHOW.php">SECURITY Table</a></li>
	  <li><a href="climateresshow.php">Climate Table</a></li>
	  
    </ul>			
  </li>
  <li>
    <a href="">Query</a>
    <ul class="submenu">
      
    <li><a href="sh1.php">Employee Birthday</a></li>
	<li><a href="sh3.php">Tourist Attraction</a></li>
	<li><a href="sh4.php">Animal Info</a></li>
	<li><a href="sh5.php">Employee Salary & Tax</a></li>
	<li><a href="sh6.php">Employee Phone No</a></li>
	<li><a href="sh7.php">Employee Having salary low than average</a></li>
	<li><a href="sh8.php">Security Guard Salary</a></li>
	<li><a href="sh9.php">Regional Rainfall</a></li>
	<li><a href="sh10.php">Development Project Duration</a></li>
	<li><a href="sh11.php">RESEHULED DEV PROJECT TIME</a></li>
	<li><a href="sh12.php">Rating Wise Pay Amount</a></li>
	<li><a href="sh13.php">Changed Employee Id Format</a></li>
	<li><a href="sh14.php">Research & Dev Project Incharge</a></li>
	<li><a href="sh16.php">District Wise Area & Animal</a></li>
	<li><a href="sh18.php">Region Wise Attraction</a></li>
	<li><a href="sh19.php">Grameenphone User</a></li>
	<li><a href="sh20.php">Region Wise Project Duration</a></li>
	<li><a href="sh21.php">Security Guard Info</a></li>
	<li><a href="sh22.php">Forest Resource</a></li>
	<li><a href="sh24.php">Query On Temparature</a></li>
	<li><a href="sh26.php">Inspector Inspects Industry</a></li>
	<li><a href="sh27.php">Employee With Negative Blood</a></li>
	<li><a href="sh28.php">Budget,Expenditure & Department</a></li>
	<li><a href="sh29.php">Employee Serveing Year</a></li>
	<li><a href="sh30.php">Department wise minimum salary</a></li>
	<li><a href="sh31.php">Industry Suspension</a></li>
    <li><a href="Accident_view.php">Accident View</a></li>
	<li><a href="forestanimal.php">Forest Animal View</a></li>
	<li><a href="industryview.php">Industry View</a></li>
	<li><a href="LAWVIEW.php">Law View</a></li>
	<li><a href="PunishmentLIST.php">Punishment List view</a></li>
	<li><a href="tourguideview.php">Tourguide view</a></li>
	<li><a href="employeemuldel.php">Employee Delete Trigger</a></li>
	<li><a href="regtrigger.php">Regional Industries Update Trigger</a></li>
	<li><a href="accountupdate.php">Account Extra Expenditure update Trigger</a></li>	
	 
    </ul>			
  </li>
  
  
  <li><a href="logout.php">Logout</a></li>
</ul>
  
    <script src="js/index.js"></script>

</body>
</html>
