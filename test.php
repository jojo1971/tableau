<?php
function tab($val){
    ?>
    <table>
        <tr>
            <th><?php echo $val?></th>
            <th>m1</th>
            <th>m3</th>
            <th>m5</th>
        </tr>
        <tr>
            <td>Price Points</td>
            <td><?php echo($val.'_m1[3]') ?></td>
            <td><?php echo($val.'_m1[3]') ?></td>
            <td><?php echo($val.'_m1[3]') ?></td>
        </tr>

    </table>

<?php

}
?>