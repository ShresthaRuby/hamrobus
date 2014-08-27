<?php
include('db_bus.php');
$con=new db();
$a=$_POST['phone'];
$b=$_POST['feed'];
$con->addfeed($a,$b);
header("location:thankyou.php");
?>
