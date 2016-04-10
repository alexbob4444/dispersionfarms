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
  echo "<table style='width:100%'>";
  $rownum = 1;
  echo "<tr style='height:30px;'><td>Description</td><td>Plant1</td><td>Plant2</td><td>Plant3</td><td>Plant4</td><td>Plant5</td><td>Plant6</td><td>Plant7</td><td>Public</td><td>DELETE</td></tr>";
  while ($row = mysql_fetch_assoc($result)) {
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
    echo "<tr style='height:30px;'><td>$ldesc</td><td>$p1</td><td>$p2</td><td>$p3</td><td>$p4</td><td>$p5</td><td>$p6</td><td>$p7</td><td>$pub</td><td><a href='#' onClick='deleteo('f',$id;'>DELETE</a></td></tr>";
    $rownum++;
  }
  echo "</table><br>";
}
?>
