<?php
date_default_timezone_set('Asia/Kathmandu');
session_start();
//{
   //header('location:index.php');
//}
//$conn=new db1();
//$station=$conn->get_user($_SESSION['uid']);
include('db_bus.php');
$con=new db();
//$id=$_GET['id'];
//$time=$_GET['time'];
//echo $time;
$h=date("h");
$m=date("i");
$d=date('Y-m-d');
//echo $m;

$exp=$time*60;
$act=$h*60+$m;
$con->save($d,$exp,$act,$id);
$con->getflag();
$con->retrieve();
?>



