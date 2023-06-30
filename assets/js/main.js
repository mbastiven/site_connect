

/*   -------------------Profile------------------*/


function menuToggle() {
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active')
}

function hide() {
    menu.style.display = "none";
}
function show() {
    menu.style.display = "block";
}
function show1() {
    menu1.style.display = "none";
}



/*   -------------------Profile------------------*/


function menuTogglex() {
    const toggleMenu = document.querySelector("#menux");
    toggleMenu.classList.toggle('active')
}

function hidex() {
    menux.style.display = "none";
}
function showx() {
    menux.style.display = "block";
}
function show1x() {
    menu1x.style.display = "none";
}




/*   -------------------Image Galley ------------------*/

$(document).ready(function () {
    $("#news-slider").owlCarousel({
        items: 3,
        navigation: true,
        navigationText: ["", ""],
        autoPlay: true
    }   );
});


var btn = document.getElementsByClassName("btn");
var gallery = document.getElementById("gallery");

var images = new Array(
    "assets/images/event images/memory-section/28.jpg",
    "assets/images/event images/memory-section/12.jpg",
    "assets/images/event images/memory-section/21.jpg",
    "assets/images/event images/memory-section/14.jpg",
);
for (let i = 0; i < btn.length; i++) {
    btn[i].onclick = function () {
        gallery.src = images[i];
        let current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace("active", "");
        this.className += " active";
    };

}


/*   -------------------Video Player ------------------*/


var videoPlayer = document.getElementById("videoPlayer");

var myVideo = document.getElementById("myVideo");

function stopVideo() {
    videoPlayer.style.display = "none";
   
}


function playVideo(file) {
    myVideo.src = file;
    videoPlayer.style.display = "block";
  
}



var timeout = 1000; // in miliseconds (3*1000)

$("#status-msg").delay(timeout).fadeOut(3000);
var timeout = 1000; // in miliseconds (3*1000)

$('.status-msg').delay(timeout).fadeOut(3000);


