<?php
	if (isset("cookieid")) {
	$cid = intval(cookies["cookieid"]);
	include('connect.php');
	if (!$con) {//bad connection
		die("Cannot connect to Database: ". mysql_error());
	}else {
		mysql_select_db('dispersionfarms',$con);
		$sql = "SELECT * FROM compost WHERE public='1' AND requestfulfilled='1' AND id='$cid'";
		$binquery = mysql_query($sql,$con);
		$bin = mysql_fetch_array($binquery);
			echo(setcookie('lat', $bin['lat']));
			echo(setcookie('lng', $bin['lng']));
			echo(setcookie('valid',true));
		}
		include('closeconnect.php');
	}
	}
?>
