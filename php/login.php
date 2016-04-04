<?php
echo "compiled";
if(isset($_POST['login'])) {
$usrn = $_POST['inputusername'];
$pass = $_POST['inputpassword'];
include('connect.php');//connect to db
if (!$con) {//bad connection
	die("Cannot connect to Database: ". mysql_error());
}
else {//good connection
mysql_select_db('dispersionfarms',$con);//select the correct database
$sql = "SELECT * FROM users where password='$pass' AND username='$usrn'";
$rows = mysql_num_rows(mysql_query($sql,$con));
if(!($rows==1)) {
	echo "password does not match username";
	echo "usrn=";
	echo $usrn;
	echo "pass=";
	echo $pass;
}
else {
	//valid info was entered so login using session of $usrn
	session_start();
	$_SESSION['currentuser']=$usrn;
	header('Location: http://www.dispersionfarms.com/myaccount');
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
