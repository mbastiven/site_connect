/*   -------------------Pre Loader------------------*/

window.onload = function () {
    window.setTimeout(fadeout, 500); $(this).remove();
}

function fadeout() {
    document.querySelector('.preloader').style.opacity = '0';
    document.querySelector('.preloader').style.display = 'none';
    $(this).remove();
}





