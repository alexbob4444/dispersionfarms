function eventResize() {
    if (window.innerWidth<700) {//screen of mobile
      document.getElementById("headerlogo").className = "headerlogom";
      
    }
    else {//screen of desktop
      document.getElementById("headerlogo").className = "headerlogod";
    }
    document.getElementById("page").width=window.innerWidth;
}

function loading() {
    eventResize();
    window.onresize = eventResize;
}

