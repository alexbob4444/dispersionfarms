function eventResize() {
    if (window.innerWidth<600) {//screen of mobile
      document.getElementById("headerlogo").className = "headerlogom";
      document.getElementById("menuiconi").className = 'menuiconm';
      document.getElementById("menuicona").className = 'menuiconm';
      document.getElementById("header").className = "headerm header";
    }
    else {//screen of desktop
      document.getElementById("headerlogo").className = "headerlogod";
      document.getElementById("header").className = "headerd header";
      document.getElementById("menuiconi").className = 'menuicond';
      document.getElementById("menuicona").className = 'menuicond';
    }
}
function loadMenu() {
      document.getElementById("body").innerHTML = 'new text as of click';
}
$(document).ready(function() {
	//null
});
