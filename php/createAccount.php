<?php 
echo "compiled..<br>";
if(isset($_POST['createsubmit'])) {//submit button pressed
$usrn = $_POST['inputusername'];
$pass1 = $_POST['inputpassword'];
$pass2 = $_POST['retypepassword'];
$name = $_POST['inputname'];
$email = $_POST['inputemail'];
$phone = $_POST['inputphone'];
if($pass1==$pass2) {
include('connect.php');//connect to db
if (!$con) {//bad connection
	die("Cannot connect to Database: ". mysql_error());
}
else {//good connection
echo mysql_select_db('dispersionfarms',$con);//select db
$userExistsAlready = false;
$sql = "SELECT * FROM users where username='$usrn'";
$userData = mysql_query($sql,$con);
if(!($rows==1)) {
$pass1=crypt($pass1);
$sql = "INSERT INTO users (username,password,name,email,phone) VALUES ('$usrn','$pass1','$name','$email','$phone')";
echo mysql_query($sql,$con);
echo "Successful Creation";
session_start();
$_SESSION['currentuser']=$usrn;
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

