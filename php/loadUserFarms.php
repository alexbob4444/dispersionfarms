<?php
session_start();
$usrn = $_SESSION['currentuser'];
include('connect.php');
if (!$con) {
  die("Cannot connect to Database: ". mysql_error());
}
else {
  mysql_select_db('dispersionfarms',$con);
  $sql = "SELECT * FROM farm WHERE owner='$usrn'";
  $query = mysql_query($sql,$con);
  if (mysql_num_rows($query) >=1) {
  echo "<h2>Your Farms</h2>";
  echo "<table style='width:100%;opacity:0.85; border:1px solid grey;'>";
  $rownum = 1;
  echo "<tr><td><b>#</b></td></td><td><b>Description</b></td><td><b>P1</b></td><td><b>P2</b></td><td><b>P3</b></td><td><b>P4</b></td><td><b>P5</b></td><td><b>P6</b></td><td><b>P7</b></td><td><b>Public</b></td><td><b>Open</b></td><td><b>DELETE</b></td></tr>";
  while ($row = mysql_fetch_assoc($query)) {
    $id=$row['id'];
    $ldesc=$row['locationdescription'];
    $p1=$row['plant1'];
    $p2=$row['plant2'];
    $p3=$row['plant3'];
    $p4=$row['plant4'];
    $p5=$row['plant5'];
    $p6=$row['plant6'];
    $p7=$row['plant7'];
    $pub=$row['public'];
    $rf=$row['requestfulfilled'];
    echo "<tr><td>$id</td><td>$ldesc</td><td>$p1</td><td>$p2</td><td>$p3</td><td>$p4</td><td>$p5</td><td>$p6</td><td>$p7</td><td>$pub</td><td>$rf</td><td><a href='#' onclick=\"deleteo('farm',$id)\">DELETE</a></td></tr>";
    $rownum++;
  }
  echo "</table>";
  }
  else {
    echo "You have no farms to display<br><br>";
  }
}
include('closeconnect.php');
?>
