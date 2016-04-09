<?php
session_start();
$usrn = $_SESSION['currentuser'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$locdesc = $_POST['locationdescription'];
$rainwater = $_POST['rain'];
if ($rainwater=='yes') {
  $rainwater = true;
}
else {
  $rainwater =false;
}
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];
$p6 = $_POST['p6'];
$p7 = $_POST['p7'];
$date = $_POST['date'];
$public = $_POST['public'];
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
  mysql_select_db('dispersionfarms',$con);
  $sql = "INSERT INTO farm (owner,lat,lng,locationdescription,rainwater,plant1,plant2,plant3,plant4,plant5,plant6,plant7,dateplanted,public) VALUES ('$usrn','$lat','$lng','$locdesc','$rainwater','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$date','$public')";
  echo mysql_query($sql,$con);
  include('closeconnect.php');
  header('Location: http://www.dispersionfarms.com/myaccount');
}
?>
