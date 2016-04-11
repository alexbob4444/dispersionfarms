<?php
$id = $_POST['id'];
$type = $_POST['type'];
include('connect.php');
if (!$con) {
  die("Cannot connect to Database: ". mysql_error());
}
else {
  mysql_select_db('dispersionfarms',$con);
  mysql_query(DELETE FROM $type WHERE id='$id');
  include('closeconnect.php');
}
?>
