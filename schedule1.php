<?php
session_start();
include ('db_bus.php');
include('db_station.php');
if(!isset($_SESSION['uid']))
{
    header('location:login.php');
}

$con=new db();
$i;
$j=1;
$stm=$_SESSION['uid'];
$con1=new db2();
$stop=$con1->getstation($stm);
?>
<html>
    <table border="10">
        <tr>
            <th>Time of arrival</th>
            <th>Bus</th>
            <th>Arrival</th>
        </tr>
        <?php if($stm==1){ for($i=0;$i<24;$i++) {?>
        <tr>
            <td><?php echo $i.":"."00"; ?></td>
            <td><?php $flag=$con->getflag(); $a=$con->getsingle($flag);echo ($a['id']); ?></td>
                
            <td><a href="timecheck.php?id=<?php $k=($i%7+1);$a=$con->getsingle($k);echo ($a['val'])?>&&time=<?php echo $i;?>">Arrived</a></td>
        </tr>        <?php } } else {for($i=0;$i<24;$i++) {?>
            <td><?php echo $i.":"."00"; ?></td>
            <td><?php $flag=$con->getflag(); $a=$con->getsingle($flag);echo ($a['id']); ?></td>
                
            <td><a href="timecheck.php?id=<?php $k=($i%7+1);$a=$con->getsingle($k);echo ($a['val'])?>&&time=<?php echo $i;?>">Arrived</a></td>
        <?php } }?>
    </table>
</html>