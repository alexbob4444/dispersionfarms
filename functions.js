function eventResize() {
    if (window.innerWidth<600) {//screen of mobile
      document.getElementById("headerlogoi").className = "headerlogom";
      document.getElementById("menuiconi").className = 'menuiconm';
      document.getElementById("menuicona").className = 'menuiconm';
      document.getElementById("header").className = "headerm header";
      document.getElementById("account").className = "accountm";
      document.getElementById("pageheadtextb").className = "pageheadtextbm";
      document.getElementById("pageheadtexts").className = "pageheadtextsm";
    }
    else {//screen of desktop
      document.getElementById("headerlogoi").className = "headerlogod";
      document.getElementById("menuiconi").className = 'menuicond';
      document.getElementById("menuicona").className = 'menuicond';
      document.getElementById("header").className = "headerd header";
      document.getElementById("account").className = "accountd";
      document.getElementById("pageheadtextb").className = "pageheadtextbd";
      document.getElementById("pageheadtexts").className = "pageheadtextsd";
    }
}
function loadMenu() {
      document.getElementById("body").innerHTML = 'new text as of click';
      $('.page').toggleClass('menuopen');
      $('.menu').toggleClass('menuopen');
      $('html').toggleClass('menuopen');
}
$(document).ready(function() {
	//null
});
