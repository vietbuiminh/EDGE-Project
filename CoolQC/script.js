window.onscroll = function() {scrollFunction()};
        
function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementsByClassName('sticky-nav').style.bottom = "100px";
    } else {
    document.getElementsByClassName('sticky-nav').style.bottom = "-100px";
    }
}