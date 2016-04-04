<?php
session_start();
$usrn = $_SESSION['currentuser'];
include('connect.php');
if (!$con) {
  die("Cannot connect to Database: ". mysql_error());
}
else {
  mysql_select_db('dispersionfarms',$con);
  $sql = "INSERT INTO farm (owner,lat,lng,locationdescription,rainwater,plant1,plant2,plant3,plant4,plant5,dateplanted,public) VALUES ($usrn,$lat,$lng,$locdesc,$rainwater,$p1,$p2,$p3,$p4,$p5,$date,$public);
  mysql_query($sql,$con);
  header('Location: http://www.dispersionfarms.com/myaccount');
}
?>
