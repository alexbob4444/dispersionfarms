<?php  
	include('connect.php'); 
	mysql_select_db('dispersionfarms',$con); 
	$sql = 'SELECT MAX(id) FROM compost';
	$bin = mysql_fetch_row(mysql_query($sql,$con));
	$val = $bin[0];
	echo($val);
	setcookie('numCompost',$val);
?>
