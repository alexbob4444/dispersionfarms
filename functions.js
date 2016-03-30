function eventResize() {
    if (window.innerWidth<600) {//screen of mobile
      document.getElementById("headerlogo").className = "headerlogom";
      document.getElementById("menuicon").className = 'menuiconm';
    }
    else {//screen of desktop
      document.getElementById("headerlogo").className = "headerlogod";
      document.getElementById("menuicon").className = 'menuicond';
    }
}
function loadMenu() {
      document.getElementById("body").innerHTML = 'new text as of click';
}
$(document).ready(function() {
	//null
});
