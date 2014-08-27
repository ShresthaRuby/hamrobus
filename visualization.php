<?php 
    include ('db_bus.php'); 
    $con=new db();
   
    $val=$_GET['id'];
//    if($val==" ")
//    {
//        $val=1;
//    }
     $arr=$con->retrieve($val); 
    //echo $arr;
?>
<html>
<head>
	<title>station</title>
<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
   	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
  
	
         <script type="text/javascript" src="jsapi.js"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
         <?php echo $arr;?>
        ]);

        var options = {
          title: 'Time difference'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

</head>
<body>
    <div id="container">
            <div id="header"><form action="logout.php"><input type ="submit" value ="Logout" style="float: right;"></form><img src="images/header.png" width="1040" /></div>
                <div class="clear"></div>
            <div id="content">
                
                <div style ="float: left;margin-top: 10px; margin-left: 10px;">
                    <div id="chart_div" style="width:900px; height:400px;"></div>
                </div>
                <div style="float:left; background: #fff; width:140px; height: 400px; margin-top: 10px; margin-right: 10px;">
                    <p style ="font-family:Times new roman; font-size: 18px; color: #cc0000; "> Select Station</p>
                    <ul>
                        <li><a href ="visualization.php?id=1">Nayabazar</a><br><br></li>
                         <li><a href ="visualization.php?id=2">Dhumbarahi</a><br><br></li>
                          <li><a href ="visualization.php?id=3">Boudha</a><br><br></li>
                          <li><a href ="visualization.php?id=4">Sinamangal</a><br><br></li>
                          <li><a href ="visualization.php?id=5">Sankhamul</a><br><br></li>
                        <li><a href ="visualization.php?id=6">Teku</a><br><br></li>
                    </ul>
                </div>
                <div class="clear"></div>
      
            </div>
    </div>
     <div class="clear"></div> 
     <div id="footer">
   	<p>Copyright @ Hamro Bus.com 2014</p>
		<p>&nbsp;</p></div>
</div>
</body> 
</html>
