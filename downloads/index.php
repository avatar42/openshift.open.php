<? include_once('../php/hl/functions.php');?>
<HTML> 
<head>
<title>SpamRescue Downloads</title>
</head>
<body>
<table border=1 width="100%">
<tr><td>Rev</td><td>Changes</td><td>link</td></tr>
<tr><td valign=top> 3.2.2 </td><td>Fix bug in chain validator when by host is invalid.</td><td><a href=spamRescue_v3.2.2.zip>download</a></td></tr>
<tr><td valign=top> 3.2.1 </td><td>Fix bug in Received chain validator.</td><td><a href=spamRescue_v3.2.1.zip>download</a></td></tr>
<tr><td valign=top> 3.2 </td><td>Process all non bounces as spam.</td><td>&nbsp; </td></tr>
<tr><td valign=top> 3.1.5 </td><td>Remove [in.file].done before attempt to rename and fail if rename fails.</td><td>&nbsp; </td></tr>
<tr><td valign=top> 3.1.4 </td><td>Add check for spam traps in x-envelope-to: (virtual BCC) line.</td><td>&nbsp; </td></tr>

<tr><td valign=top>3.1.3 </td><td>Add check for spam traps in CC: line.</td><td><a href=spamRescue_v3.1.3.zip>download</a></td></tr>
<tr><td valign=top>3.1.2 </td><td>Changed to only set bounceDom from line with myISP in Received: line.</td><td>&nbsp; </td></tr>
<tr><td valign=top>3.1.1 </td><td>Change Exception handling so if DB is down it errors straight out. Or if whois status contains &quot;Unable to connect to&quot; it now creates .redo file to mark to be processed later.</td><td><a href=spamRescue_v3.1.1.zip>download</a></td></tr>

<tr><td valign=top>3.1 </td><td>Read all header lines into a HashMap of Vectors and process after so order is not longer an issue. Also move header parsing code to SpamInfo class.</td><td>&nbsp; </td></tr>
<tr><td valign=top>3.0.4 </td><td>Change mail box parser to save files .em instead of .eml so virus software will not remove the files when you try view them.</td><td>&nbsp; </td></tr>
<tr><td valign=top>3.0.3 </td><td>Fix a couple problems parsing odd Received lines and add some date support for more date formats.</td><td>&nbsp; </td></tr>
<tr><td valign=top>3.0.2 </td><td>Only clear buffer on first instance of inSpam indication. (Ignore Return-Path: inside bounced spam attachment).</td><td>&nbsp; </td></tr>
<tr><td valign=top>3.0.1 </td><td>Add email parm for source hostname.</td><td>&nbsp; </td></tr>
<tr><td valign=top>3.0 </td><td>Rewrite Received: line parsing to validate all entries against each other and against the by from the previous line to weed out forgeries.</td><td>&nbsp; </td></tr>
<tr><td valign=top>2.2.4 </td><td>Throw Exception if source is reported to be my.domain or my.IP.</td><td>&nbsp; </td></tr>
<tr><td valign=top>2.2.3 </td><td>Ignore hostname/IP following HELO if preceeded by unknown.</td><td>&nbsp; </td></tr>
<tr><td valign=top>2.2.2 </td><td>Mark those with (HELO my.domain) as virus email.</td><td>&nbsp; </td></tr>
<tr><td valign=top>2.2.1 </td><td>Fix prob with box parser where it would sometimes see a From in a message and take it as the start of the next one.</td><td>&nbsp; </td></tr>
<tr><td valign=top>2.2 </td><td>Add code to decode HTML where characters have been converted to numbers to hide link from the parser. Also changed code insert the orginal spam (with minor clean up) as text (see 2.1) and the decoded version as the attachment.</td><td>&nbsp; </td></tr>
 <tr><td valign=top>2.1.1 </td><td>Change parseRecLine() to set host name to IP if no host name found.</td><td>&nbsp; </td></tr>
 <tr><td valign=top>2.1 </td><td>Add spam as text to bottom of text part of report via ATTACHMENT parm. See examples.</td><td>&nbsp; </td></tr>
 <tr><td valign=top>2.0 </td><td>Add class for detecting viruses.</td><td>&nbsp; </td></tr>
 <tr><td valign=top>1.2.4 </td><td>Fix bug in From parsing.</td><td>&nbsp; </td></tr>
<tr><td valign=top>1.2.3 </td><td>Add code to verify source hostname matches source IP. If not use the IP instead</td><td><a href=spamRescue_v1.2.3.zip>download</a></td></tr>
<tr><td valign=top>1.2.2 </td><td>Set batch during parseBox() and then set from parent dir instead of setting to current time  
at start of run so partial runs still have the correct batch label for emails.</td><td>&nbsp; </td></tr>
<tr><td valign=top>1.2.1 </td><td>Fix a couple of problems with the parser</td><td>&nbsp; </td></tr>
<tr><td valign=top>1.2 </td><td>Add code to report virus emails </td><td>&nbsp; </td></tr>
<tr><td valign=top>1.1.1 </td><td>Change code to log exception from send err and not create report if send had error. Also added GenStats</td><td><a href=spamRescue_v1.1.1.zip>download</a></td></tr>
<tr><td valign=top>1.1 </td><td>First public version.<br>Convert to use HSQL DB</td><td>&nbsp;</td></tr>
<tr><td>1.0 </td><td>add code to send directly to abusers instead of SpamCop</td><td>&nbsp; </td></tr>
<tr><td>0.6 </td><td>filter spam with Content-Type: application/ as possible virus emails</td><td>&nbsp; </td></tr>
<tr><td>0.5 </td><td>add save of decoded version if has decoded Javascript</td><td> &nbsp; </td></tr>
<tr><td>0.4 </td><td>add timestamp to output paths</td><td>&nbsp; </td></tr>
</table>
<br>
Required 3rd party tools:<br>
<table border=1 width="100%">
<tr><td>HSQLDB</td><td><a href=http://sourceforge.net/project/showfiles.php?group_id=23316&release_id=117043>here</a> hsqldb_1_7_1.zip</td></tr>
<tr><td>Rhino</td><td><a href=http://www.mozilla.org/rhino/download.html>here</a> rhino15R41.zip</td></tr>
<tr><td>Java 1.4.2</td><td><a href=http://java.sun.com/j2se/1.4.2/download.html>here</a></td></tr>
<tr><td>Java Mail</td><td><a href=http://java.sun.com/products/javamail/downloads/index.html>here</a></td></tr>
<tr><td>JavaBeans Activation Framework</td><td><a href=http://java.sun.com/products/javabeans/glasgow/jaf.html>here</a></td></tr>
</table>
<br>
<br>
Installation:<br>
I’ve tried to make everything pretty much self explanatory.<br> 
1.) You will need to install the above tools per their instructions.<br>
2.) Unzip the spamRescue zipfile. (configs assume /spam)<br>
3.) Edit SpamRescue.bat to match where paths to where you installed these tools.<br>
4.) Edit spamRescue.properties to reflect you domain, email addresses and where you want the working directories to be. Also there are a few options such as whois support. Every option has a comment with it.<br>
5.) Edit spam.txt and bounce.txt. Note all %%WORD%%s will be swapped out by the program with live data.<br>
6.) Download mail box (squirrelmail is what was tested with but I think others should be close enough to work) with spam and bounces in it to file path set in spamRescue.properties.<br>
7.) Run SpamRescue.bat –h to see options for running SpamRescue.<br>
<br>
I suggest running it with –ns (no send) till you get the feel of it.<br>
<br>
If you find a problem you can let me know at bugs@spamRescue.net but as I’ve said before I wrote this for my use and I don’t have the bandwidth to make it generic. But I’m figuring it will work for many of you. If you come up with a new whois class send it along and I’ll post it here too. (Note source for my child class is included in the zip.)<br>
<br>
I have left out most of the source since the reason for me writing this in the first place is to handle all the script kiddies out there running this spam generator and I sure don’t want to teach them how to be more effective.<br>
<br>
Dave
<hr>
<?php
$fnam="spam_downloads_cnt.txt";
showCount($fnam," since 4/12/2004");
?>
</body>
</HTML> 