<?php
if(isset($_POST['login'])) {
$usrn = $_POST['inputusername'];
$pass = $_POST['inputpassword'];
include('connect.php');//connect to db
if (!$con) {//bad connection
	die("Cannot connect to Database: ". mysql_error());
}
else {//good connection
mysql_select_db('dispersionfarms',$con);//select the correct database
$sql = "SELECT * FROM users where username='$usrn'";
$query = (mysql_query($sql,$con));
$rows = mysql_num_rows($query);
if(!($rows==1)) {
	echo "password does not match username";
	echo "usrn=";
	echo $usrn;
}
else {
	//valid info was entered so login using session of $usrn
	
	if (crypt($pass, $rows['password']) == $rows['password']) {
		session_start();
		$_SESSION['currentuser']=$usrn;
		header('Location: http://www.dispersionfarms.com/myaccount');
	}
	else {
		echo "passwords do not match";
	}
}

include('closeconnect.php');
}
}
else {
	echo "Don't go to this page without using the interface buttons";
}
//check loginform for inputusername and inputpassword
		//check against databased
		//create session
		
?>
