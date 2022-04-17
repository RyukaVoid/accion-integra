const progress_bar = document.getElementById("progress-bar");
setProgress();

window.onscroll = () => {
    if (progress_bar == null){
        console.error('No existe el elemento con id progress-bar');
        return;
    }
    setProgress();
};

function setProgress(){
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrolled = (winScroll / height) * 100;
    progress_bar.style.width = scrolled + "%";
}
