<?php 
if(isset($_POST['createsubmit'])) {
echo $_POST['inputusername'];
echo $_POST['inputpassword'];
echo $_POST['retypepassword'];
echo include('connect.php');
if (!$con) {//bad connection
	die("Cannot connect to Database: ". mysql_error());
}
mysql_select_db('dispersionfarms',$con);
}
//check createaccountform for inputusername, inputpassword, and retypepassword
		//make sure inputusername doesn't already exist in database
			//output that this account already exists to id=createaccountformmsg
		//add to database
		//create session
		//display account info in id=dispaccount
?>

