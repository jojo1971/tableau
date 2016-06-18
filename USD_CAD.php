<?php
function rent($nbr){
    $currentTab = array();
    $current1 = preg_match('/[0-9]+/', $nbr,$currentTab);
    return $currentTab[0]/1000;
}

function remp($r, $li1, $li2, $li3, $li4, $li5, $li6){


${$r . '_m1'} = file_get_contents($li1);
${$r . '_m3'} = file_get_contents($li2);
${$r . '_m5'} = file_get_contents($li3);

${$r . '_m1'} = explode('"', ${$r . '_m1'});
${$r . '_m3'} = explode('"', ${$r . '_m3'});
${$r . '_m5'} = explode('"', ${$r . '_m5'});


${'tab_' . $r . '_m1'} = file_get_contents($li4);
${'tab_' . $r . '_m3'} = file_get_contents($li5);
${'tab_' . $r . '_m5'} = file_get_contents($li6);


${'tab_' . $r . '_m1'} = explode(',', ${'tab_' . $r . '_m1'});
${'tab_' . $r . '_m3'} = explode(',', ${'tab_' . $r . '_m3'});
${'tab_' . $r . '_m5'} = explode(',', ${'tab_' . $r . '_m5'});

${'priceUp_' . $r . '_m1'} = substr(${'tab_' . $r . '_m1'}[7], 17, 6);
${'sizeUp_' . $r . '_m1'} = substr(${'tab_' . $r . '_m1'}[8], 10, 2) . '%';
${'priceDown_' . $r . '_m1'} = substr(${'tab_' . $r . '_m1'}[19], 10, 6);
${'sizeDown_' . $r . '_m1'} = substr(${'tab_' . $r . '_m1'}[20], 10, 2) . '%';

${'priceUp_' . $r . '_m3'} = substr(${'tab_' . $r . '_m3'}[7], 17, 6);
${'sizeUp_' . $r . '_m3'} = substr(${'tab_' . $r . '_m3'}[8], 10, 2) . '%';
${'priceDown_' . $r . '_m3'} = substr(${'tab_' . $r . '_m3'}[19], 10, 6);
${'sizeDown_' . $r . '_m3'} = substr(${'tab_' . $r . '_m3'}[20], 10, 2) . '%';

${'priceUp_' . $r . '_m5'} = substr(${'tab_' . $r . '_m5'}[7], 17, 6);
${'sizeUp_' . $r . '_m5'} = substr(${'tab_' . $r . '_m5'}[8], 10, 2) . '%';
${'priceDown_' . $r . '_m5'} = substr(${'tab_' . $r . '_m5'}[19], 10, 6);
${'sizeDown_' . $r . '_m5'} = substr(${'tab_' . $r . '_m5'}[20], 10, 2) . '%';
?>
<!DOCTYPE>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <script rel="stylesheet" type="text/javascript" src="jquery.js"></script>
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


<body>
<p>
    <?php
    date_default_timezone_set('Europe/Luxembourg');
    $date = date('d/m/y', time());
    $heure = date('H\hi', time());

    echo 'Le ' . $date . ' à ' . $heure;

    ?>
</p>
<table>

    <tr>
        <th style="background-color: gray"><?php echo $r ?></th>
        <th>m1</th>
        <th>m3</th>
        <th>m5</th>
    </tr>
    <tr>
        <td>Price Points</td>
        <td><?php echo(${$r . '_m1'}[3]) ?></td>
        <td><?php echo(${$r . '_m3'}[3]) ?></td>
        <td><?php echo(${$r . '_m5'}[3]) ?></td>
    </tr>
    <tr>
        <td>Trend Components</td>
        <td><?php echo(${$r . '_m1'}[7]) ?></td>
        <td><?php echo(${$r . '_m3'}[7]) ?></td>
        <td><?php echo(${$r . '_m5'}[7]) ?></td>
    </tr>
    <tr>
        <td>Matching Events</td>
        <td><?php echo(${$r . '_m1'}[11]) ?></td>
        <td><?php echo(${$r . '_m3'}[11]) ?></td>
        <td><?php echo(${$r . '_m5'}[11]) ?></td>
    </tr>
    <tr>
        <td>Current GSI Period</td>
        <td><?php echo date('H:i', rent(${$r . '_m1'}[16])) ?>-<?php echo date('H:i', rent(${$r . '_m1'}[18])); ?></td>
        <td><?php echo date('H:i', rent(${$r . '_m3'}[16])) ?>-<?php echo date('H:i', rent(${$r . '_m3'}[18])); ?></td>
        <td><?php echo date('H:i', rent(${$r . '_m5'}[16])) ?>-<?php echo date('H:i', rent(${$r . '_m5'}[18])); ?></td>
    </tr>
    <tr>
        <td>Maximum Time Remaining</td>
        <td><?php echo ${$r . '_m1'}[21] ?></td>
        <td><?php echo ${$r . '_m3'}[21] ?></td>
        <td><?php echo ${$r . '_m5'}[21] ?></td>
    </tr>
    <tr>
        <td>IndicatorUp</td>
        <td><?php echo ${'priceUp_' . $r . '_m1'} ?></td>
        <td><?php echo ${'priceUp_' . $r . '_m3'} ?></td>
        <td><?php echo ${'priceUp_' . $r . '_m5'} ?></td>

    </tr>
    <tr>
        <td>SizeUp</td>
        <td><?php echo ${'sizeUp_' . $r . '_m1'} ?></td>
        <td><?php echo ${'sizeUp_' . $r . '_m3'} ?></td>
        <td><?php echo ${'sizeUp_' . $r . '_m5'} ?></td>

    </tr>
    <tr>
        <td>IndicatorDown</td>
        <td><?php echo ${'priceDown_' . $r . '_m1'} ?></td>
        <td><?php echo ${'priceDown_' . $r . '_m3'} ?></td>
        <td><?php echo ${'priceDown_' . $r . '_m5'} ?></td>

    </tr>
    <tr>
        <td>SizeDown</td>
        <td><?php echo ${'sizeDown_' . $r . '_m1'} ?></td>
        <td><?php echo ${'sizeDown_' . $r . '_m3'} ?></td>
        <td><?php echo ${'sizeDown_' . $r . '_m5'} ?></td>

    </tr>
</table>
<?php
}
remp('USD_CAD',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=USD%2FCAD&lettersize=500&callback=jQuery21006147049131018207_1466169923318&_=1466169925869',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=USD%2FCAD&lettersize=1000&callback=jQuery21006147049131018207_1466169923318&_=1466169925971',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=USD%2FCAD&lettersize=2000&callback=jQuery21006147049131018207_1466169923318&_=1466169926073',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=gix&symbol=USD%2FCAD&lettersize=500&callback=jQuery21006147049131018207_1466169923318&_=1466169925865',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=gix&symbol=USD%2FCAD&lettersize=1000&callback=jQuery21006147049131018207_1466169923318&_=1466169925967',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=gix&symbol=USD%2FCAD&lettersize=2000&callback=jQuery21006147049131018207_1466169923318&_=1466169926069');

?>

</body>
</html>