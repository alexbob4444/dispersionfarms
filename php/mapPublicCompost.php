<?php
	echo "compiled...";
	if (isset($_COOKIE["cookieid"])) {
	$cid = intval($_COOKIE["cookieid"]);
	include('connect.php');
	if (!$con) {//bad connection
		die("Cannot connect to Database: ". mysql_error());
	}
	else {
		mysql_select_db('dispersionfarms',$con);
		$sql = "SELECT * FROM compost WHERE public='1' AND requestfulfilled='1' AND id='$cid'";
		$binquery = mysql_query($sql,$con);
		$bin = mysql_fetch_array($binquery);
			echo(setcookie('lat', json_encode($bin['lat'])));
			echo(setcookie('lng', json_encode($bin['lng'])));
			echo(setcookie('valid',json_encode(true)));
	}
	include('closeconnect.php');
	}
?>
