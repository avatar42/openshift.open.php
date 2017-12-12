<? include_once('./php/hl/functions.php');?>

<html>
<head>
<title>Spam Rescue Stats</title>
</head>
<body >
When the app was shutdown in June of 2008 it had processed almsot 800,000 spam emails in 4.5 years but it was over 500,000 behind the flood coming in at that point of about 2000 / hour. <BR><br>
The processor fell too far behind and generated empty lists so I have uploaded the data for March 17 2007 so you can see how it looked when it worked.<br><br>
Note in the processor of running validators on my DB to weed out faked dates I found cases of wher I seemed to recieve messages more than once. I wrote another filter to weed out those duplicates as well. So you might notice about 800 emails have disappeared from the stats.<br><br>
<h1>Top 30 Lists</h1>
<a href="to30.php">Top 30 to addresses for the last 30 days ordered by volume per day.</a><? micon("to30.php"); ?><BR>
<a href="from30.php">Top 30 from addresses for the last 30 days ordered by volume per day.</a><? micon("from30.php"); ?><BR>
<a href="spam30.php">Top 30 source hostnames for the last 30 days ordered by volume per day.</a><? micon("spam30.php"); ?><BR>
<a href="abuse30.php">Top 30 source contacts for the last 30 days ordered by volume per day.</a><? micon("abuse30.php"); ?><BR>
<hr>
<h1>Biggest offenders still sending</h1>
<a href="topOct2.html">List of networks that sent me more than 2 spams since Jan 03 2004, were still sending in the last 30 days ordered by volume per day.</a>
   				<? micon("topOct2.html"); ?><BR>
<a href="topDom2.html">List of domains that sent me more than 2 spams since Jan 03 2004, were still sending in the last 30 days ordered by volume per day.</a>
   				<? micon("topDom2.html"); ?><BR>
<br>
<hr>
Note I have removed the full lists due to their limited usefulness.
<hr>
<?php
$fnam="php/cnts/spam_stats_cnt.txt";
showCount($fnam,"");
?>
</body>
</html>