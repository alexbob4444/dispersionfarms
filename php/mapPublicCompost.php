<?php
	echo "compiled...";
	//if (isset($_COOKIE["cookieid"])) {
	//$cid = intval($_COOKIE["cookieid"]);
	$cid=1;
	include('connect.php');
	if (!$con) {//bad connection
		die("Cannot connect to Database: ". mysql_error());
	}
	else {
		mysql_select_db('dispersionfarms',$con);
		$sql = "SELECT * FROM compost WHERE public='1' AND requestfulfilled='1' AND id='$cid'";
		echo "before query";
		$binquery = mysql_query($sql,$con);
		$bin = mysql_fetch_array($binquery);
		echo "made it to before echos";
			setcookie('lat', json_encode($bin['lat']));
			setcookie('lng', json_encode($bin['lng']));
			echo($bin['lat']);
			echo($bin['lng']);
			setcookie('valid',json_encode(true));
			echo "after echos";
	}
	include('closeconnect.php');
//	}
?>
