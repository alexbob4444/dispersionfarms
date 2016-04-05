<?php
	include('connect.php');
	if (!$con) {//bad connection
		die("Cannot connect to Database: ". mysql_error());
	}else {
		mysql_select_db('dispersionfarms',$con);
		$sql = "SELECT * FROM compost where public='1' AND requestfulfilled='1'";
		$allbins = mysql_query($sql,$con);
		
		echo "<script type='text/javascript'>document.getElementById('publiccompostdiv').style.width = '100%';";
		echo "document.getElementById('publiccompostdiv').style.height = 400;";
		echo "var map = new google.maps.Map(document.getElementById('publiccompostdiv'), {zoom:13, center: new google.maps.LatLng(43.070000,-89.411000), mapTypeId: google.maps.MapTypeId.ROADMAP });";

		while($bin = mysql_fetch_array($allbins)) {
			echo "var marker = new google.maps.Marker({position:new google.maps.LatLng($bin['lat'],$bin['lng']),draggable:false});";
			echo "marker.setMap(map);";
		}
		echo "</script>";
		include('closeconnect.php');
	}
?>
