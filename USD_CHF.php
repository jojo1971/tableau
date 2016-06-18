<?php
require('class_charger.php');

remp('USD_CHF',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=USD%2FCHF&lettersize=500&callback=jQuery21006147049131018207_1466169923318&_=1466169926367',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=USD%2FCHF&lettersize=1000&callback=jQuery21006147049131018207_1466169923318&_=1466169926457',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=USD%2FCHF&lettersize=2000&callback=jQuery21006147049131018207_1466169923318&_=1466169926565',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=gix&symbol=USD%2FCHF&lettersize=500&callback=jQuery21006147049131018207_1466169923318&_=1466169926363',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=gix&symbol=USD%2FCHF&lettersize=1000&callback=jQuery21006147049131018207_1466169923318&_=1466169926453',
    'https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=gix&symbol=USD%2FCHF&lettersize=2000&callback=jQuery21006147049131018207_1466169923318&_=1466169926561');
?>