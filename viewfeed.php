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
             <?php
include('db_bus.php');
$con = new db();
$a=$con->viewfeed();
?>
         <div id="content">
<table border="1" width="100%" >
<?php foreach($a as $r):
    ?><tr>
   <td><?php echo "Feedback:-".$r['feedback'].'<BR>'."Phone number:-".$r['number'];?></td>
    </tr>
<?php endforeach;?>
</table>
         </div>
         <div class="clear"></div> 
        
        </div>
     <div id="footer">
   	<p>Copyright @ Hamro Bus.com 2014</p>
		<p>&nbsp;</p></div>
    </body>
    <html>
        