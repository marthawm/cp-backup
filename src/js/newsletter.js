window.onload = function(){
        checkCookie();
};


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');

    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
};


function checkCookie() {
    var first_time = getCookie("first_time");
    if (!first_time) {      
    		setCookie("first_time", 1, 365);
        setTimeout(showNewsletter,2000);
    }
}

function showNewsletter() {
    document.getElementsByClassName("newsletter-block")[0].style.display = 'flex';
}

function closeNewsletter() {
    document.getElementsByClassName("newsletter-block")[0].style.display = 'none';
}

