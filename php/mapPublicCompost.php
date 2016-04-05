<?php
	if (isset("cookieid")) {
	$cid = cookies["cookieid"];
	include('connect.php');
	if (!$con) {//bad connection
		die("Cannot connect to Database: ". mysql_error());
	}else {
		mysql_select_db('dispersionfarms',$con);
		$sql = "SELECT * FROM compost WHERE public='1' AND requestfulfilled='1' AND id='$cid'";
		$binquery = mysql_query($sql,$con);
		$bin = mysql_fetch_array($binquery);
			setcookie('lat', $bin['lat']);
			setcookie('lng', $bin['lng']);
			setcookie('valid',true);
		}
		echo "</script>";
		include('closeconnect.php');
	}
	}
?>
