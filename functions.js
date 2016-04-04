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
function autologin() {
	//check session 
	//place username in id=account
	//if no session, display "sign in"
	if (window.XMLHttpRequest) {
	SJAX=new XMLHttpRequest();
	}else {
	SJAX=new ActiveXObject("Microsoft.XMLHTTP");
	}
	if (SJAX) {
		SJAX.open("POST","/dispersionfarms/php/getUsername.php",false);
		SJAX.send();
		document.getElementById('account').innerHTML = SJAX.responseText;
	} else {
	document.getElementById('account').innerHTML = "My Code Doesn't Work";
	}
}
function openLogin() {
	document.getElementById("createaccountform").className = 'createaccountform createaccountformhidden';
	document.getElementById("loginform").className = 'loginform';
	
}
function openCreateAccount() {
	document.getElementById("loginform").className = 'loginform loginformhidden';
	document.getElementById("createaccountform").className = 'createaccountform';
}
function sessionOpenCheck() {
	if ( -1 == ((document.getElementById("account").innerHTML).search("SIGN IN"))) {
		$("#phpuserfarms").load("/dispersionfarms/php/loadUserFarms.php");
		$("#phpusercompost").load("/dispersionfarms/php/loadUserCompost.php");
		document.getElementById("loginform").className = 'loginform loginformhidden';
		document.getElementById("dispaccount").className = 'dispaccount';
	}
}
function createInputMap() {
	document.getElementById('map').style.width = 500;
	document.getElementById('map').style.height = 400;
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom:100,
		center: new google.maps.LatLng(43.070000,-89.411000),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	var marker = new google.maps.Marker({
		position:new google.maps.LatLng(43.070000,-89.411000),
		draggable:true
	});
	google.maps.event.addListener(marker,'dragend',function(event){
		document.getElementById('lat').value = '' + event.latLng.lat();
		document.getElementById('lng').value = '' + event.latLng.lng();
	});
	map.setCenter(marker.position);
	marker.setMap(map);
}
function requestbucket() {
	
	createInputMap();
	
	//fill request request div with form to create bucketfarm and runs /dispersionfarms/php/createFarm.php
	document.getElementById('requestdiv').innerHTML=  "<form class='form' action='/dispersionfarms/php/createFarm.php' method='POST'>\
	<input required='true' type='hidden' id='lat' name='lat'>\
	<input required='true' type='hidden' id='lng' name='lng'>\
	<input required='true' type='text' name='locationdescription' size='35'>\
	</form>";
}
function requestprivateplanting() {
	//fill request request div with form to create bucketfarm and runs /dispersionfarms/php/createFarm.php
}
function becomeambassador() {
	//fill request request div with form to create bucketfarm and runs /dispersionfarms/php/createCompost.php
}
