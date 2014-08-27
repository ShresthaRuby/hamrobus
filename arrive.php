<?php
session_start();
 date_default_timezone_set('Asia/Kathmandu');
include('db_bus.php');
$con=new db();
$exp=$_GET['exp'];
$bus=$_GET['bus'];
$id=$_SESSION['id'];
$date=date("Y-m-d");
$h=  \date("h");
$m=  \date("h");
$time=$h*60+$m;
        
//echo $id." ".$date." ".$exp." ".$time." ".$bus;
$con->save($id,$date,$exp,$time,$bus);
?>
