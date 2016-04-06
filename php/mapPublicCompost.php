<?php
	if (isset($_POST['postid'])) {
	$cid = ($_POST['postid']);
	include('connect.php');
	if (!$con) {//bad connection
		die("Cannot connect to Database: ". mysql_error());
	}
	else {
		mysql_select_db('dispersionfarms',$con);
		$sql = "SELECT * FROM compost WHERE public='1' AND requestfulfilled='1' AND id='$cid'";
		$binquery = mysql_query($sql,$con);
		$bin = mysql_fetch_array($binquery);
		$owner=$bin['owner'];
		$sql = "SELECT * FROM users WHERE username='$owner'";
		$namequery = mysql_query($sql,$con);
		$name = mysql_fetch_array($namequery);
			echo($bin['lat']);
			echo($bin['lng']);
			if ($bin['lat'] > 10) {
				echo "1";
			}else {
				echo "0";
			}
			echo("x7" . "Owner: " . $name['name'] . "<br>" . "Notes: " . $bin['locationdescription']); 
	}
	include('closeconnect.php');
	}
?>
