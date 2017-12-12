<? include_once('./php/hl/functions.php');?>

<html>
<head>
<title>What we call spam</title>
</head>
<body >
<h1>What we call spam</h1>
Our definition or spam is an email that matches one of the following:
<ul>
<li>sent to an address that is not in use in the case of info@ or sales@
<li>sent to an address that is valid but only used for personal contact (never user on a site).
<li>sent with a fake from claiming to be a user at my site
</ul>
Note this does <b>NOT</b> include the tons of email received everyday to addresses sold on to hundreds of bulk emailers by sites you sign up on. For instance, a dating site I signed up on a couple years ago resulted in 7000 emails before I started bouncing all emails to that address. A refinance site, over 900 in 3 months!! I use a different email address on every site that requests one just for this reason. Sorry to all those getting those bounces because of faked froms but there is no way to unsubscribe to volumes like these and just discarding them will not stem the flow. If it's a major problem for you like it was for me get <A href=/downloads>Get SpamRescue</a> and start turning them in. It's free and it works! 
<hr>
<?php
$fnam="php/cnts/what_is_cnt.txt";
showCount($fnam,"");
?>
</body>
</html>