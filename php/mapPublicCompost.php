<?php
	if (isset($_POST["postid"])) {
	$cid = intval($_POST["postid"]);
	include('connect.php');
	if (!$con) {//bad connection
		die("Cannot connect to Database: ". mysql_error());
	}
	else {
		mysql_select_db('dispersionfarms',$con);
		$sql = "SELECT * FROM compost WHERE public='1' AND requestfulfilled='1' AND id='$cid'";
		$binquery = mysql_query($sql,$con);
		$bin = mysql_fetch_array($binquery);
			echo("<script>var lat =". json_encode($bin['lat']) . "; </script>");
			echo("<script>var lng =". json_encode($bin['lng']) . ";</script>");
	}
	include('closeconnect.php');
	}
?>
