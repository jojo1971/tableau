
<?php
//Entête
$AUD_JPY_m1 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FJPY&lettersize=500&callback=jQuery2100577715974294235_1465906185955&_=1465906186558');
$AUD_JPY_m3 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FJPY&lettersize=1000&callback=jQuery21006494404904316866_1465923593734&_=1465923593927');
$AUD_JPY_m5 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FJPY&lettersize=2000&callback=jQuery21007344517265996029_1465937154955&_=1465937155417');

$AUD_JPY_m1 = explode('"' , $AUD_JPY_m1);
$AUD_JPY_m3 = explode('"' , $AUD_JPY_m3);
$AUD_JPY_m5 = explode('"' , $AUD_JPY_m5);


function rent($nbr){
    $currentTab = array();
    $current1 = preg_match('/[0-9]+/', $nbr,$currentTab);
    return $currentTab[0]/1000;
}
//tableau pourcentage
$tab_AUD_JPY_m1 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=gix&symbol=AUD%2FJPY&lettersize=500&callback=jQuery21007426540618544311_1466061036132&_=1466061036231');
$tab_AUD_JPY_m3 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=gix&symbol=AUD%2FJPY&lettersize=1000&callback=jQuery210034417853539139975_1466061991189&_=1466062000258');
$tab_AUD_JPY_m5 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=gix&symbol=AUD%2FJPY&lettersize=2000&callback=jQuery210034417853539139975_1466061991189&_=1466061999928');



$tab_AUD_JPY_m1 = explode(',',$tab_AUD_JPY_m1);
$tab_AUD_JPY_m3 = explode(',',$tab_AUD_JPY_m3);
$tab_AUD_JPY_m5 = explode(',',$tab_AUD_JPY_m5);

$priceUp_AUD_JPY_m1 =  substr($tab_AUD_JPY_m1[7],17,7);
$sizeUp_AUD_JPY_m1 = substr($tab_AUD_JPY_m1[8],10,2).'%';
$priceDown_AUD_JPY_m1 =  substr($tab_AUD_JPY_m1[19],10,7);
$sizeDown_AUD_JPY_m1 = substr($tab_AUD_JPY_m1[20],10,2).'%';

$priceUp_AUD_JPY_m3 =  substr($tab_AUD_JPY_m3[7],17,7);
$sizeUp_AUD_JPY_m3 = substr($tab_AUD_JPY_m3[8],10,2).'%';
$priceDown_AUD_JPY_m3 =  substr($tab_AUD_JPY_m3[19],10,7);
$sizeDown_AUD_JPY_m3 = substr($tab_AUD_JPY_m3[20],10,2).'%';

$priceUp_AUD_JPY_m5 =  substr($tab_AUD_JPY_m5[7],17,7);
$sizeUp_AUD_JPY_m5 = substr($tab_AUD_JPY_m5[8],10,2).'%';
$priceDown_AUD_JPY_m5 =  substr($tab_AUD_JPY_m5[19],10,7);
$sizeDown_AUD_JPY_m5 = substr($tab_AUD_JPY_m5[20],10,2).'%';


/*$datas = array();

$datas[] = array('price' =>$priceUp_AUD_JPY_m5, 'size' =>$sizeUp_AUD_JPY_m5, 'priceD'=>$priceDown_AUD_JPY_m5,'sizeD'=> $sizeDown_AUD_JPY_m5);
require('class.csv.php');
CSV::export($datas,'Export Data');*/

date_default_timezone_set('Europe/Luxembourg');

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
    <p><?php echo 'Le '.date('d/m/Y', time()).' à '.date('H:i', time());
        ?></p>
    <table>
        <tr>
            <th style="background-color: gray">AUD/JPY</th>
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
        <tr>
            <td>IndicatorUp</td>
            <td><?php echo $priceUp_AUD_JPY_m1?></td>
            <td><?php echo $priceUp_AUD_JPY_m3?></td>
            <td><?php echo $priceUp_AUD_JPY_m5?></td>

        </tr>   <tr>
            <td>SizeUp</td>
            <td><?php echo $sizeUp_AUD_JPY_m1 ?></td>
            <td><?php echo $sizeUp_AUD_JPY_m3 ?></td>
            <td><?php echo $sizeUp_AUD_JPY_m5 ?></td>

        </tr>   <tr>
            <td>IndicatorDown</td>
            <td><?php echo $priceDown_AUD_JPY_m1 ?></td>
            <td><?php echo $priceDown_AUD_JPY_m3 ?></td>
            <td><?php echo $priceDown_AUD_JPY_m5 ?></td>

        </tr>   <tr>
            <td>SizeDown</td>
            <td><?php echo $sizeDown_AUD_JPY_m1?></td>
            <td><?php echo $sizeDown_AUD_JPY_m3?></td>
            <td><?php echo $sizeDown_AUD_JPY_m5?></td>

        </tr>
    </table>


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

