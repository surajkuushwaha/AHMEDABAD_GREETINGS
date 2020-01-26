const hamburger = document.querySelector(".hamburger");
//getting hanburger class
const navLinks = document.querySelector(".nav-links");
// getting nav-links class
const links = document.querySelectorAll(".nav-links li");
//getting nav-links li class
hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });
});
