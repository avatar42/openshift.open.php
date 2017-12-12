<? include_once('./php/hl/functions.php');?>
<html>
<head>
<title>Spam Rescue Home</title>
</head>
<body>
<h1>This is a site I set up for a tool I wrote.</h1>
 Since the first of the year my main site has been flooded with bounce backs from a spam generator being circulated around the web. I&lsquo;m talking 75 to 250 a day on top of all the other spam and virus emails we all get. So to deal with them I wrote a tool to extract the spam from the bounce backs and report it to SpamCop. Well SpamCop seems to no longer think I should report these because they were not sent to me. This of course makes no sense to me since spamming might be illegal but pretending to be someone else obviously is. Anyway I made the changes to my tool so it can do what SpamCop does as well as the things they did not. Namely scam JavaScript and abuse emails with more than 5 links for the originating IPs and sites advertised in the spam. It can be downloaded from the link below. FOR FREE. Mainly because I do not intend to support it in any way. I wrote it and continue to update it to deal with my problem and if it helps you too then that&lsquo;s great but I don&lsquo;t have the bandwidth to change it if it does not. Sorry.<br>
<br>
<b>UPDATE 6/25/2009: As most of you know by now I ended up moving email off of dea42.net  and over to another provider about a year ago. With almost all of the spam coming in from PCs infected with trojans there seems little point in even recording them anymore. Much less trying to report any of them. These days I am setup with 3 layers of email filtering on servers separate from the web servers.  Emails are now checked for valid address for the domains they come in on then run through a spam filter and then placed in a queues to be pulled by the email client I on another server. Email addresses are assigned to domains / servers based on risk. This filters the 90% of emails that were invalid addresses and gives me an easy way to keep an attack on any one valid email address from keeping me from the rest of my email much less taking down the web server. It is insane to have to do this but since no one seems ready to secure their email servers we are not left with many choices. I leave this site up for awhile for historical purposes. A monument to the futility of trying to bail water while the flood gates are open.</b>
<br>
<br>
UPDATE 5/20/2008: And I thought the load was bad at the first of the month! Since 5/15 it has jumped to an average of over 2000 per hour! At this moment there are another 126000 spam emails sitting on the server not reflected in the queue number below. Sure would be nice if at least the big players like Yahoo would read the MX records and stop bouncing all these forgeries back on my server but that is looking like a pipe dream at this point and I might need to shut the dea42.net domain down for a few days to wake them up.
<br>
<br>
UPDATE 5/01/2008: Well the load has been so heavy lately even running 24 hours a day the processor can not dissect all the emails coming in everyday. I’m looking into ways to speed up the process but short of putting multiple servers on the task or just reporting whatever box connected to my email server (like spamcop) does I’m not sure what I can do. I don’t like either option. In the mean time I’m putting a counter below to show how many emails are in the queue to be processed.
<br>
<br>
UPDATE 6/20/2004: Well now I&lsquo;m getting a fair number of emails to all those random addresses the spam generator used so I&lsquo;ve rewritten the parser to assume anything that it can not confirm as a bounce as spam sent direct. This might result in a few reports that are really bounces by spam software but I&lsquo;m checking for bounce format of the return-path, various key words in the from address and a spam assassin info line to see if it is truly a bounce. If it has none of these things they probably need an email to configure their servers correctly. After all if servers are going to talk to servers we need to use some sort of formatting.<br>
<br>
UPDATE 6/10/2004: Well it&lsquo;s been 2 months since I&lsquo;ve had time to update this site! Between 12 hours per at my day job and the increase in faked and corrupted headers in the emails there has not been much time for anything else. I finally gave up on previous parsing methods that assumed people would follow some sort of standards and am now dumping all header lines into a buffer for sorting and filtering before attempting to process them. (See <A href=/downloads>Get SpamRescue</a>) All the spam and virus filters being added out there are only making things worse by adding badly formatted lines of their own or corrupting the headers in their reports. I&lsquo;ve seen as many as 5 Received: lines added in 1 email alone by filters. Another popular spam filter has bounced  faked spam back to me with good headers, but no body, in 1 attachment and corrupted headers in the "original email" attachment. It seems that many spam processors that actually look at Received: lines are now saying they will only process the line added by their server. As far as I know I am still the only one even attempting to process bounce backs. Anyway I think version 3.1.1 is working well enough to hold me for awhile and since I&lsquo;m down to about 30 "<A href=whatisspam.php>true</a>" spams and viruses a day I will probably not be putting too much more time into improvements till the next new trick comes along.<br>
<br>
Also I set up this site to deal with the bounce backs from all the fake email addresses used to register domains and just in case anyone gets ideas about trying to bury the source of my spam reports in emails. This site is configured to just throw away all emails not sent to the current correct address. Too bad these spammers did not think of that instead of setting me up for the bounces. Might have saved some of them their internet access.<br>
<BR>
Emails in backlog queue:
<?
    if (file_exists("qcount.txt"))
    {
        //open the file handler
        $fp=fopen("qcount.txt","r");
        //Read the previous count
        $count=fgets($fp,1024);
        //close the file.
        fclose($fp);
    }
    else
    {
        $count=0;
    }
    echo "$count";
?><BR>
<BR>
<A href=whatisspam.php>What we call spam</a> <? micon("whatisspam.php"); ?><BR>
<BR>
<A href=/downloads>Get SpamRescue</a> <? micon("downloads/index.php"); ?><BR>
<br>
<A href=/docs>SpamRescue Java Docs</a> <? micon("docs/index.html"); ?><BR>
<br>
See just where these emails are coming from and who advertises in them at <A href=/stats.php>SpamRescue Stats</a> <? micon("top30.php"); ?><BR>
<br>
See the <A href=/chart.php>chart</a> of spam volume by type for last 12 months.<? micon("sr_stats.jpg"); ?><BR>
See the <A href=/chart2.php>chart</a> of spam volume by type for last 2 years.<? micon("sr_stats2.jpg"); ?><BR>
<hr>
<?php
$fnam="php/cnts/sr_home_cnt.txt";
showCount($fnam,"");
?>
</body>
</html>
