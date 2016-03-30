function eventResize() {
    if (window.innerWidth<600) {//screen of mobile
      document.getElementById("headerlogo").className = "headerlogom";
      document.getElementById("menuicon").className = 'menuiconm';
    }
    else {//screen of desktop
      document.getElementById("headerlogo").className = "headerlogod";
      document.getElementById("menuicon").className = 'menuicond';
    }
    document.getElementById("page").width=(window.innerWidth+50);
}
$(document).ready(function() {
	$(#menuicon).click(function(){
	    $(this).toggleClass('active');
	    $('.page').toggleClass('.open');
	    $('.pushmenu').toggleClass('.open')
	});
});
