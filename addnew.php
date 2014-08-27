<?php
include 'db_bus.php';
if(isset($_POST['submit']))
{
  date_default_timezone_set('Asia/Kathmandu');
  $d=date('Y-m-d');
  $con=new db();
  $con->insert($d);
}

?>
<html>
    <head>
        <link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
   	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
         <div id="container">
         <div id="header"><form action="logout.php"><input type ="submit" value ="Logout" style="float: right;"></form><img src="images/header.png" width="1040" /></div>
<div style ="float: left;margin-top: 10px; margin-left: 10px;">
                   <!-- <div id="chart_div" style="width:900px; height:400px;"></div>-->
                </div>
          <div id="content">
    <form name="emp" method="post">
        Name:<input type="text" name="name"><br/>
        Type:<select name="type"><option>station_manager</option> <option>driver</option> <option>conductor</option></select><br/>
        Associated to:<input type="text" name="assoc"><br/>
        <input type="submit" name="submit">
    </form>
          </div>
         <div class="clear"></div> 
        
        </div>
     <div id="footer">
   	<p>Copyright @ Hamro Bus.com 2014</p>
		<p>&nbsp;</p></div>
    </body>
</html>