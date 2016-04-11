<?php
session_start();
$usrn = $_SESSION['currentuser'];
include('connect.php');
if (!$con) {
  die("Cannot connect to Database: ". mysql_error());
}
else {
  mysql_select_db('dispersionfarms',$con);
  $sql = "SELECT * FROM compost WHERE owner='$usrn'";
  $query = mysql_query($sql,$con);
  if (mysql_num_rows($query) >=1) {
  echo "<h2>Your Compost Bins</h2>";
  echo "<table style='width:100%;opacity:0.85; border:1px solid grey;'>";
  $rownum = 1;
  echo "<tr><td><b>Description</b></td><td><b>LargeDropOff</b></td><td><b>MonthOpen</b></td><td><b>MonthClose</b></td><td><b>Public</b></td></b></td><td><b>Full</b></td><td><b>Recieved</b></td><td><b>DELETE</b></td></tr>";
  while ($row = mysql_fetch_assoc($query)) {
    $id=$row['id'];
    $ldesc=$row['locationdescription'];
    $ldropoff=$row['largedropoff'];
    $start=$row['seasonstart'];
    $end=$row['seasonend'];
    $public=$row['public'];
    $full=$row['full'];
    $rf=$row['requestfulfilled'];
    echo "<tr><td>$ldesc</td><td>$ldropoff</td><td>$start</td><td>$end</td><td>$public</td><td>$full</td><td>$rf</td><td><a href='#' onclick=\"deleteo('compost',$id)\">DELETE</a></td></tr>";
    $rownum++;
  }
  echo "</table>";
  }
  else {
    echo "You have no Compost Bins to display<br><br>";
  }
}
include('closeconnect.php');
?>
