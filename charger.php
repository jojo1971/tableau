
<?php

$homepage = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FJPY&lettersize=500&callback=jQuery2100577715974294235_1465906185955&_=1465906186558');
//echo $homepage;
$mot = 'dataPointsText';
/*if (preg_match("/\b$mot\b/i", $homepage)) {
    echo $mot;
    echo "Le mot a été trouvé.";
} else {
    echo "Le mot n'a pas été trouvé.";
}
echo'<br>';*/
$homepage = explode('"' , $homepage);
//print_r($homepage);
var_dump($homepage);

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
    <table>
        <tr>
            <th>AUDPPY</th>
            <th>m1</th>
            <th>Column Three</th>
        </tr>
        <tr>
            <td>Price Points</td>
            <td id="ppm1"><?php echo($homepage[3]) ?></td>
            <td>row1 Col3</td>
        </tr>
        <tr>
            <td>Trend Components</td>
            <td id="tcm1"><?php echo($homepage[7]) ?></td>
            <td>row2 Col3</td>
        </tr>
        <tr>
            <td>Matching Events</td>
            <td id="mem1"><?php echo($homepage[11]) ?></td>
            <td><a href="http://www.jquery2dotnet.com/">http://www.jquery2dotnet.com/</a>
            </td>
        </tr>
        <tr>
            <td>Current GSI Period</td>
            <td id="cpm1">row3 Col2</td>
            <td><a href="http://www.jquery2dotnet.com/">http://www.jquery2dotnet.com/</a>
            </td>
        </tr>
        <tr>
            <td>Maximum Time Remaining</td>
            <td id="mrm1">row3 Col2</td>
            <td><a href="http://www.jquery2dotnet.com/">http://www.jquery2dotnet.com/</a>
            </td>
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

