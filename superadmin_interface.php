<?php
include('db_bus.php');
$con=new db();
session_start();
if(!isset($_SESSION['name']))
{
    header('location:index.php');
}
//else
//{
//    $id=$_SESSION['id'];
//}
?>

<html>
<head>
	<title>su_login_interface</title>
    <link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
   	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="a.css" />
</head>

<body>
	<div id="container">
    	<div id="header">
            <form action="logout.php"><input type ="submit" value ="Logout" style="float: right;"></form>
            <img src="images/header.png" width="1040" />
    	</div>
    
    	<div class="clear"></div>
      <div id="navcontainer">
        <ul id="navlist">
<!--           <li><a href='#'><span>Change the Schedule</span></a></li>-->
<!--           <li><a href='addbus.php'><span>Add Bus</span></a></li>
           <li><a href='#'><span>Delete Bus</span></a></li>
           <li><a href='#'><span>Add Staff</span></a></li>-->
           <li><a href='visualization.php?id=1'><span>View Station Status</span></a></li>
           <li><a href='viewfeed.php'><span>View Feedback</span></a></li>
           <li><a href='manage_staff.php'><span>View staff Info</span></a></li>
           
        </ul>
	</div>
        

	<div class="viewpane"></div>
    </div>
 <div class="clear"></div>
   
   <div id="footer">
     <p>Copyright @ Hamro Bus.com 2014</p>
<p>&nbsp;</p></div>
   </div>    
</body>