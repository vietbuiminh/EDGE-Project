var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
    if (prevScrollpos < currentScrollPos && ((document.body.scrollTop > 20 || document.documentElement.scrollTop > 20))) {
    document.getElementById("sticky-nav").style.bottom = "0";
    } else {
    document.getElementById("sticky-nav").style.bottom = "-100px";
    }
    prevScrollpos = currentScrollPos;
}