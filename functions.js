$(document).ready(function()
{
    $(document).live("onchange",function()
    {
        document.getElementById('header').height = '80%';
        if (screen.width<700) {//screen of mobile
          document.getElementById('headerlogo').class = 'headerlogom';
        }
        else {//screen of desktop
          document.getElementById('headerlogo').class = 'headerlogod';
        }
    });
});
