<?php
session_start();
$usrn = $_SESSION['currentuser'];
include('connect.php');
if (!$con) {
  die("Cannot connect to Database: ". mysql_error());
}
else {
  mysql_select_db('dispersionfarms',$con);
  $sql = "INSERT INTO farm (owner,lat,lng,locationdescription,acceptsmeatoilfat,acceptsmanure,acceptsplantmatter,full,public,largedropoff) VALUES ($usrn,$lat,$lng,$locdesc,$mof,$m,$pm,$public,$largedropoff)";
  mysql_query($sql,$con);
  header('Location: http://www.dispersionfarms.com/myaccount');
}
?>
