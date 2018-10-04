<?php

$conn = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
$db=oci_connect("anik4010", "1234", $conn);


?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Environment Department</title>
  
  
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='http://puertokhalid.com/up/demos/puerto-Mega_Menu/css/normalize.css'>

     <!-- <link rel="stylesheet" href="css/style4.css"> -->
	  
	  <style>
	  
	  body { 
	background: #EEE;
	<!--background: url(http://newjobs24.info/wp-content/uploads/2017/04/Department-Of-Environment-logo.jpg) 50% 50%/cover;-->
	overflow-x:hidden;
}
.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}
.clearfix {
    *zoom: 1;
}

.container {
    position: relative;
    margin: 0px auto;
    padding: 50px 0;
    clear: both;
}
@media only screen and (min-width: 1200px) {
    .container {
        width: 1210px;
    }
}

@media only screen and (min-width: 960px) and (max-width: 1199px) {
    .container {
        width: 1030px;
    }
}

@media only screen and (min-width: 768px) and (max-width: 959px) {
    .container {
        width: 682px;
    }
}

@media only screen and (min-width: 480px) and (max-width: 767px) {
    .container {
        width: 428px;
        margin: 0 auto;
    }
}

@media only screen and (max-width: 479px) {
    .container {
        width: 320px;
        margin: 0 auto;
    }
}


  
.mcd-menu {
  list-style: none;
  padding: 0;
  margin: 0;
  background: #FFF;
  /*height: 100px;*/
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  
  /* == */
  width: 250px;
  /* == */
}
.mcd-menu li {
  position: relative;
  /*float:left;*/
}
.mcd-menu li a {
  display: block;
  text-decoration: none;
  padding: 12px 20px;
  color: #777;
  /*text-align: center;
  border-right: 1px solid #E7E7E7;*/
  
  /* == */
  text-align: left;
  height: 36px;
  position: relative;
  border-bottom: 1px solid #EEE;
  /* == */
}
.mcd-menu li a i {
  /*display: block;
  font-size: 30px;
  margin-bottom: 10px;*/
  
  /* == */
  float: left;
  font-size: 20px;
  margin: 0 10px 0 0;
  /* == */
  
}
/* == */
.mcd-menu li a p {
  float: left;
  margin: 0 ;
}
/* == */

.mcd-menu li a strong {
  display: block;
  text-transform: uppercase;
}
.mcd-menu li a small {
  display: block;
  font-size: 10px;
}

.mcd-menu li a i, .mcd-menu li a strong, .mcd-menu li a small {
  position: relative;
  
  transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -webkit-transition: all 300ms linear;
}
.mcd-menu li:hover > a i {
    opacity: 1;
    -webkit-animation: moveFromTop 300ms ease-in-out;
    -moz-animation: moveFromTop 300ms ease-in-out;
    -ms-animation: moveFromTop 300ms ease-in-out;
    -o-animation: moveFromTop 300ms ease-in-out;
    animation: moveFromTop 300ms ease-in-out;
}
.mcd-menu li:hover a strong {
    opacity: 1;
    -webkit-animation: moveFromLeft 300ms ease-in-out;
    -moz-animation: moveFromLeft 300ms ease-in-out;
    -ms-animation: moveFromLeft 300ms ease-in-out;
    -o-animation: moveFromLeft 300ms ease-in-out;
    animation: moveFromLeft 300ms ease-in-out;
}
.mcd-menu li:hover a small {
    opacity: 1;
    -webkit-animation: moveFromRight 300ms ease-in-out;
    -moz-animation: moveFromRight 300ms ease-in-out;
    -ms-animation: moveFromRight 300ms ease-in-out;
    -o-animation: moveFromRight 300ms ease-in-out;
    animation: moveFromRight 300ms ease-in-out;
}

.mcd-menu li:hover > a {
  color: #e67e22;
}
.mcd-menu li a.active {
  position: relative;
  color: #e67e22;
  border:0;
  /*border-top: 4px solid #e67e22;
  border-bottom: 4px solid #e67e22;
  margin-top: -4px;*/
  box-shadow: 0 0 5px #DDD;
  -moz-box-shadow: 0 0 5px #DDD;
  -webkit-box-shadow: 0 0 5px #DDD;
  
  /* == */
  border-left: 4px solid #e67e22;
  border-right: 4px solid #e67e22;
  margin: 0 -4px;
  /* == */
}
.mcd-menu li a.active:before {
  content: "";
  position: absolute;
  /*top: 0;
  left: 45%;
  border-top: 5px solid #e67e22;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;*/
  
  /* == */
  top: 42%;
  left: 0;
  border-left: 5px solid #e67e22;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  /* == */
}

/* == */
.mcd-menu li a.active:after {
  content: "";
  position: absolute;
  top: 42%;
  right: 0;
  border-right: 5px solid #e67e22;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
}
/* == */

@-webkit-keyframes moveFromTop {
    from {
        opacity: 0;
        -webkit-transform: translateY(200%);
        -moz-transform: translateY(200%);
        -ms-transform: translateY(200%);
        -o-transform: translateY(200%);
        transform: translateY(200%);
    }
    to {
        opacity: 1;
        -webkit-transform: translateY(0%);
        -moz-transform: translateY(0%);
        -ms-transform: translateY(0%);
        -o-transform: translateY(0%);
        transform: translateY(0%);
    }
}
@-webkit-keyframes moveFromLeft {
    from {
        opacity: 0;
        -webkit-transform: translateX(200%);
        -moz-transform: translateX(200%);
        -ms-transform: translateX(200%);
        -o-transform: translateX(200%);
        transform: translateX(200%);
    }
    to {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
}
@-webkit-keyframes moveFromRight {
    from {
        opacity: 0;
        -webkit-transform: translateX(-200%);
        -moz-transform: translateX(-200%);
        -ms-transform: translateX(-200%);
        -o-transform: translateX(-200%);
        transform: translateX(-200%);
    }
    to {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
}



.mcd-menu li ul,
.mcd-menu li ul li ul {
  position: absolute;
  height: auto;
  min-width: 200px;
  padding: 0;
  margin: 0;
  background: #FFF;
  /*border-top: 4px solid #e67e22;*/
  opacity: 0;
  visibility: hidden;
  transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -webkit-transition: all 300ms linear;
  /*top: 130px;*/
  z-index: 1000;
  
  /* == */
  left:280px;
  top: 0px;
  border-left: 4px solid #e67e22;
  /* == */
}
.mcd-menu li ul:before {
  content: "";
  position: absolute;
  /*top: -8px;
  left: 23%;
  border-bottom: 5px solid #e67e22;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;*/
  
  /* == */
  top: 25px;
  left: -9px;
  border-right: 5px solid #e67e22;
  border-bottom: 5px solid transparent;
  border-top: 5px solid transparent;
  /* == */
}
.mcd-menu li:hover > ul,
.mcd-menu li ul li:hover > ul {
  display: block;
  opacity: 1;
  visibility: visible;
  /*top: 100px;*/
  
  /* == */
  left:250px;
  /* == */
}
/*.mcd-menu li ul li {
  float: none;
}*/
.mcd-menu li ul li a {
  padding: 10px;
  text-align: left;
  border: 0;
  border-bottom: 1px solid #EEE;
  
  /* == */
  height: auto;
  /* == */
}
.mcd-menu li ul li a i {
  font-size: 16px;
  display: inline-block;
  margin: 0 10px 0 0;
}
.mcd-menu li ul li ul {
  left: 230px;
  top: 0;
  border: 0;
  border-left: 4px solid #e67e22;
}  
.mcd-menu li ul li ul:before {
  content: "";
  position: absolute;
  top: 15px;
  /*left: -14px;*/
  /* == */
  left: -9px;
  /* == */
  border-right: 5px solid #e67e22;
  border-bottom: 5px solid transparent;
  border-top: 5px solid transparent;
}
.mcd-menu li ul li:hover > ul {
  top: 0px;
  left: 200px;
}



/*.mcd-menu li.float {
  float: right;
}*/
.mcd-menu li a.search {
  /*padding: 29px 20px 30px 10px;*/
  padding: 10px 10px 15px 10px;
  clear: both;
}
.mcd-menu li a.search i {
  margin: 0;
  display: inline-block;
  font-size: 18px;
}
.mcd-menu li a.search input {
  border: 1px solid #EEE;
  padding: 10px;
  background: #FFF;
  outline: none;
  color: #777;
  
  /* == */
  width:170px;
  float:left;
  /* == */
}
.mcd-menu li a.search button {
  border: 1px solid #e67e22;
  /*padding: 10px;*/
  background: #e67e22;
  outline: none;
  color: #FFF;
  margin-left: -4px;
  
  /* == */
  float:left;
  padding: 10px 10px 11px 10px;
  /* == */
}
.mcd-menu li a.search input:focus {
  border: 1px solid #e67e22;
}


.search-mobile { 
	display:none !important;
	background:#e67e22;
	border-left:1px solid #e67e22;
	border-radius:0 3px 3px 0;
}
.search-mobile i { 
	color:#FFF; 
	margin:0 !important;
}


@media only screen and (min-width: 960px) and (max-width: 1199px) {
    .mcd-menu {
		margin-left:10px;
	}
}

@media only screen and (min-width: 768px) and (max-width: 959px) {
    .mcd-menu {
		width: 200px;
	}
	.mcd-menu li a {
		height:30px;
	}
	.mcd-menu li a i {
		font-size: 22px;
	}
	.mcd-menu li a strong {
		font-size: 12px;
	}
	.mcd-menu li a small {
		font-size: 10px;
	}	
	.mcd-menu li a.search input {
		width: 120px;
		font-size: 12px;
	}
	.mcd-menu li a.search buton{
		padding: 8px 10px 9px 10px;
	}
	.mcd-menu li > ul {
		min-width:180px;
	}
	.mcd-menu li:hover > ul {
		min-width:180px;
		left:200px;
	}
	.mcd-menu li ul li > ul, .mcd-menu li ul li ul li > ul {
		min-width:150px;
	}
	.mcd-menu li ul li:hover > ul {
		left:180px;
		min-width:150px;
	}
	.mcd-menu li ul li ul li:hover > ul {
		left:150px;
		min-width:150px;
	}
	.mcd-menu li ul a {
		font-size:12px;
	}
	.mcd-menu li ul a i {
		font-size:14px;
	}
}

@media only screen and (min-width: 480px) and (max-width: 767px) {
	
	.mcd-menu { 
		width: 50px;
	}
	.mcd-menu li a { 
		position: relative;
		padding: 12px 16px;
		height:20px;
	}
	.mcd-menu li a small { 
		display: none;
	}
	.mcd-menu li a strong { 
		display: none;
	}
	.mcd-menu li a:hover strong,.mcd-menu li a.active strong {
		display:block;
		font-size:10px;
		padding:3px 0;
		position:absolute;
		bottom:0px;
		left:0;
		background:#e67e22;
		color:#FFF;
		min-width:100%;
		text-transform:lowercase;
		font-weight:normal;
		text-align:center;
	}
	.mcd-menu li .search { 
		display: none;
	}
	
	.mcd-menu li > ul {
		min-width:180px;
		left:70px;
	}
	.mcd-menu li:hover > ul {
		min-width:180px;
		left:50px;
	}
	.mcd-menu li ul li > ul, .mcd-menu li ul li ul li > ul {
		min-width:150px;
	}
	.mcd-menu li ul li:hover > ul {
		left:180px;
		min-width:150px;
	}
	.mcd-menu li ul li ul li > ul {
		left:35px;
		top: 45px;
		border:0;
		border-top:4px solid #e67e22;
	}
	.mcd-menu li ul li ul li > ul:before {
		left:30px;
		top: -9px;
		border:0;
		border-bottom:5px solid #e67e22;
		border-left:5px solid transparent;
		border-right:5px solid transparent;
	}
	.mcd-menu li ul li ul li:hover > ul {
		left:30px;
		min-width:150px;
		top: 35px;
	}
	.mcd-menu li ul a {
		font-size:12px;
	}
	.mcd-menu li ul a i {
		font-size:14px;
	}
	
}

@media only screen and (max-width: 479px) {
    .mcd-menu { 
		width: 50px;
	}
	.mcd-menu li a { 
		position: relative;
		padding: 12px 16px;
		height:20px;
	}
	.mcd-menu li a small { 
		display: none;
	}
	.mcd-menu li a strong { 
		display: none;
	}
	.mcd-menu li a:hover strong,.mcd-menu li a.active strong {
		display:block;
		font-size:10px;
		padding:3px 0;
		position:absolute;
		bottom:0px;
		left:0;
		background:#e67e22;
		color:#FFF;
		min-width:100%;
		text-transform:lowercase;
		font-weight:normal;
		text-align:center;
	}
	.mcd-menu li .search { 
		display: none;
	}
	
	.mcd-menu li > ul {
		min-width:180px;
		left:70px;
	}
	.mcd-menu li:hover > ul {
		min-width:180px;
		left:50px;
	}
	.mcd-menu li ul li > ul, .mcd-menu li ul li ul li > ul {
		min-width:150px;
	}
	.mcd-menu li ul li:hover > ul {
		left:180px;
		min-width:150px;
	}
	.mcd-menu li ul li ul li > ul {
		left:35px;
		top: 45px;
		border:0;
		border-top:4px solid #e67e22;
	}
	.mcd-menu li ul li ul li > ul:before {
		left:30px;
		top: -9px;
		border:0;
		border-bottom:5px solid #e67e22;
		border-left:5px solid transparent;
		border-right:5px solid transparent;
	}
	.mcd-menu li ul li ul li:hover > ul {
		left:30px;
		min-width:150px;
		top: 35px;
	}
	.mcd-menu li ul a {
		font-size:12px;
	}
	.mcd-menu li ul a i {
		font-size:14px;
	}
    
}

</style>

  
</head>

<body style="background: #FFF url(images/dept1.jpg) 0% 100%/cover ;">
  <div class="container">
<nav>
		<ul class="mcd-menu">
			<li>
				<a href="" class="active">
					<i class="fa fa-home"></i>
					<strong>Home</strong>
					<small>Environment Dept</small>
				</a>
			</li>
			<li>
				<a href="">
					<i class="fa fa-plus"></i>
					<strong>Insertion</strong>
					<small>Insert Into Tables</small>
				</a>
				<ul>
					<li><a href="empabsinsert.php"><i class="fa fa-users"></i>Insert in Employee</a></li>
					<li><a href="phoneinsert.php"><i class="fa fa-phone"></i>Insert in Phone</a></li>
					<li><a href="itsectioninsert.php"><i class="fa fa-desktop"></i>Insert in It Section</a></li>
					<li><a href="yearlybasisinsert.php"><i class="fa fa-calendar"></i>Insert in Yearly Basis</a></li>
					<li><a href="accountinsert.php"><i class="fa fa-user"></i>Insert in Account</a></li>
					<li><a href="RESEARCH_INSERT.php"><i class="fa fa-flask"></i>Insert in Research</a></li>
					<li><a href="RES_PROJ_INSERT.php"><i class="fa fa-bolt"></i>Insert in RESEARCH PROJECT</a></li>
					<li><a href="DEV_PROJ_INSERT.php"><i class="fa fa-building-o"></i>Insert in DEVELOPMENT PROJECT</a></li>
					<li><a href="DRIVER_INSERT.php"><i class="fa fa-hdd-o"></i>Insert in Driver</a></li>
					<li><a href="REG_INDUS_INSERT.php"><i class="fa fa-building-o"></i>Insert in Regional Industries</a></li>
					<li><a href="INSPECTOR_INSERT.php"><i class="fa fa-user"></i>Insert in Inspector</a></li>
					<li><a href="INSPECTION_INSERT.php"><i class="fa fa-tasks"></i>Insert in Inspection</a></li>
					<li><a href="LAW_DEPT_INSERT.php"><i class="fa fa-gavel"></i>Insert in Law Department</a></li>
					<li><a href="RESPONSIBLE_VEHICLES_INSERT.php"><i class="fa fa-truck"></i>Insert in Responsible Vehicles</a></li>
					<li><a href="SECURITY_INSERT.php"><i class="fa fa-lock"></i>Insert in Security</a></li>
					<li><a href="mobilecourtinsert.php"><i class="fa fa-truck"></i>Insert in Mobile Court</a></li>
					<li><a href="pollevelinsert.php"><i class="fa fa-lock"></i>Insert in Pollution Level Checker</a></li>
				</ul>
			</li>
			<li>
				<a href="">
					<i class="fa fa-trash-o"></i>
					<strong>Deletion</strong>
					<small>Delete From Tables</small>
				</a>
				<ul>
					<li><a href="employeemuldel.php"><i class="fa fa-users"></i>Delete From Employee</a></li>
					<li><a href="phonemuldel.php"><i class="fa fa-phone"></i>Delete From Phone</a></li>
					<li><a href="itsectiondel.php"><i class="fa fa-desktop"></i>delete From It Section</a></li>
					<li><a href="yearlybasisdel.php"><i class="fa fa-calendar"></i>Delete From Yearly Basis</a></li>
					<li><a href="accdel.php"><i class="fa fa-users"></i>Delete From Account</a></li>
					<li><a href="accidentdel.php"><i class="fa fa-phone"></i>Delete From Accident</a></li>
					<li><a href="devdel.php"><i class="fa fa-desktop"></i>delete From Development Project</a></li>
					<li><a href="driverdel.php"><i class="fa fa-calendar"></i>Delete From Driver</a></li>
					<li><a href="inspectiondel.php"><i class="fa fa-users"></i>Delete From Inspection</a></li>
					<li><a href="lawdel.php"><i class="fa fa-phone"></i>Delete From Law Department</a></li>
					<li><a href="regindusdel.php"><i class="fa fa-desktop"></i>delete From Regional Industries</a></li>
					<li><a href="researchdel.php"><i class="fa fa-calendar"></i>Delete From R & D</a></li>
					<li><a href="resprodel.php"><i class="fa fa-users"></i>Delete From Research Project</a></li>
					<li><a href="resvehidel.php"><i class="fa fa-phone"></i>Delete From Responsible Vehicles</a></li>
					<li><a href="securitydel.php"><i class="fa fa-desktop"></i>Delete From Security</a></li>
					<li><a href="mobiledel.php"><i class="fa fa-phone"></i>Delete From Mobile Court</a></li>
					<li><a href="polleveldel.php"><i class="fa fa-desktop"></i>Delete From Pollution level Checker</a></li>
				</ul>
			</li>
			<li>
				<a href="">
					<i class="fa fa-refresh"></i>
					<strong>Update</strong>
					<small>Update Tables</small>
				</a>
				<ul>
					<li><a href="DEPARTMENT_UPDATE.php"><i class="fa fa-users"></i>Update Department</a></li>
					<li><a href="empupdate.php"><i class="fa fa-users"></i>Update Employee</a></li>
					<li><a href="phoneupdate.php"><i class="fa fa-phone"></i>Update Phone</a></li>
					<li><a href="itsectionupdate.php"><i class="fa fa-desktop"></i>Update It Section</a></li>
					<li><a href="yearlybasisupdate.php"><i class="fa fa-calendar"></i>Update Yearly Basis</a></li>
					<li><a href="accountupdate.php"><i class="fa fa-users"></i>Update Account</a></li>
					<li><a href="dri1.php"><i class="fa fa-phone"></i>Update Driver</a></li>
					<li><a href="INSPECTOR_UPDATE.php"><i class="fa fa-desktop"></i>Update iNSPECTOR</a></li>
					<li><a href="regi.php"><i class="fa fa-calendar"></i>Update Regional industry</a></li>
					<li><a href="res1.php"><i class="fa fa-users"></i>Update Responsible Vehicles</a></li>
					<li><a href="SECURITY_UPDATE.php"><i class="fa fa-desktop"></i>Update Security</a></li>
				</ul>
			</li>
			<li>
				<a href="">
					<i class="fa fa-search"></i>
					<strong>Search</strong>
					<small>Search in Tables</small>
				</a>
				<ul>
					<li><a href="employeepagesearch.php"><i class="fa fa-users"></i>Search in Employee</a></li>
					<!--<li><a href="addresspagesearch.php"><i class="fa fa-phone"></i>Search in addresspagesearch</a></li>-->
					<li><a href="itsecsearch.php"><i class="fa fa-desktop"></i>Search in It Section</a></li>
					<li><a href="yearlysearch.php"><i class="fa fa-calendar"></i>Search in Yearly Basis</a></li>
				</ul>
			</li>
			
			<li>
				<a href="">
					<i class="fa fa-question"></i>
					<strong>Show</strong>
					<small>Show Tables</small>
				</a>
				<ul>
					<li><a href="deptshow.php"><i class="fa fa-globe"></i>DEPARTMENT Table</a></li>
					<li><a href="employeeshow.php"><i class="fa fa-globe"></i>Employee Table</a></li>
					<li><a href="tourism.php"><i class="fa fa-group"></i>Tourism Table</a></li>
					<li><a href="attraction.php"><i class="fa fa-trophy"></i>Attraction Table</a></li>
					<li><a href="inspection.php"><i class="fa fa-certificate"></i>Inspection Table</a></li>
					<li><a href="ACCIDENT.php"><i class="fa fa-globe"></i>Accident Table</a></li>
					<li><a href="animal.php"><i class="fa fa-globe"></i>Animals Table</a></li>
					<li><a href="DEV_PROJECT.php"><i class="fa fa-group"></i>Development Table</a></li>
					<li><a href="DRIVER.php"><i class="fa fa-trophy"></i>Driver Table</a></li>
					<li><a href="ENFORCESSHOW.php"><i class="fa fa-certificate"></i>Enforces Table</a></li>
					<li><a href="Forest.php"><i class="fa fa-globe"></i>Forest Table</a></li>
					<li><a href="fossil_fuel.php"><i class="fa fa-globe"></i>Fossil_fuel Table</a></li>
					<li><a href="LAWSHOW.php"><i class="fa fa-group"></i>LAW Table</a></li>
					<li><a href="phoneshow.php"><i class="fa fa-trophy"></i>Phone Table</a></li>
					<li><a href="POLLUTIONSHOW.php"><i class="fa fa-certificate"></i>POLLUTION Table</a></li>
					<li><a href="PUNISHMENT.php"><i class="fa fa-trophy"></i>PUNISHMENT Table</a></li>
					<li><a href="REGIONAL_INDUSTRIES.php"><i class="fa fa-certificate"></i>REGIONAL INDUSTRIES Table</a></li>
					<li><a href="RESEARCHSHOW.php"><i class="fa fa-globe"></i>RESPONSIBLE VEHICLES Table</a></li>
					<li><a href="RESSHOW.php"><i class="fa fa-globe"></i>RESEARCH PROJECT Table</a></li>
					<li><a href="RESULTSHOW.php"><i class="fa fa-group"></i>RESULT Table</a></li>
					<li><a href="SECURITYSHOW.php"><i class="fa fa-trophy"></i>SECURITY Table</a></li>
					<li><a href="climateresshow.php"><i class="fa fa-certificate"></i>Climate Table</a></li>
					
				</ul>
			</li>
			
			<li>
				<a href="">
					<i class="fa fa-question"></i>
					<strong>Query</strong>
					<small>Show Result</small>
				</a>
				<ul>
				<li>
					<a href="#"><i class="fa fa-question"></i>Queries</a>
						<ul>
					<li><a href="sh29.php"><i class="fa fa-certificate"></i>Employee Serveing Year</a></li>
					<li><a href="sh30.php"><i class="fa fa-trophy"></i>Department wise minimum salary</a></li>		
					<li><a href="sh31.php"><i class="fa fa-certificate"></i>Industry Suspension</a></li>
					<li><a href="sh3.php"><i class="fa fa-group"></i>Tourist Attraction</a></li>
					<li><a href="sh4.php"><i class="fa fa-trophy"></i>Animal Info</a></li>
					<li><a href="sh8.php"><i class="fa fa-trophy"></i>Security Guard Salary</a></li>
					<li><a href="sh9.php"><i class="fa fa-certificate"></i>Regional Rainfall</a></li>
					<li><a href="sh10.php"><i class="fa fa-globe"></i>Development Project Duration</a></li>
					<li><a href="sh11.php"><i class="fa fa-group"></i>RESEHULED DEV PROJECT TIME</a></li>
					<li><a href="sh12.php"><i class="fa fa-trophy"></i>Rating Wise Pay Amount</a></li>
					
					<li><a href="sh14.php"><i class="fa fa-globe"></i>Research & Dev Project Incharge</a></li>
					<li><a href="sh16.php"><i class="fa fa-group"></i>District Wise Area & Animal</a></li>
					<li><a href="sh18.php"><i class="fa fa-trophy"></i>Region Wise Attraction</a></li>
					<li><a href="sh19.php"><i class="fa fa-certificate"></i>OFFICIAL PHONE USER</a></li>
					<li><a href="sh20.php"><i class="fa fa-globe"></i>Region Wise Project Duration</a></li>
					<li><a href="sh21.php"><i class="fa fa-group"></i>Security Guard Info</a></li>
					<li><a href="sh22.php"><i class="fa fa-trophy"></i>Forest Resource</a></li>
					<li><a href="sh24.php"><i class="fa fa-certificate"></i>Query On Temparature</a></li>
					<li><a href="sh26.php"><i class="fa fa-globe"></i>Inspector Inspects Industry</a></li>
					<li><a href="sh27.php"><i class="fa fa-group"></i>Employee With Negative Blood</a></li>
					<li><a href="sh13.php"><i class="fa fa-certificate"></i>Changed Employee Id Format</a></li>
					<li><a href="sh28.php"><i class="fa fa-trophy"></i>Budget,Expenditure & Department</a></li>
					<li><a href="sh33.php"><i class="fa fa-certificate"></i>Query on yearly Basis</a></li>
					<li><a href="sh44.php"><i class="fa fa-trophy"></i>Query on fossil fuel</a></li>
					
					<li><a href="sh1.php"><i class="fa fa-globe"></i>Employee Birthday</a></li>
					<li><a href="sh5.php"><i class="fa fa-certificate"></i>Employee Salary & Tax</a></li>
					<li><a href="sh6.php"><i class="fa fa-globe"></i>Employee Phone No</a></li>
					<li><a href="sh7.php"><i class="fa fa-group"></i>Employee Having salary low than average</a></li>
							
					</ul>
				</li>
				
				<li>
					<a href="#"><i class="fa fa-eye"></i>View</a>
					<ul>
					<li><a href="Accident_view.php"><i class="fa fa-trophy"></i>Accident View</a></li>
					<li><a href="forestanimal.php"><i class="fa fa-certificate"></i>Forest Animal View</a></li>
					<li><a href="industryview.php"><i class="fa fa-globe"></i>Industry View</a></li>
					<li><a href="LAWVIEW.php"><i class="fa fa-group"></i>Law View</a></li>
					<li><a href="PunishmentLIST.php"><i class="fa fa-trophy"></i>Punishment List view</a></li>
					<li><a href="tourguideview.php"><i class="fa fa-certificate"></i>Tourguide view</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#"><i class="fa fa-fire"></i>Trigger</a>
				    <ul>
					<li><a href="employeemuldel.php"><i class="fa fa-globe"></i>Employee Delete Trigger</a></li>
					<li><a href="regtrigger.php"><i class="fa fa-group"></i>Regional Industries Update Trigger</a></li>
					<li><a href="accountupdate.php"><i class="fa fa-trophy"></i>Account Extra Expenditure update Trigger</a></li>	
					</ul>
			    </li>
				
				
					<!--<li><a href="sh1.php"><i class="fa fa-globe"></i>Employee Birthday</a></li>
					<li><a href="sh3.php"><i class="fa fa-group"></i>Tourist Attraction</a></li>
					<li><a href="sh4.php"><i class="fa fa-trophy"></i>Animal Info</a></li>
					<li><a href="sh5.php"><i class="fa fa-certificate"></i>Employee Salary & Tax</a></li>
					<li><a href="sh6.php"><i class="fa fa-globe"></i>Employee Phone No</a></li>
					<li><a href="sh7.php"><i class="fa fa-group"></i>Employee Having salary low than average</a></li>
					<li><a href="sh8.php"><i class="fa fa-trophy"></i>Security Guard Salary</a></li>
					<li><a href="sh9.php"><i class="fa fa-certificate"></i>Regional Rainfall</a></li>
					<li><a href="sh10.php"><i class="fa fa-globe"></i>Development Project Duration</a></li>
					<li><a href="sh11.php"><i class="fa fa-group"></i>RESEHULED DEV PROJECT TIME</a></li>
					<li><a href="sh12.php"><i class="fa fa-trophy"></i>Rating Wise Pay Amount</a></li>
					<li><a href="sh13.php"><i class="fa fa-certificate"></i>Changed Employee Id Format</a></li>
					<li><a href="sh14.php"><i class="fa fa-globe"></i>Research & Dev Project Incharge</a></li>
					<li><a href="sh16.php"><i class="fa fa-group"></i>District Wise Area & Animal</a></li>
					<li><a href="sh18.php"><i class="fa fa-trophy"></i>Region Wise Attraction</a></li>
					<li><a href="sh19.php"><i class="fa fa-certificate"></i>Grameenphone User</a></li>
					<li><a href="sh20.php"><i class="fa fa-globe"></i>Region Wise Project Duration</a></li>
					<li><a href="sh21.php"><i class="fa fa-group"></i>Security Guard Info</a></li>
					<li><a href="sh22.php"><i class="fa fa-trophy"></i>Forest Resource</a></li>
					<li><a href="sh24.php"><i class="fa fa-certificate"></i>Query On Temparature</a></li>
					<li><a href="sh26.php"><i class="fa fa-globe"></i>Inspector Inspects Industry</a></li>
					<li><a href="sh27.php"><i class="fa fa-group"></i>Employee With Negative Blood</a></li>
					<li><a href="sh28.php"><i class="fa fa-trophy"></i>Budget,Expenditure & Department</a></li>
					<li><a href="sh29.php"><i class="fa fa-certificate"></i>Employee Serveing Year</a></li>
					<li><a href="sh30.php"><i class="fa fa-trophy"></i>Department wise minimum salary</a></li>
					<li><a href="sh31.php"><i class="fa fa-certificate"></i>Industry Suspension</a></li>
					<li><a href="Accident_view.php"><i class="fa fa-trophy"></i>Accident View</a></li>
					<li><a href="forestanimal.php"><i class="fa fa-certificate"></i>Forest Animal View</a></li>
					<li><a href="industryview.php"><i class="fa fa-globe"></i>Industry View</a></li>
					<li><a href="LAWVIEW.php"><i class="fa fa-group"></i>Law View</a></li>
					<li><a href="PunishmentLIST.php"><i class="fa fa-trophy"></i>Punishment List view</a></li>
					<li><a href="tourguideview.php"><i class="fa fa-certificate"></i>Tourguide view</a></li>
					<li><a href="employeemuldel.php"><i class="fa fa-globe"></i>Employee Delete Trigger</a></li>
					<li><a href="regtrigger.php"><i class="fa fa-group"></i>Regional Industries Update Trigger</a></li>
					<li><a href="accountupdate.php"><i class="fa fa-trophy"></i>Account Extra Expenditure update Trigger</a></li>-->
					
				</ul>
			</li>
		
			<li>
				<a href="logout.php" class="active">
					<i class="fa fa-sign-out"></i>
					<strong>Logout</strong>
					<small>Sign Out</small>
				</a>
			</li>
		</ul>
	</nav>
</div>
  
  
</body>
</html>
