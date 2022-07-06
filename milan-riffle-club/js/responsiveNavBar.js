// Code written by Viet (Ethan) Bui
// This responsive nav bar is good for simple nav bar without the drop down nav
// ONLY FOR SIMPLE NAVBAR. DROPDOWN NAV BAR DO NOT USE THIS
const mainNav = document.getElementById('menu');
const navBarToggle = document.getElementById('js-navbar-toggle');
const burger = document.querySelector(".burger");

navBarToggle.addEventListener('click', function () {
    burger.classList.toggle('toggle');
    mainNav.classList.toggle('active');
});