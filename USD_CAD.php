<?php
require('class_charger.php');

remp('USD_CAD',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=USD%2FCAD&lettersize=500&callback=jQuery21006147049131018207_1466169923318&_=1466169925869',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=USD%2FCAD&lettersize=1000&callback=jQuery21006147049131018207_1466169923318&_=1466169925971',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=USD%2FCAD&lettersize=2000&callback=jQuery21006147049131018207_1466169923318&_=1466169926073',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=gix&symbol=USD%2FCAD&lettersize=500&callback=jQuery21006147049131018207_1466169923318&_=1466169925865',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=gix&symbol=USD%2FCAD&lettersize=1000&callback=jQuery21006147049131018207_1466169923318&_=1466169925967',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=gix&symbol=USD%2FCAD&lettersize=2000&callback=jQuery21006147049131018207_1466169923318&_=1466169926069');
?>