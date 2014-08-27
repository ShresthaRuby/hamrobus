<?php
include('db_bus.php');
$con=new db();
session_start();
if(!isset($_SESSION['id']))
{
    header('location:index.php');
}
else
{
    $id=$_SESSION['id'];
}
?>

<html>
<head>
	<title>station</title>
<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
   	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
     <!-- jQuery - the core -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>
        <style>
            a:hover{color: purple;}
            a:visited{color: red;}
          
            
        </style>

</head>
<body>

	<div id="container">
            <div id="header">
                Hello guest!!!<form mehtod="post" action="logout.php"><input type ="submit" value ="Logout" style="float: right;"></form>
                <img src="images/header.png" width="1040" />
            </div>
             <div class="clear"></div>
            <div id="content">
			<table border="1" width="50%" align ="center">
				<tr>
					<th colspan="3">Name Of The Station</th>
				</tr>
				<tr>
					<th width=25%>Bus</th>
					<th width=25%>Time</th>
					<th width=25%>Status</th>
				</tr>	
               	
                 <?php 
             
                      $flag=$con->getflag(); 
                    $a=$con->getsingle($flag);
                    $r=$a['id'];
              
                    $val=$_SESSION['id'];
              
               
               
           
                      for($i=0;$i<24;$i++) {?>
        <tr>
              <td><?php  ;echo ($r+$i)%7+1; ?></td>
            <td><?php 
                        if($val==1)
                            {
                            echo $i.":"."00"; 
                             }
                        else{
                            $a=$con->getdif($val,$i);                         
                        }
                        
                        ?>
            </td>
            <td><a href="arrive.php?exp=<?php echo $a;?>&bus=<?php echo ($r+$i)%7+1;?>">Arrived</a></td>
            
            
                
            
        </tr>    
                      <?php } ?>
			</table> 
         
   		</div>
         <div class="clear"></div>
      
      
        </div>
     <div class="clear"></div> 
     <div id="footer">
   	<p>Copyright @ Hamro Bus.com 2014</p>
		<p>&nbsp;</p></div>
</div>
</body> 
</html>
