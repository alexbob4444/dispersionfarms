<?php
	if (isset($_POST['postid'])) {
	$cid = ($_POST['postid']);
	include('connect.php');
	if (!$con) {//bad connection
		die("Cannot connect to Database: ". mysql_error());
	}
	else {
		mysql_select_db('dispersionfarms',$con);
		$sql = "SELECT * FROM farm WHERE public='1' AND requestfulfilled='1' AND id='$cid'";
		$binquery = mysql_query($sql,$con);
		$bin = mysql_fetch_array($binquery);	
			echo(($bin['lat']));
			echo(($bin['lng']));
			echo "1";
	}
	include('closeconnect.php');
	}
?>
