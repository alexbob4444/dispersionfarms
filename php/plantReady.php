<?php
include('connect.php');
$planttype=$_POST['planttype'];
mysql_select_db('dispersionfarms',$con);
$query = mysql_query("SELECT FROM plantready WHERE planttype='$planttype'",$con);
$row=mysql_fetch_array($query);
echo $row['ready'];
include('closeconnect.php');
?>
