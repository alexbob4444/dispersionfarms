
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
      if (window.innerWidth<400) {
      	document.getElementById("headerlogoi").style.display = "none";
      }
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
	document.getElementById('account').innerHTML = "SJAX ERROR";
	}
	//check if mobile
	//set width to 600px if mobile
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
	if ( -1 == (document.getElementById("account").innerHTML).search("SIGN IN") && -1 == (document.getElementById("account").innerHTML).search("SJAX ERROR")) {
		$("#phpuserfarms").load("/dispersionfarms/php/loadUserFarms.php");
		$("#phpusercompost").load("/dispersionfarms/php/loadUserCompost.php");
		document.getElementById("loginform").className = 'loginform loginformhidden';
		document.getElementById("dispaccount").className = 'dispaccount';
	}
}
function createInputMap() {
	document.getElementById('map').style.width = '90%';
	document.getElementById('map').style.height = 400;
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom:13,
		center: new google.maps.LatLng(43.070000,-89.411000),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(43.070000,-89.411000),
		draggable: true
	});
	google.maps.event.addListener(marker,'dragend',function (evt){
		document.getElementById('lat').value = "" + evt.latLng.lat().toFixed(6);
		document.getElementById('lng').value = "" + evt.latLng.lng().toFixed(6);
	});
	map.setCenter(marker.position);
	marker.setMap(map);
}
function requestbucket() {
	
	createInputMap();
	document.getElementById('inputtitlediv').innerHTML = "Input Your Bucket Farm";
	document.getElementById('requestdiv').className = "requestdiv";
	//fill request request div with form to create bucketfarm and runs /dispersionfarms/php/createFarm.php
	farmModForm('c');
}
function farmModForm(upc) {
	var selectos = "<option value=' '></option>\
	<option value='Lettuce'>Lettuce</option>\
	<option value='Beets'>Beets</option>\
	<option value='Radishes'>Radishes</option>\
	<option value='Peas'>Peas</option>\
	<option value='Carrots'>Carrots</option>\
	<option value='Spinach'>Spinach</option>\
	<option value='Watermellon'>Watermellon</option>\
	<option value='Honeydew'>Honeydew</option>\
	<option value='Strawberries'>Strawberries</option>\
	<option value='Borrage'>Borrage</option>\
	<option value='Corn'>Corn</option>\
	<option value='Squash'>Squash</option>\
	<option value='Green Beans'>Green Beans</option>\
	<option value='Tomatoes'>Tomatoes</option>\
	<option value='Basil'>Basil</option>\
	<option value='Kale'>Kale</option>\
	<option value='Chard'>Chard</option>\
	</select>";
	if (upc=='c') {
	document.getElementById('inputdiv').innerHTML=  "<form class='form' action='/dispersionfarms/php/createFarm.php' method='POST'>\
	<input required='true' type='hidden' id='lat' name='lat'>\
	<input required='true' type='hidden' id='lng' name='lng'>\
	Location Specifics: <input required='true' type='text' name='locationdescription' size='35'> <i>Exp: Address</i><br><br>\
	What Types of Plants are here: <select required='true' name='p1'> "+ selectos + " & <select name='p2'>" + selectos + " & <select \
	name='p3'>" + selectos + " & <br><select name='p4'>" + selectos + " & <select name='p5'>" + selectos + " & <select name='p6'>" + selectos + " & <select \
	name='p7'>"+selectos+"<br><br>\
	When Were the Seeds Planted? <input type='date' name='date' id='datepicker'><br><br>\
	Does This Site Recieve Rainwater? <select required='true' name='rain'><option value='yes'>yes</option><option value='no'>no</option></select><br><br>\
	Is This Farm Open To the Public? <select required='true' name='public' value='yes'><option value='yes'>yes</option><option value='no'>no</option></select><br><br>\
	<input type='submit' name='createfarmsubmit' value='Post Planting'>&nbsp&nbsp<a class='requestbutton' href='#' onclick='closecreateobjectform()'>CANCEL</a>\
	</form>";
	document.getElementById('datepicker').valueAsDate = new Date();
	}
}
function requestprivateplanting() {
	createInputMap();
	document.getElementById('inputtitlediv').innerHTML = "Input the Info For Your Desired Planting";
	document.getElementById('requestdiv').className = "requestdiv";
	//fill request request div with form to create bucketfarm and runs /dispersionfarms/php/createFarm.php
	farmModForm('c');
}
function becomeambassador() {
	createInputMap();
	document.getElementById('inputtitlediv').innerHTML = "Input the Information About Your Desired Compost Bin";
	document.getElementById('requestdiv').className = "requestdiv";
	//fill request request div with form to create bucketfarm and runs /dispersionfarms/php/createFarm.php
	document.getElementById('inputdiv').innerHTML=  "<form class='form' action='/dispersionfarms/php/createCompost.php' method='POST'>\
	<input required='true' type='hidden' id='lat' name='lat'>\
	<input required='true' type='hidden' id='lng' name='lng'>\
	Location Specifics: <input required='true' type='text' name='locationdescription' size='35'> <i>Exp: Address</i><br><br>\
	Is This Bin Open To the Public? <select required='true' name='public' value='yes'><option value='yes'>yes</option><option value='no'>no</option></select><br><br>\
	<input type='submit' name='createcompostubmit' value='Post Compost Bin'>&nbsp&nbsp<a class='requestbutton' href='#' onclick='closecreateobjectform()'>CANCEL</a>\
	</form>";
	
}
function closecreateobjectform() {
	document.getElementById('requestdiv').className = 'requestdiv requestdivhidden';
}
function loadpubliccompostmap() {
	document.getElementById('publiccompostdiv').style.width = '90%';
	document.getElementById('publiccompostdiv').style.height = 400;
	var mapc = new google.maps.Map(document.getElementById('publiccompostdiv'), {
		zoom:13,
		center: new google.maps.LatLng(43.070000,-89.411000),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	syncrequest('nc',0);
	var curnum = 1;
	syncrequest('c',curnum);
	var markerc;
	var lat;
	var lng;
	var valid;
	var mass;
	var strokecolor;
	var circlesize;
	var tempindex1;
	var tempindex2;
	var comment;
	var infowindow = new google.maps.InfoWindow();
	while (curnum<=numcompost) {//while curid < max id number
	if (latlng == null || latlng=="") {
	}else {
		tempindex1 = latlng.indexOf('-');
		tempindex2 = latlng.indexOf("x7");
		lat = latlng.substring(0,tempindex1);
		lng = latlng.substring(tempindex1,tempindex2-1);
		valid = latlng.substring(tempindex2-2,tempindex2-1);
		mass = latlng.substring(tempindex2-1,tempindex2);
		if (mass=='1') {
        		strokecolor = "green";
        		circlesize = 6;
		}else {
        		strokecolor = "red";
        		circlesize =3;
        	}
		comment = latlng.substring(tempindex2+2);
		if (lat!=null && lat!=0 && Number(valid)==1) {
		markerc = new google.maps.Marker({
			position: new google.maps.LatLng(Number(lat), Number(lng)),
			map: mapc,
			icon: {
        			path: google.maps.SymbolPath.CIRCLE,
        			strokeColor: strokecolor,
        			scale: circlesize
    			}
		});
		google.maps.event.addListener(markerc, 'click', (function(markerc,comment) {
        	return function() {
          		infowindow.setContent(comment);
          		infowindow.open(mapc, markerc);
        	}
      		})(markerc,comment));
		}
	}
		curnum=(curnum + 1);
		syncrequest('c',curnum);
	}
}
var numcompost;
var latlng;
function syncrequest(type, id) {
	if (window.XMLHttpRequest) {
	SJAX=new XMLHttpRequest();
	}else {
	SJAX=new ActiveXObject("Microsoft.XMLHTTP");
	}
	if (type=='c') {
	
	if (SJAX) {
		SJAX.open("POST","/dispersionfarms/php/mapPublicCompost.php",false);
		SJAX.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		SJAX.onreadystatechange = function()
		{
		if(SJAX.readyState == 4 && SJAX.status == 200) {
        		latlng = SJAX.responseText;
    		}
		}
		SJAX.send("postid=" + id);
	}
	}
	if (type=='f') {
	
	if (SJAX) {
		SJAX.open("POST","/dispersionfarms/php/mapPublicFarms.php",false);
		SJAX.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		SJAX.onreadystatechange = function()
		{
		if(SJAX.readyState == 4 && SJAX.status == 200) {
        		latlng = SJAX.responseText;
    		}
		}
		SJAX.send("postid=" + id);
	}
	}
	if (type=='nc') {
		
		if (SJAX) {
			SJAX.open("POST","/dispersionfarms/php/numCompost.php",false);
			SJAX.onreadystatechange = function()
			{
			if(SJAX.readyState == 4 && SJAX.status == 200) {
				 numcompost=Number(SJAX.responseText);
    			}
			}
			SJAX.send();
		}	
	}
	if (type=='nf') {
		
		if (SJAX) {
			SJAX.open("POST","/dispersionfarms/php/numFarms.php",false);
			SJAX.onreadystatechange = function()
			{
			if(SJAX.readyState == 4 && SJAX.status == 200) {
				 numcompost=Number(SJAX.responseText);
    			}
			}
			SJAX.send();
		}	
	}
}
function loadpublicfarmmap() {
	document.getElementById('publicfarmdiv').style.width = '90%';
	document.getElementById('publicfarmdiv').style.height = 400;
	var mapf = new google.maps.Map(document.getElementById('publicfarmdiv'), {
		zoom:13,
		center: new google.maps.LatLng(43.070000,-89.411000),
		mapTypeId: google.maps.MapTypeId.HYBRID
	});
	syncrequest('nf',0);
	//document.getElementById('body').innerHTML = document.getElementById('body').innerHTML + numcompost;
	var curnum = 1;
	syncrequest('f',curnum);
	var markerf;
	var lat;
	var lng;
	var valid;
	var tempindex1;
	var tempindex2;
	var comment;
	var infowindow = new google.maps.InfoWindow();
	while (curnum<=numcompost) {//while curid < max id number
	if (latlng == null || latlng=="") {
	}else {
		tempindex1 = latlng.indexOf('-');
		tempindex2 = latlng.indexOf("x7");
		lat = latlng.substring(0,tempindex1);
		lng = latlng.substring(tempindex1,tempindex2-1);
		valid = latlng.substring(tempindex2-1,tempindex2);
		comment = latlng.substring(tempindex2+2);
		if (lat!=null && lat!=0 && Number(valid)==1) {
		markerf = new google.maps.Marker({
			position: new google.maps.LatLng(Number(lat), Number(lng)),
			map: mapf
		});
		google.maps.event.addListener(markerf, 'click', (function(markerf,comment) {
        	return function() {
          		infowindow.setContent(comment);
          		infowindow.open(mapf, markerf);
        	}
      		})(markerf,comment));
		}
	}
		curnum=(curnum + 1);
		syncrequest('f',curnum);
	}
}
function deleteo(foc,id) {
	$.ajax({
		data: 'type='+foc +'&id='+id,
		url: '/dispersionfarms/php/deletefc.php',
		method: 'POST',
		success: function(json) {
			location.reload(true);
		}
	});
}
function loadPlant(plantname) {
	//plantinfodiv
	//publicfarmdiv
	var stringloc = "/dispersionfarms/textinfo/" + plantname + ".html";
	document.getElementById('plantinfodiv').innerHTML=" ";
	document.getElementById('plantinfodiv').style.display='block';
	$.ajax({
		url: stringloc,
		dataType:"html",
		success: function (data) {
			document.getElementById('plantinfodiv').innerHTML=document.getElementById('plantinfodiv').innerHTML+data;	
		}
	});
	var datastr='planttype='+plantname;
	$.ajax({
		data: datastr,
		method: "POST",
		url: "/dispersionfarms/php/plantReady.php",
		success: function (data) {
			if (data == 1) {
				document.getElementById('plantinfodiv').innerHTML="<h3>This Plant IS READY for harvest!</h3>\
				<a style='float:right; margin-right:90px;' href='#' onclick=\"javascript:document.getElementById('plantinfodiv').style.display='none';\" class='textlink'>CLOSE</a>"+document.getElementById('plantinfodiv').innerHTML;
			}
			else {
				document.getElementById('plantinfodiv').innerHTML="<h3>This Plant IS NOT ready for harvest!</h3>\
				<a style='float:right; margin-right:90px;' href='#' onclick=\"javascript:document.getElementById('plantinfodiv').style.display='none';\" class='textlink'>CLOSE</a>"+document.getElementById('plantinfodiv').innerHTML;
			}
		}
	});
	
}
