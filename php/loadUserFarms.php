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
  echo "<table style='width:100%'>";
  $rownum = 1;
  for ($row = mysql_fetch_assoc($result)) {
    echo "<tr style='height:30px;'><td id='fid'>$row['id']</td><td>$row['locationdescription']</td><td>$row['plant1']</td><td>$row['plant2']</td><td>$row['plant3']</td><td>$row['plant4']</td><td>$row['plant5']</td><td>$row['plant6']</td><td>$row['plant7']</td><td>$row['public']</td><td><a href='#' onClick='delete('f',$rownum)'>DELETE</a></td></tr>";
    $rownum++;
  }
  echo "</table>";
}
?>
