function eventResize() {
    if (window.innerWidth<600) {//screen of mobile
      document.getElementById("headerlogo").className = "headerlogom";
      document.getElementById("menuicon").style.padding = '20px';
    }
    else {//screen of desktop
      document.getElementById("headerlogo").className = "headerlogod";
      document.getElementById("menuicon").style.padding = '30px';
    }
    document.getElementById("page").width=(window.innerWidth+50);
}



