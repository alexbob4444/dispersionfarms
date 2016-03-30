eventResize() {
    if (screen.width<700) {//screen of mobile
      document.getElementById("headerlogo").className = "headerlogom";
    }
    else {//screen of desktop
      document.getElementById("headerlogo").className = "headerlogod";
    }
}
load() {
    window.onresize = eventResize;
    //eventResize();
}
