function eventResize() {
    if (window.innerWidth<700) {//screen of mobile
      document.getElementById("headerlogo").className = "headerlogom";
      
    }
    else {//screen of desktop
      document.getElementById("headerlogo").className = "headerlogod";
      document.getElementById("mainbody").innerHTML = "These ran";
    }
    document.getElementById("mainbody").innerHTML = "That ran";
}

window.onresize = eventResize();
eventResize();
document.getElementById("mainbody").innerHTML = "This ran";

