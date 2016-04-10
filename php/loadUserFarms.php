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
  echo "<table style='width:100%;opacity:0.75; border:1px solid grey;'>";
  $rownum = 1;
  echo "<tr style='height:30px; padding:7px; border:1px solid grey;'><td><b>Description</b></td><td><b>Plant1</b></td><td><b>Plant2</b></td><td><b>Plant3</b></td><td><b>Plant4</b></td><td><b>Plant5</b></td><td><b>Plant6</b></td><td><b>Plant7</b></td><td><b>Public</b></td><td>DELETE</td></tr>";
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
    echo "<tr style='height:30px;border-spacing:5px;border:2px solid grey;'><td>$ldesc</td><td>$p1</td><td>$p2</td><td>$p3</td><td>$p4</td><td>$p5</td><td>$p6</td><td>$p7</td><td>$pub</td><td><a href='#' onClick='deleteo('f',$id;'>DELETE</a></td></tr>";
    $rownum++;
  }
  echo "</table><br>";
  }
  else {
    echo "You have no farms to display";
  }
}
?>
