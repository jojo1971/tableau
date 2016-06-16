<?php
function tab($val1_3, $val3_3, $val5_3, $val1_16){
    $i = 1;
    ?>
   <table>
        <tr>
            <th>AUD/USD</th>
            <th>m1</th>
            <th>m3</th>
            <th>m5</th>
        </tr>
        <tr>
            <td>Price Points</td>
            <td><?php echo $val1_3 ?></td>
            <td><?php echo $val3_3 ?></td>
            <td><?php echo $val5_3 ?></td>
        </tr>
        <tr>
            <td>Trend Components</td>
            <td><?php echo $val1_3 ?></td>
            <td><?php echo $val3_3 ?></td>
            <td><?php echo $val5_3 ?></td>
        </tr>
        <tr>
            <td>Matching Events</td>
            <td><?php echo $val1_3 ?></td>
            <td><?php echo $val3_3 ?></td>
            <td><?php echo $val5_3 ?></td>
        </tr>
        <tr>
            <td>Current GSI Period</td>
            <td><?php echo date('H:i',rent($val1_16))?>-<?php echo date('H:i',rent($val1_16));?></td>
            <td><?php echo date('H:i',rent($val1_16))?>-<?php echo date('H:i',rent($val1_16));?></td>
            <td><?php echo date('H:i',rent($val1_16))?>-<?php echo date('H:i',rent($AUD_USD_m5[18]));?></td>
        </tr>
        <tr>
            <td>Maximum Time Remaining</td>
            <td><?php echo $AUD_USD_m1[21]?></td>
            <td><?php echo $AUD_USD_m3[21]?></td>
            <td><?php echo $AUD_USD_m5[21]?></td>
        </tr>
    </table>
<?php

}
?>