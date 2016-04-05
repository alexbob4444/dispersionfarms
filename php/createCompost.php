<?php
session_start();
$usrn = $_SESSION['currentuser'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$locdesc = $_POST['locationdescription'];
$public = $_POST['public'];
if ($public=='yes') {
  $public = true;
}
else {
  $public =false;
}
echo $usrn;
echo $lat;
echo $lng;
echo $locdesc;
echo $public;
include('connect.php');
if (!$con) {
  die("Cannot connect to Database: ". mysql_error());
}
else {
  mysql_select_db('dispersionfarms',$con);
  $sql = "INSERT INTO farm (owner,lat,lng,locationdescription,public) VALUES ('$usrn','$lat','$lng','$locdesc','$public')";
  mysql_query($sql,$con);
  header('Location: http://www.dispersionfarms.com/myaccount');
}
?>
