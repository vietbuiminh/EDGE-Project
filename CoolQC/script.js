var prevScrollpos = window.pageYOffset;
var people = document.getElementById("people-trigger");
var places = document.getElementById("places-trigger");
var progress = document.getElementById("progress-trigger");
var discoverinfo = document.getElementById("discover-info");
const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".mobile-sticky-nav");
    const navLinks = document.querySelectorAll(".mobile-sticky-nav-menu a");
    // Toggle Nav
    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');

        //Animation
        navLinks.forEach((a, index) => {
            if (a.style.animation) {
                a.style.animation = '';
            } else {
                a.style.animation = `mobileNavFade 0.5s ease forwards ${index / 7 + 0.2}s`;
            }
        });

        // burger animation
        burger.classList.toggle('toggle');
    });
    
}


window.addEventListener('load', () => {
    const preload = document.querySelector(".preload");
    preload.classList.add("preload-finish");
});

window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos < currentScrollPos && ((document.body.scrollTop > 50 || document.documentElement.scrollTop > 50))) {
    document.getElementById("sticky-nav").style.bottom = "0";
    } else {
    document.getElementById("sticky-nav").style.bottom = "-200px";
    }
    prevScrollpos = currentScrollPos;
}

navSlide();

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