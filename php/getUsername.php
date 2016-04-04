<?php
session_start();
if(isset($_SESSION['currentuser'])) {
$usrn = $_SESSION['currentuser'];
echo $usrn;
}
else {
echo "SIGN IN";
}
?>
