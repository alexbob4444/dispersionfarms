<?php 
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
while(!$userExistsAlready && $record=mysql_fetch_array($myData)) {//loop through array of data
if($record['username']==$usrn) {
	$userExistsAlready =true;//stop loop and quit
}
}

if (!$userExistsAlready) {
$sql = "INSERT INTO users (username,password) VALUES ('$usrn','$pass1')";
echo mysql_query($sql,$con);
echo "Successful Creation";
}
else {
//this username exists already
echo "user exists already";
}
}
include('closeconnect.php');
}
else {//passwords are not the same so reset page and note passwords need to be same

}
}

//check createaccountform for inputusername, inputpassword, and retypepassword
		//make sure inputusername doesn't already exist in database
			//output that this account already exists to id=createaccountformmsg
		//add to database
		//create session
		//display account info in id=dispaccount
//header('Location: https://www.dispersionfarms.com/myaccount');
?>

