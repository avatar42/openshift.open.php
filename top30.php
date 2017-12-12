<? include_once('./php/hl/functions.php');?>
<html>
<head>
<title>Top 30 Lists</title>
</head>
<body>
<h1>Top 30 Lists</h1>
<a href="to30.php">Top 30 to addresses for the last 30 days ordered by volume per day.</a><? micon("to30.php"); ?><BR>
<a href="from30.php">Top 30 from addresses for the last 30 days ordered by volume per day.</a><? micon("from30.php"); ?><BR>
<a href="spam30.php">Top 30 source hostnames for the last 30 days ordered by volume per day.</a><? micon("spam30.php"); ?><BR>
<a href="abuse30.php">Top 30 source contacts for the last 30 days ordered by volume per day.</a><? micon("abuse30.php"); ?><BR>
<hr>
<?php
$fnam="php/cnts/top30_stats_cnt.txt";
showCount($fnam,"");
?>
</body>
</html>
