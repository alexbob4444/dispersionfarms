<?php  
	include('connect.php'); 
	mysql_select_db('dispersionfarms',$con); 
	$sql = "SELECT MAX(id) FROM compost WHERE public='1' AND requestfulfilled='1'";
	$bin = mysql_fetch_row(mysql_query($sql,$con));
	$val = $bin[0];
	echo($val);
	include('closeconnect.php');
?>
