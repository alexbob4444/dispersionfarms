<?php
$con = mySQL_Connect("localhost","getdatauser","secret");
if (!$con) {//bad connection
	die("Cannot connect to Database: ", mysql_error());
}
?>
