<?php
include('db_station.php');
$con=new db1();
$a=$_POST['card'];
$b=$_POST['from'];
$c=$_POST['to'];
$d=$con->getfare($a,$b,$c);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bus Fares</title>
	 <link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
   	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel='stylesheet' type='text/css' href='styles.css' />
         <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>
</head>

<body>
	
    <div id="container">
    	<div id="header">
  			<img src="images/header.png" width="1040px" />
    	</div>
        <div class="clear"></div>
       
         <div id='cssmenu'>
        <ul>
           <li class='active'><a href='index.php'><span>Home</span></a></li>
           <li><a href='aboutus.php'><span>About Us</span></a></li>
           <li><a href='faq.php'><span>FAQ</span></a></li>
           <li><a href='feedback.php'><span>Bus Fares</span></a></li>
          <li class='last'><a href='feedback.php'><span>Feedback</span></a></li>
        </ul>
	</div>
    
		<div id="content">
<!--        	<div id="content_left">
-->        	
<p style="color: #cc0000; font-family: Times new roman; font-size: 18px;">Your bus fare will be <?php echo $d;?></p>
        	&nbsp; &nbsp;<table width="640px">
                     <form name="fare" method="post" action="fare.php">
                <tr>
					<th colspan="3">Bus Fares</th>
				</tr>
               	<tr>
                   	<th width="33%">Card</th>
                     <th width="33%">From</th>
                     <th width="33%">To</th>
              </tr>
                     <tr>
                           <td><select name="card">
                            	<option value="1">Yes</option>
                                <option value="0">No</option>
                               
                            </select></td>
                      
                       <td>
                       		<select name="from">
                            	<option value="1">Nayabazaar</option>
                                <option value="2">Dhumbarahi</option>
                                <option value="3">Bouddha Nath</option>
                                 <option value="4">Sinamangal</option>
                                 <option value="5">Shankhamul</option>
                                <option value="6">Teku</option>       
                            </select>
                       </td>
                       <td>
                           <select name="to">
                            	<option value="1">Nayabazaar</option>
                                <option value="2">Dhumbarahi</option>
                                <option value="3">Bouddha Nath</option>
                                 <option value="4">Sinamangal</option>
                                 <option value="5">Shankhamul</option>
                                <option value="6">Teku</option>       
                            </select>
                      
                     
                     </tr>
                     
                </table>
<!--                </div>
                <div id="content_right">
-->               
<input type="submit" value="OK"  style ="color: #006666; background:#cc0000; width: 50px; height: 30px; font-family:Times new roman; font-size: 18px;"></input>
     
        </form>     
                     </div>
</div>
            <div class="clear"></div>
         </div>
		<div class="clear"></div>
		
		
	</div>
     <div id="footer">
   	<p>Copyright @ Hamro Bus.com 2014</p>
		<p>&nbsp;</p></div>
   </div>
    
</body>
</html>
