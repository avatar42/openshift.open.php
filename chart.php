<? include_once('./php/hl/functions.php');?>

<html>
<head>
<title>Spam Rescue Stats Chart</title>
</head>
<body >
<h1>Spam Rescue Stats Chart</h1>
Below is a chart showing the number of emails processed per day of each type.<br>
The chart only contains:<br>
<font color=blue>Scams</font>,bounces where a scammer has used a faked return email address in my domain.<br>
<font color=green>Spam</font> sent to addresses that don’t exist or were harvested off my web site by bots before I encoded them.<br>
<font color=red>Viruses</font> sent to any address.<br>
Bounces (<b>No Headers</b>) that contain insufficient header information from the original spam to trace are listed in the other category.<br>
<br>
<img src="sr_stats.jpg" width=910>
<hr>
<?php
$fnam="php/cnts/spam_chart_cnt.txt";
showCount($fnam,"");
?>
</body>
</html>