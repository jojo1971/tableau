<?php

$CAD_JPY_m1 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FUSD&lettersize=2000&callback=jQuery21007344517265996029_1465937155164&_=1465937157493');
$CAD_JPY_m3 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FUSD&lettersize=2000&callback=jQuery21007344517265996029_1465937155164&_=1465937157493');
$CAD_JPY_m5 = file_get_contents('https://gridsightfeed.dailyfx.com/GSRemoteServlet?action=dashboard&symbol=AUD%2FUSD&lettersize=2000&callback=jQuery21007344517265996029_1465937155164&_=1465937157493');


$CAD_JPY_m1 = explode('"' , $CAD_JPY_m1);
$CAD_JPY_m3 = explode('"' , $CAD_JPY_m3);
$CAD_JPY_m5 = explode('"' , $CAD_JPY_m5);
?>