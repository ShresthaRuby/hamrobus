<?php
date_default_timezone_set('Asia/Kathmandu');
$from = strtotime('2014-05-01');
$today = time();
$difference = $today - $from;
echo floor($difference / (60 * 60 * 24));


//$from = strtotime('2014-1-2');
//$today = date("Y-m-d");
//$difference = $today - $from;
//echo $today;
////echo $difference;
//echo ($difference / (60 * 60 * 24));
//$today = date("Y-m-d");
//$datetime1 = new DateTime('2014-1-5');
//$datetime2 = new DateTime("$today");
//$interval = $datetime1->diff($datetime2);
//echo $interval->format('%a');
?>

