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
	
</div> <!--panel -->

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
   	 <div id="content_left">

<p>Wow! we are online. Now onwards you dont need to stand blind and wait the arrival of the vehicle that will lift you. Check our buses on web. Know where they are and when thy will arrive to your nearest bus-stop. Dont spend your valuable time waiting the buses.<br>
Yes! we are Hamro Bus. We run on road, we run on web.<br>
For further detail:<br>
Our Office:Pragati Nagar,13-Kathmandu.<br>
P.O.B:8776<br>
Mail us at: hamro_bus@buses.com<br>
Phone:9238490328</p>
		</div>
        <div id="content_right"><img src="images/office.jpg" width="440px" /></div>
             <div style="clear:both;"></div>
        
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

