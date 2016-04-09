<?php
	if (isset($_POST['postid'])) {
	$cid = ($_POST['postid']);
	include('connect.php');
	if (!$con) {//bad connection
	}
	else {
		mysql_select_db('dispersionfarms',$con);
		$sql = "SELECT * FROM farm WHERE public='1' AND requestfulfilled='1' AND id='$cid'";
		$binquery = mysql_query($sql,$con);
		if (mysql_num_rows($query)==1) {
		$bin = mysql_fetch_array($binquery);	
		$owner =$bin['owner'];
		$sql = "SELECT * FROM users WHERE username='$owner'";
		$namequery = mysql_query($sql,$con);
		$name = mysql_fetch_array($namequery);
			echo(($bin['lat']));
			echo(($bin['lng']));
			if ($bin['lat']>10) {
				echo "1";
			}else {
				echo "0";
			}
			
			echo("x7<b>Owner:</b> " . $name['name'] . "<br>");
			echo("<b>Plants:</b> " . $bin['plant1']);
			for ($i=2; $i<8;$i++) {
			  if ($bin['plant' . $i] != " ") {
			  	echo(" & " . $bin['plant' . $i]);
			  }
			}
			echo("<b>Notes:</b> " . $bin['locationdescription']); 
		}
	}
	include('closeconnect.php');
	}
?>
