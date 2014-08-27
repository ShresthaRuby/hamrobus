<?php
include ('db_bus.php');
$con=new db();
$i;
$j=1;
?>
<html>
    <table border="10">
        <tr>
            <th>Time of arrival</th>
            <th>Bus</th>
            <th>Arrival</th>
        </tr>
        <?php for($i=0;$i<24;$i++) {?>
        <tr>
            <td><?php echo $i.":"."00"; ?></td>
            <td><?php $k=($i)%7+1;$a=$con->getsingle($k);echo ($a['id']); $j++;?></td>
            <td><a href="timecheck.php?id=<?php $k=($i%7+1);$a=$con->getsingle($k);echo ($a['val'])?>&&time=<?php echo $i;?>">Arrived</a></td>
        </tr>        <?php } ?>
    </table>
</html>