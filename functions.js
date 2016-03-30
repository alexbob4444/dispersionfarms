function eventResize() {
    if (window.innerWidth<700) {//screen of mobile
      document.getElementById("headerlogo").className = "headerlogom";
      
    }
    else {//screen of desktop
      document.getElementById("headerlogo").className = "headerlogod";
      document.getElementById("mainbody").html = "These ran";
    }
    document.getElementById("mainbody").html = window.innerWidth;
}

window.onresize = eventResize;
function loading() {
    window.onresize = eventResize;
    eventResize();
    document.getElementById("mainbody").html = "This ran";
}

