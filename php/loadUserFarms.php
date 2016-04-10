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
  echo "<tr style='height:30px;'><td>Descriptiong</td><td>Plant1</td><td>Plant2</td><td>Plant3</td><td>Plant4</td><td>Plant5</td><td>Plant6</td><td>Plant7</td><td>Public</td><td>DELETE</td></tr>";
  for ($row = mysql_fetch_assoc($result)) {
    echo "<tr style='height:30px;'><td>{$row['locationdescription']}</td><td>{$row['plant1']}</td><td>{$row['plant2']}</td><td>{$row['plant3']}</td><td>{$row['plant4']}</td><td>{$row['plant5']}</td><td>{$row['plant6']}</td><td>{$row['plant7']}</td><td>{$row['public']}</td><td><a href='#' onClick='deleteo('f',{$row['id']});'>DELETE</a></td></tr>";
    $rownum++;
  }
  echo "</table>";
}
?>
