<?php 
    include ('db_bus.php'); 
    $con=new db();
    $arr=$con->retrieve(); 
    //echo $arr;
?>
<html>
<head>
	<title>station</title>
<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
   	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
     <!-- jQuery - the core -->
	
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
            <div id="header"><img src="images/header.png" width="1040" /></div>
             <div class="clear"></div>
            <div id="content">
                
            </div>
         <div class="clear"></div>
      <div id="chart_div" style="width: 900px; height: 500px;"></div>
      
        </div>
     <div class="clear"></div> 
     <div id="footer">
   	<p>Copyright @ Hamro Bus.com 2014</p>
		<p>&nbsp;</p></div>
</div>
</body> $
</html>
