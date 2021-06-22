var prevScrollpos = window.pageYOffset;
var people = document.getElementById("people-trigger");
var places = document.getElementById("places-trigger");
var progress = document.getElementById("progress-trigger");
var discoverinfo = document.getElementById("discover-info");

window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
        if (prevScrollpos < currentScrollPos && ((document.body.scrollTop > 20 || document.documentElement.scrollTop > 20))) {
        document.getElementById("sticky-nav").style.bottom = "0";
        } else {
        document.getElementById("sticky-nav").style.bottom = "-100px";
        }
        prevScrollpos = currentScrollPos;
    }

people.addEventListener("mouseover", changePeople);
people.addEventListener("mouseout", orignalTitle);

places.addEventListener("mouseover", changePlaces);
places.addEventListener("mouseout", orignalTitle);

progress.addEventListener("mouseover", changeProgress);
progress.addEventListener("mouseout", orignalTitle);

function changePeople() {
    discoverinfo.innerHTML = "Read stories about the wonderfull people of Quad Cities.";
}

function changePlaces() {
    discoverinfo.innerHTML = "Discover awesome locations in Quad Citites area.";
}

function changeProgress() {
    discoverinfo.innerHTML = "Read stories about Quad Cities' progress.";
}

function orignalTitle() {
    discoverinfo.innerHTML = "Read stories about the people, places, and progress of Quad Cities."
}