<?php

$AUD_USD_m1 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FUSD&lettersize=500&callback=jQuery21007344517265996029_1465937155161&_=1465937157277');
$AUD_USD_m3 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FUSD&lettersize=1000&callback=jQuery21007344517265996029_1465937155164&_=1465937157373');
$AUD_USD_m5 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FUSD&lettersize=2000&callback=jQuery21007344517265996029_1465937155164&_=1465937157493');


$AUD_USD_m1 = explode('"' , $AUD_USD_m1);
$AUD_USD_m3 = explode('"' , $AUD_USD_m3);
$AUD_USD_m5 = explode('"' , $AUD_USD_m5);
?>
   <!-- AUD/USD-->
    <table>
        <tr>
            <th>AUD/USD</th>
            <th>m1</th>
            <th>m3</th>
            <th>m5</th>
        </tr>
        <tr>
            <td>Price Points</td>
            <td><?php echo($AUD_USD_m1[3]) ?></td>
            <td><?php echo($AUD_USD_m3[3]) ?></td>
            <td><?php echo($AUD_USD_m5[3]) ?></td>
        </tr>
        <tr>
            <td>Trend Components</td>
            <td><?php echo($AUD_USD_m1[7]) ?></td>
            <td><?php echo($AUD_USD_m3[7]) ?></td>
            <td><?php echo($AUD_USD_m5[7]) ?></td>
        </tr>
        <tr>
            <td>Matching Events</td>
            <td><?php echo($AUD_USD_m1[11]) ?></td>
            <td><?php echo($AUD_USD_m3[11]) ?></td>
            <td><?php echo($AUD_USD_m5[11]) ?></td>
        </tr>
        <tr>
            <td>Current GSI Period</td>
            <td><?php echo date('H:i',rent($AUD_USD_m1[16]))?>-<?php echo date('H:i',rent($AUD_USD_m1[18]));?></td>
            <td><?php echo date('H:i',rent($AUD_USD_m3[16]))?>-<?php echo date('H:i',rent($AUD_USD_m3[18]));?></td>
            <td><?php echo date('H:i',rent($AUD_USD_m5[16]))?>-<?php echo date('H:i',rent($AUD_USD_m5[18]));?></td>
        </tr>
        <tr>
            <td>Maximum Time Remaining</td>
            <td><?php echo $AUD_USD_m1[21]?></td>
            <td><?php echo $AUD_USD_m3[21]?></td>
            <td><?php echo $AUD_USD_m5[21]?></td>
        </tr>
    </table>

?>