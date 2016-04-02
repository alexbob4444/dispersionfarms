function docready() {
  $('#loginform').submit(function()
{
	//$.ajax({
		//check loginform for inputusername and inputpassword
		//check against databased
		//create session
		//display account info in id=dispaccount
	//});
	return false;
});
$('#createaccountform').submit(function()
{
	//$.ajax({
		//check createaccountform for inputusername, inputpassword, and retypepassword
		//make sure inputusername doesn't already exist in database
			//output that this account already exists to id=createaccountformmsg
		//add to database
		//create session
		//display account info in id=dispaccount
	//});
	return false;
});
}
//check if session... if not openLogin()...
//if so (document.getElementById("dispaccount").className = 'dispaccount';)