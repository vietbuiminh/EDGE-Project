const mainNav = document.getElementById('menu');
const navBarToggle = document.getElementById('js-navbar-toggle');
const burger = document.querySelector(".burger");

navBarToggle.addEventListener('click', function () {
    burger.classList.toggle('toggle');
    mainNav.classList.toggle('active');
});

const header = document.querySelector("header");
const navbar = header.querySelector(".navbar");
const headerbg = document.querySelector(".bg");

const headerbgOptions = {
    rootMargin: "-200px 0px 0px 0px"
};

const headerbgObserver = new IntersectionObserver(function(
    entries, 
    headerbgOptions
    ) {
        entries.forEach(entry => {
            if(!entry.isIntersecting) {
                navbar.classList.add("scrolled");
            } else if (entry.isIntersecting && navbar.classList.contains("scrolled")){
                navbar.classList.remove("scrolled");
            }
        })
    }, headerbgOptions);

headerbgObserver.observe(headerbg);