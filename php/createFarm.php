<?php
session_start();
$usrn = $_SESSION['currentuser'];
$lat = $_SESSION['lat'];
$lng = $_SESSION['lng'];
$locdesc = $_SESSION['locationdescriptiong'];
$rainwater = $_SESSION['rain'];
if ($rainwater=='yes') {
  $rainwater = true;
}
else {
  $rainwater =false;
}
$p1 = $_SESSION['p1'];
$p2 = $_SESSION['p2'];
$p3 = $_SESSION['p3'];
$p4 = $_SESSION['p4'];
$p5 = $_SESSION['p5'];
$date = $_SESSION['date'];
$public = $_SESSION['public'];
if ($public=='yes') {
  $public = true;
}
else {
  $public =false;
}
include('connect.php');
if (!$con) {
  die("Cannot connect to Database: ". mysql_error());
}
else {
  echo "Before Query";
  echo mysql_select_db('dispersionfarms',$con);
  $sql = "INSERT INTO farm (owner,lat,lng,locationdescription,rainwater,plant1,plant2,plant3,plant4,plant5,dateplanted,public) VALUES ($usrn,$lat,$lng,$locdesc,$rainwater,$p1,$p2,$p3,$p4,$p5,$date,$public)";
  echo mysql_query($sql,$con);
  include('closeconnect.php');
  //header('Location: http://www.dispersionfarms.com/myaccount');
}
?>
