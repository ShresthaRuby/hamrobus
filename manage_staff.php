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
          <table>
              <tr>
                 <td>Name</td>
                  <td>Joined date </td>
                   <td> Type </td>
                    <td> Associated to</td>            
        </tr>
        <?php
        
include("db_bus.php");
//include("db_station.php");
$con= new db();
//$conn =new db1();
$a=$con->getemp();
foreach($a as $r):
    ?>
              <tr>
                  <td><?php echo $r['name'];?></td>
                   <td><?php echo $r['joined_date'];?></td>
                    <td><?php echo $r['type'];?></td>
                    <td><?php if($r['type']=="station_manager")echo "Station"." ".$r['associated_st']; else echo "Bus"." ".$r['associated_bus']; ?></td>
                   
              </tr>
          
          <?php 
endforeach;

?>
          </table>
          <a href="addnew.php">Add new employee</a>
      </div>
        

 <div class="viewpane"></div>
    </div>
 <div class="clear"></div>
   
   <div id="footer">
     <p>Copyright @ Hamro Bus.com 2014</p>
<p>&nbsp;</p></div>
   </div>    
</body>
</html>