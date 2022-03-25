// Code written by Viet (Ethan) Bui
// This responsive nav bar is good for simple nav bar without the drop down nav
const mainNav = document.getElementById('menu');
const navBarToggle = document.getElementById('js-navbar-toggle');
const burger = document.querySelector(".burger");

navBarToggle.addEventListener('click', function () {
    burger.classList.toggle('toggle');
    mainNav.classList.toggle('active');
});

// this part to turn the navigation bar to stick to the top after scoll pass the size of the screen
const navbar = document.querySelector(".navbar");
const height = window.innerHeight;
const headerbg = document.querySelector(".headerwrapper");
console.log(height);



const headerbgOptions = {
    rootMargin: "-" + (height/50) + "px 0px 0px 0px"
};
const headerbgObserver = new IntersectionObserver(function(
    entries, 
    headerbgOptions
    ) {
        entries.forEach(entry => {
            if(!entry.isIntersecting) {
                navbar.classList.add("scrolled");
                navbar.classList.remove("hide");
                navbar.classList.add("scrolled-animated");
                
            } else if (entry.isIntersecting && navbar.classList.contains("scrolled")){
                navbar.classList.remove("scrolled");
                navbar.classList.remove("scrolled-animated");
                navbar.classList.add("hide");
            }
        })
    }, headerbgOptions);
//Only use this in Home Page
if (document.getElementById('Home') && (window.innerHeight <= window.innerWidth)) {
    headerbgObserver.observe(headerbg);
} else {
    navbar.classList.add("scrolled");
}

