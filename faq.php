
<html>
<head>
	<title>about_us</title>
        <meta name="keywords" content="jquery, sliding, toggle, slideUp, slideDown, login, login form, register" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
	<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' type='text/css' href='styles.css' />
        	<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
   	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel='stylesheet' type='text/css' href='styles.css' />
	
	 <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>
</head>

<body>
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
	
</div> 
<div id="container">
	<div id="header"><img src="images/header.png" width="1040" /></div>
    <!--<div style="clear:both;"></div>-->
	<div id="content">
<!--    	<div id="header"><p>Hamro Bus Company</p></div>-->
    	<!--<div style="clear:both;"></div>-->
	<div id='cssmenu'>
        <ul>
           <li class='active'><a href='index.php'><span>Home</span></a></li>
           <li><a href='aboutus.php'><span>About Us</span></a></li>
           <li><a href='faq.php'><span>FAQ</span></a></li>
           <li><a href='bus_fares.php'><span>Bus Fares</span></a></li>
          <li class='last'><a href='#'><span>Feedback</span></a></li>
        </ul>
	</div>	
   	 <div id="left" width="800">

             <p><b>*</b>Are all buses fully accessible?<br/>

All Reading Buses journeys are normally operated by low-floor, wheelchair-accessible buses. We are committed to extending access to all passengers, especially for those who find steps difficult and those with disabilities. All buses have an entrance ramp and many can be lowered to the kerb to allow you easier access to the bus, just ask the driver to “deploy the ramp” or “kneel the bus”. Each bus can normally carry one wheelchair in the dedicated space, and wheelchairs must be secured and have the brake applied while the bus is moving. Wheelchair users have priority over all other passengers in using the dedicated space – please ask the driver if you need any assistance.
<br/><br/><b>*</b>What service runs on public holidays?<br/>

To make sure you can get about on bank holidays we run a Sunday service on most bank holidays please check your timetables for details. A special timetable normally runs on Easter Friday, Boxing Day and New Year. On Christmas Day no buses will run. For more information on our public holiday services, please click here.
<br/><br/><b>*</b>Do children go free?<br/>

Children under 5 years old travel for free, providing they are travelling with a fare paying adult and do not occupy a seat required by a fare paying customer. Where a child under 5 is accompanied by another child then either both pay the child fare or one child should pay the adult fare and the other travel free – whichever is the cheaper. Children aged between 5 and 15 will be charged the appropriate child fare.
<br/><br/><b>*</b>What do I do if I have lost or found something on a bus?<br/>

If you lose something, please phone us on 0118 959 4000. Try to give us as much information as possible about what you lost, where you lost it, which bus number and the date and time. We will do our best to return your property to you.
If you find something, please wait until the bus stops at a bus stop and then inform the driver and give the item to him or her for safe keeping.
<br/><br/><b>*</b>Can I take my dog?<br/>

Yes, dogs are welcome on all Reading Buses with a Doggy Rover Day Ticket, which allows unlimited travel on our simplyReading network that day for just £1.  Guide dogs, hearing for the deaf dogs and accessibility dogs all travel free.  Other small pets may be carried (they are not allowed on the seats) at a charge of £1.00.  For your own comfort and theirs, we recommend that you travel off-peak whenever possible.</p>
		</div>
      
        
       </div>
              <div style="clear:both;"></div>

      </div>
     <!--        <div style="clear:both;"></div>-->
     <div id="footer">
   	<p>Copyright @ Hamro Bus.com 2014</p>
		<p>&nbsp;</p></div>
   </div>
</body>
</html>


