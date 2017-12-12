<?php
//===== Globals ===============
//$host="localhost";
$host="www.dea42.com";
$debug=false;

//=======show date as string whether java or C timestamp===========
function showDate($timestamp) {
    if ($timestamp > 10000000000)
        $rtn = date("M d Y H:i:s (J)", $timestamp/1000);
    else
        $rtn = date("M d Y H:i:s ", $timestamp);

    return $rtn;
}

//=======return number of sec for date===========
function date2Timestamp($date) {
    //2003-04-12 00:05:43
    if ($date == null) {
        return 0;
    }
    list($y, $mth, $d, $h, $min, $sec) = sscanf($date,"%d-%d-%d %d:%d:%d");
    return mktime ( $h, $min, $sec, $mth, $d, $y);
}

//=======show date only as string whether java or C timestamp===========
function showYMD($timestamp) {

    if ($timestamp < 1)
        $rtn = "";
    if ($timestamp > 10000000000)
        $rtn = date("Y/m/d (J)", $timestamp/1000);
    else
        $rtn = date("Y/m/d ", $timestamp);

    return $rtn;
}

//=======show date only part of date string===========
function onlyDate($date) {

    if ($date == null)
        $rtn = "";
    else
        $rtn = substr($date,0,10);

    return $rtn;
}

//======= increment and display view count for page
function showCount($cntFile,$msg) {
    if (file_exists($cntFile))
    {
        //open the file handler
        $fp=fopen($cntFile,"r");
        //Read the previous count
        $count=fgets($fp,1024);
        //close the file.
        fclose($fp);
    }
    else
    {
        $count=0;
    }
    $fw=fopen($cntFile,"w");
    //Increment the counter
    $cnew=$count+1;
    //write the counter back to the log file ie., acc.txt
    $countnew=fputs($fw,$count+1);
    //Display VISITOR NUMBER

    echo "<br>This page has been viewed $cnew times $msg";
    fclose($fw);
}

//======= increment and display view count for page
function getCount($debug,$db,$cntFile,$msg) {
    $cntID=0;
    $count=0;
    $query = "SELECT COUNT_ID, COUNT_NAME, COUNT from counts WHERE COUNT_NAME ='".$cntFile."'";
    if ($debug)
    {
        echo "Query=$query<BR>\n";
    }
    $result = mysql_query($query,$db);
    if ($myrow = mysql_fetch_array($result))
    {
        $cntID=$myrow["COUNT_ID"];
        $count=$myrow["COUNT"];
    }
    $cnew=$count+1;

    if($cntID == "0")
    { //insert
        $query = "INSERT into counts values(0";
        $query = $query.",'".$cntFile."'";
        $query = $query.",".$cnew;
        $query = $query.")";
    } else { // update
        $query = "update counts SET ";
        $query = $query."  COUNT=".$cnew;
        $query = $query." where COUNT_ID=".$cntID;
    }

    if ($debug)
    {
        echo "Query=$query<BR>\n";
    }
    $result = mysql_query($query,$db);
    if ($result != 1)
    {
        $debug = true;
        echo "Query=$query<BR>\n";
    }
    if ($debug)
    {
        echo "result=$result<BR>\n";
    }

    echo "<br>This page has been viewed $cnew times $msg";
}


//=======Select icon by mod date===========
function micon($link) {
    $now = time();
    $mod = filemtime($link);
    $mtime = date ("M d Y",$mod);
    $diff = $now - $mod;
    $lgif = "/img/spacer.gif";
    if ($diff < 2592000) // 30 days
    {
        $lgif = "/img/chg.gif";
    }

    echo "<img src=".$lgif." WIDTH=35 HEIGHT=19 HSPACE=0 VSPACE=0 BORDER=0 ALT='Updated ". $mtime."'>(". $mtime.")";
}

//=======get size of file in kb===========
function getKb($link) {
    if (file_exists($link))
    {
        $wsize = round (filesize($link)/1024);
    }
    else
    {
        $wsize=0;
    }
    return $wsize;
}

//=======Show time as years and months===========
function showMths($mths) {

    if ($mths < 18)
    {
        echo floor($mths)." mths";
    }
    else
    {
        $yrs = floor($mths/12);
        $mths = $mths - ($yrs * 12);
        echo $yrs." yrs ";
        if (floor($mths) > 0)
        {
            echo floor($mths)." mths";
        }
    }
}

//=======Return the key word SELECTED if val and option match===========
function isSelected($val,$option) {
    $cmp = strcmp($val,$option);
    if ($cmp == 0)
        return " SELECTED";
    else
        return "";
}

//=======Output JSP forward message and redirect ===========
function forwardJSP($newPage,$title) {
    echo "<html>";
    echo "<head>";
    echo "<meta http-equiv=refresh content=1;url=".$newPage." >";
    echo "<link rel=stylesheet type=\"text/css\" href=\"/css/site.css\">";
    echo "<title>".$title."</title>";
    echo "</head>";
    echo "<h1>The page &quot;".$title."&quot; has been converted to JSP</h1>";
    echo "<body >I am redirecting you to the new version at <A href=".$newPage." >".$newPage."</A>";
    echo "</body>";
    echo "</html>";
}
?>