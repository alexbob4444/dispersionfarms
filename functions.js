function eventResize() {
    if (window.innerWidth<600) {//screen of mobile
      document.getElementById("headerlogo").className = "headerlogom";
      document.getElementById("menuicon").className = 'menuiconm';
      document.getElementById("header").className = "headerm header";
    }
    else {//screen of desktop
      document.getElementById("headerlogo").className = "headerlogod";
      document.getElementById("header").className = "headerd header";
      document.getElementById("menuicon").className = 'menuicond';
    }
}
function loadMenu() {
      document.getElementById("body").innerHTML = 'new text as of click';
}
$(document).ready(function() {
	//null
});
