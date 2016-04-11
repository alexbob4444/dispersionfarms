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
include('connect.php');
if (!$con) {
  die("Cannot connect to Database: ". mysql_error());
}
else {
  mysql_select_db('dispersionfarms',$con);
  mysql_query("DELETE * FROM compost WHERE lat='0'",$con);
  $sql = "INSERT INTO compost (owner,lat,lng,locationdescription,public) VALUES ('$usrn','$lat','$lng','$locdesc','$public')";
  mysql_query($sql,$con);
  include('closeconnect.php');
  header('Location: http://www.dispersionfarms.com/myaccount');
}
?>
