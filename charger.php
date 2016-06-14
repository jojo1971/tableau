
<?php

$AUD_JPY_m1 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FJPY&lettersize=500&callback=jQuery2100577715974294235_1465906185955&_=1465906186558');
$AUD_JPY_m3 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FJPY&lettersize=1000&callback=jQuery21006494404904316866_1465923593734&_=1465923593927');
$AUD_JPY_m5 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FJPY&lettersize=2000&callback=jQuery21007344517265996029_1465937154955&_=1465937155417');
$AUD_USD_m1 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FUSD&lettersize=500&callback=jQuery21007344517265996029_1465937155161&_=1465937157277');
$AUD_USD_m3 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FUSD&lettersize=1000&callback=jQuery21007344517265996029_1465937155164&_=1465937157373');
$AUD_USD_m5 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FUSD&lettersize=2000&callback=jQuery21007344517265996029_1465937155164&_=1465937157493');
$CAD_JPY_m1 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FUSD&lettersize=2000&callback=jQuery21007344517265996029_1465937155164&_=1465937157493');
$CAD_JPY_m3 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FUSD&lettersize=2000&callback=jQuery21007344517265996029_1465937155164&_=1465937157493');
$CAD_JPY_m5 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FUSD&lettersize=2000&callback=jQuery21007344517265996029_1465937155164&_=1465937157493');
//echo $homepage;

$mot = 'dataPointsText';
/*if (preg_match("/\b$mot\b/i", $homepage)) {
    echo $mot;
    echo "Le mot a été trouvé.";
} else {
    echo "Le mot n'a pas été trouvé.";
}
echo'<br>';*/
$AUD_JPY_m1 = explode('"' , $AUD_JPY_m1);
$AUD_JPY_m3 = explode('"' , $AUD_JPY_m3);
$AUD_JPY_m5 = explode('"' , $AUD_JPY_m5);
$AUD_USD_m1 = explode('"' , $AUD_USD_m1);
$AUD_USD_m3 = explode('"' , $AUD_USD_m3);
$AUD_USD_m5 = explode('"' , $AUD_USD_m5);
$CAD_JPY_m1 = explode('"' , $CAD_JPY_m1);
$CAD_JPY_m3 = explode('"' , $CAD_JPY_m3);
$CAD_JPY_m5 = explode('"' , $CAD_JPY_m5);
//print_r($homepage);
var_dump($AUD_JPY_m1);
function rent($nbr){
    $currentTab = array();
    $current1 = preg_match('/[0-9]+/', $nbr,$currentTab);
    return $currentTab[0]/1000;
}

echo $AUD_JPY_m1[21];
/*$currentTab = array();
$current1 = preg_match('/[0-9]+/', $m3[16],$currentTab);
print_r($currentTab[0]);*/
//echo date('H:i', 1465915068);
?>
<!DOCTYPE>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <script rel="stylesheet" type="text/javascript"src="jquery.js"></script>

    <style rel="stylesheet" type="text/css">

body {
    font-size: 12pt;
    font-family: Calibri;
    padding : 10px;
}
table {
    border: 1px solid black;
    display: inline-block;
}
th {
    border: 1px solid black;
    padding: 5px;
    background-color:grey;
    color: white;
}
td {
    border: 1px solid black;
    padding: 5px;
}
input {
    font-size: 12pt;
    font-family: Calibri;
}
    </style>
</head>


</head>


<body>



<div id="dvData">
    <!--AUD/JPY-->
    <table>
        <tr>
            <th>AUD/JPY</th>
            <th>m1</th>
            <th>m3</th>
            <th>m5</th>
        </tr>
        <tr>
            <td>Price Points</td>
            <td><?php echo($AUD_JPY_m1[3]) ?></td>
            <td><?php echo($AUD_JPY_m3[3]) ?></td>
            <td><?php echo($AUD_JPY_m5[3]) ?></td>
        </tr>
        <tr>
            <td>Trend Components</td>
            <td><?php echo($AUD_JPY_m1[7]) ?></td>
            <td><?php echo($AUD_JPY_m3[7]) ?></td>
            <td><?php echo($AUD_JPY_m5[7]) ?></td>
        </tr>
        <tr>
            <td>Matching Events</td>
            <td><?php echo($AUD_JPY_m1[11]) ?></td>
            <td><?php echo($AUD_JPY_m3[11]) ?></td>
            <td><?php echo($AUD_JPY_m5[11]) ?></td>
        </tr>
        <tr>
            <td>Current GSI Period</td>
            <td><?php echo date('H:i',rent($AUD_JPY_m1[16]))?>-<?php echo date('H:i',rent($AUD_JPY_m1[18]));?></td>
            <td><?php echo date('H:i',rent($AUD_JPY_m3[16]))?>-<?php echo date('H:i',rent($AUD_JPY_m3[18]));?></td>
            <td><?php echo date('H:i',rent($AUD_JPY_m5[16]))?>-<?php echo date('H:i',rent($AUD_JPY_m5[18]));?></td>
        </tr>
        <tr>
            <td>Maximum Time Remaining</td>
            <td><?php echo $AUD_JPY_m1[21]?></td>
            <td><?php echo $AUD_JPY_m3[21]?></td>
            <td><?php echo $AUD_JPY_m5[21]?></td>
        </tr>
    </table>

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
            <td><?php echo ${$val.'_m1'}[3] ?></td>
            <td><?php echo ${$val.'_m1'}[3] ?></td>
            <td><?php echo ${$val.'_m1'}[3] ?></td>
        </tr>

    </table>

    <?php

    }
tab('CAD_JPY');
    ?>
</div>
<!--
<script>
    var ppm1 = $('#dataPointsValue').html();
    var tcm1 = $('#trendComponentsValue').html();
    var mem1 = $('#matchingResultsValue').html();
    var cpm1 = $('#gsiTimeValue').html();
    var mrm1 = $('#countdownValue').html();

    $('#ppm1').html(ppm1);
    $('#tcm1').html(tcm1);
    $('#mem1').html(mem1);
    $('#cpm1').html(cpm1);
    $('#mrm1').html(mrm1);


    $("#btnExport").click(function (e) {
    window.open('data:application/vnd.ms-excel,' + $('#dvData').html());
    e.preventDefault();
});
</script>-->
</body>
</html>

