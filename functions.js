$(document).ready(function()
{
    $(document).live("onchange",function()
    {
        if (screen.width<700) {//screen of mobile
          document.getElementById('headerlogo').className = "headerlogom";
        }
        else {//screen of desktop
          document.getElementById('headerlogo').className = "headerlogod";
        }
    });
});
