
<html>
<head>
	<title>about_us</title>
        <link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' type='text/css' href='styles.css' />
	
            <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>
        <script type="text/javascript">
            function validate()
            {
                var a = document.form1.phone.value;
                if(isNaN(a))
                    {
                        alert("Characters are not allowed in the Phone Number");
                        return false;
                    
                    }
                    else
                        return true;
            }
            
            </script>
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

             <form action="addfeedback.php" method="post" name="form1" onsubmit=return(validate())>
                 <table>
                     <tr>
                <td> Phone number:</td><td><input type="text" name="phone"></td></tr><tr>
                 <td>Enter your feedback:</td><td><textarea name="feed"> Enter your feedback here</textarea></td></tr>
                 <tr><td colspan="2"><input type="submit" value="OK"></td></tr>
                 </table>
             </form>
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



