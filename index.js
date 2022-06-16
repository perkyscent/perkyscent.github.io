const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".site-nav-menu");

hamburger.addEventListener("click" , () =>
{hamburger.classList.toggle("active");
navMenu.classList.toggle("active");})

document.querySelectorAll(".site-nav-menu >li").forEach(
    n => n.addEventListener("click" , () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");}))