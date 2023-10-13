
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
