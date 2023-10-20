
const navbar = document.getElementsByTagName("nav")[0];
setClassNavbar();

document.onscroll = () => {
    if (navbar == null){
        console.error('No existe el elemento con id navbar');
        return;
    }
    setClassNavbar();
}

function setClassNavbar(){
    const winScroll = document.documentElement.scrollTop;
    if (winScroll > 0){
        navbar.classList.remove("nav-transparent");
    } else {
        navbar.classList.add("nav-transparent");
    }
}

// Button
const btn = document.getElementById("toggle-navbar");

btn.addEventListener("click", () => {
    const navbar = document.getElementById("navbar-menu");

    if (!navbar) {
        console.error('No existe el elemento con id navbar-menu');
        return;
    }

    navbar.classList.toggle("active-nav-menu");
});