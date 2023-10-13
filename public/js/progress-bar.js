const progress_bar = document.getElementById("progress-bar");
console.log(progress_bar)

if (progress_bar != null){
    setProgress(progress_bar);
}

window.addEventListener('scroll',function(){
    const progress_bar = document.getElementById("progress-bar");
    if (progress_bar == null){
        console.error('No existe el elemento con id progress-bar');
        return;
    }
    setProgress(progress_bar);
});

function setProgress(progress_bar){
    let winScroll = document.documentElement.scrollTop;
    let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrolled = (winScroll / height) * 100;
    progress_bar.style.width = scrolled + "%";
}
