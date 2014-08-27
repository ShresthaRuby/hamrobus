<!--
	Copyright 2009 Jeremie Tisseau
	"Sliding Login Panel with jQuery 1.3.2" is distributed under the GNU General Public License version 3:
	http://www.gnu.org/licenses/gpl-3.0.html
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  	<title>Hamro Bus.com</title>
  	
  	<meta name="keywords" content="jquery, sliding, toggle, slideUp, slideDown, login, login form, register" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	

	<!-- stylesheets -->
  
  	<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
   	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel='stylesheet' type='text/css' href='styles.css' />
	
  	<!-- PNG FIX for IE6 -->
  	<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
	<![endif]-->
	 
    <!-- jQuery - the core -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>


</head>

<body>
<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<img src="images/logo.png" width="270" height="175" style="padding:10px;"  />
			</div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="logincheck.php" method="post">
					<h1>Member Login</h1>
					<label class="grey" for="log">Username:</label>
					<input class="field" type="text" name="log" id="log" value="" size="23" />
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="pwd" id="pwd" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<a class="lost-pwd" href="#">Forgot your password?</a>
				</form>
			</div>
			
		</div>
	</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<!--<li>Hello Guest!</li>-->
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Log In</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->


<div id="container">
    	<div id="header">
        	<img src="images/header.png" width="1040" />
    	</div>
    
    	<div class="clear"></div>
        
   <div id='cssmenu'>
        <ul>
           <li class='active'><a href='index.php'><span>Home</span></a></li>
           <li><a href='aboutus.php'><span>About Us</span></a></li>
           <li><a href='faq.php'><span>FAQ</span></a></li>
           <li><a href='bus_fares.php'><span>Bus Fares</span></a></li>
          <li class='last'><a href='feedback.php
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              '><span>Feedback</span></a></li>
        </ul>
	</div>
    
    <div class="clear"></div>
    
   <div id="content">
    	<div id="content_left">
        	<h2>Select Your Location Here</h2>
            <div id="three">
            	<img src="images/11.png" width="540px" usemap="#route" />
              <map name="route">
                <area shape="rect" coords="46,54,80,90" href="getschedule.php?id=1" />
                <area shape="rect" coords="36,280,72,314" href="getschedule.php?id=2" />
                <area shape="rect" coords="203,343,238,379" href="getschedule.php?id=3" />
                <area shape="rect" coords="302,258,340,292" href="getschedule.php?id=4" />
                <area shape="rect" coords="376,90,414,125" href="getschedule.php?id=5" />
                <area shape="rect" coords="270,79,304,113" href="getschedule.php?id=6" />
              </map>
            </div>
    	</div>
       
    	<div id="content_right">
       	  <h2>Bus News</h2>
          <p style=" text-align: justify; color: #cc0000; width: 400px;">
               From hot air balloon to hang-gliding operators, plenty of airborne adventure outfits promise to let you "soar with the birds."
               Few, however, deliver on the claim quite as literally or dramatically as Nepal's Parahawking Project.<br>
An activity in which humans fly alongside beautiful Egyptian vultures, parahawking is one of the more sensational flight experiences on the planet.
Flights take off from the lakeside town of Pokhara -- a jumping off point for whitewater rafting, mountain biking and other adventure activities in the Nepal's Annapurna region.
Thanks to the perennial presence of thermal gusts of air, traditional paragliding is an established and popular activity in the Pokhara Valley.
Many paragliding outfits operate tandem flights in the area.<br>
But only the Parahawking Project offers two flight companions -- mine were named "Scott" and "Kevin."
Scott Mason was my human guide.<br>
Like most Egyptian vultures, Kevin, didn't say much, but was extremely handsome, with sharp eyes and an adorable spiked hairdo.
The founder of Nepal's Parahawking Project, Mason employs two Egyptian vultures, his preferred breeds in the air, to accompany paragliders in flight. (Kevin's feathered colleague is named "Bob.")
<br>MORE: Himalaya girl power: Treks 'by women, for women'
$   </p>

         
        </div>
        <div class="clear"></div>      
    </div>
    <div class="clear"></div>
    
</div>
  
<!--   <div class="clear"></div>-->   
   <div id="footer">
   	<p>Copyright @ Hamro Bus.com 2014</p>
		<p>&nbsp;</p></div>
   </div>
        
</body>
</html>
