<?php 
include('db_station.php');
$con=new db1();
$name=$_POST['log'];
$pass=$_POST['pwd'];
$con->check($name,$pass);
?>
