<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bus Fares</title>
<meta name="keywords" content="jquery, sliding, toggle, slideUp, slideDown, login, login form, register" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
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
    	<div id="header">
  			<img src="images/header.png" width="1040px" />
    	</div>
        <div class="clear"></div>
         <div id='cssmenu'>
        <ul>
           <li class='active'><a href='index.php'><span>Home</span></a></li>
           <li><a href='aboutus.php'><span>About Us</span></a></li>
           <li><a href='faq.php'><span>FAQ</span></a></li>
           <li><a href='#'><span>Bus Fares</span></a></li>
          <li class='last'><a href='feedback.php'><span>Feedback</span></a></li>
        </ul>
	</div>
    
    <div class="clear"></div>
       
		<div id="content">
<!--        	<div id="content_left">
-->        	
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
<input type="submit" value="OK" style ="color: #006666; background:#cc0000; width: 50px; height: 30px; font-family:Times new roman; font-size: 18px;"></input>
      </div>
        </form>          
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
