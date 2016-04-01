function eventResize() {
    if (window.innerWidth<600) {//screen of mobile
      document.getElementById("headerlogoi").className = "headerlogom";
      document.getElementById("menuiconi").className = 'menuiconm';
      document.getElementById("menuicona").className = 'menuiconm';
      document.getElementById("header").className = "headerm header";
      document.getElementById("account").className = "accountm";
      document.getElementById("pageheadtextb").className = "pageheadtextbm";
      document.getElementById("pageheadtexts").className = "pageheadtextsm";
      document.getElementById("arrowdown").className = "arrowdownm";
    }
    else {//screen of desktop
      document.getElementById("headerlogoi").className = "headerlogod";
      document.getElementById("menuiconi").className = 'menuicond';
      document.getElementById("menuicona").className = 'menuicond';
      document.getElementById("header").className = "headerd header";
      document.getElementById("account").className = "accountd";
      document.getElementById("pageheadtextb").className = "pageheadtextbd";
      document.getElementById("pageheadtexts").className = "pageheadtextsd";
      document.getElementById("arrowdown").className = "arrowdownd";
    }
}
function loadMenu() {
      $('.page').toggleClass('menuopen');
      $('.menu').toggleClass('menuopen');
      $('.back').toggleClass('menuopen');
      $('.back').toggleClass('menuclosed');
      $('#completehtml').toggleClass('menuopen');
}
function autologinmyaccountpage {
	//check session
	//place username in account
	//make loginform invisible
	//show user content
	document.getElementById("createaccountformmsg").innerHTML = "did it work?";
}
function login() {
	//check loginform for inputusername and inputpassword
	//check against databased
	//create logged in session
	autologinmyaccountpage();
}
function createAccount() {
	//check createaccountform for inputusername, inputpassword, and retypepassword
	//make sure doesn't already exist in database
		//output that this account already exists to id=createaccountformmsg
	//add to database
	//create logged in session
	autologinmyaccountpage();

}
function openLogin() {
	//make createaccountform invisible
	//make loginform visible
	
}
function openCreateAccount() {
	//make createaccountform invisible
	//make loginform visible
}
$(document).ready(function() {
	//Check if logged in and place Username into id='account'
});
