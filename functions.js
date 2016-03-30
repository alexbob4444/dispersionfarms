eventResize() {
    if (window.innerWidth<700) {//screen of mobile
      document.getElementById("headerlogo").className = "headerlogom";
    }
    else {//screen of desktop
      document.getElementById("headerlogo").className = "headerlogod";
    }
}

window.onresize = eventResize();
eventResize();

