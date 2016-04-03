<?php 
echo "compiled..<br>";
if(isset($_POST['createsubmit'])) {//submit button pressed
$usrn = $_POST['inputusername'];
$pass1 = $_POST['inputpassword'];
$pass2 = $_POST['retypepassword'];
if($pass1==$pass2) {
include('connect.php');//connect to db
if (!$con) {//bad connection
	die("Cannot connect to Database: ". mysql_error());
}
else {//good connection
echo mysql_select_db('dispersionfarms',$con);//select db
$userExistsAlready = false;
$sql = "SELECT * FROM users";
$userData = mysql_query($sql,$con);
while(!$userExistsAlready && $record=mysql_fetch_array($userData)) {//loop through array of data
if($record['username']==$usrn) {
	$userExistsAlready =true;//stop loop and quit
}
}

if (!$userExistsAlready) {
$sql = "INSERT INTO users (username,password) VALUES ('$usrn','$pass1')";
echo mysql_query($sql,$con);
echo "Successful Creation";

header('Location: http://www.dispersionfarms.com/myaccount');
}
else {
echo "user exists already";
}
}
include('closeconnect.php');
}
else {
	echo "your passwords are not the same";
}
}
?>

