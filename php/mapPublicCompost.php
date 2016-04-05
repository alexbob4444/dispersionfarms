<?php
		include('connect.php');
		if (!$con) {//bad connection
			die("Cannot connect to Database: ". mysql_error());
		}else {
			mysql_select_db('dispersionfarms',$con);
			$sql = "SELECT * FROM compost where public='1' AND requestfulfilled='1'";
			$allbins = mysql_query($sql,$con);
			while($bin = mysql_fetch_array($allbins)) {
				echo "var marker = new google.maps.Marker({position:new google.maps.LatLng($bin['lat'],$bin['lng']),draggable:false});";
				echo "marker.setMap(map);";
			}
			include('closeconnect.php');
		}
	?>
