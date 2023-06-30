var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mouseWheel: {
        invert: false,
    },
    // autoHeight: true
    pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
    }
});

/*   -------------------faq ------------------*/

let li = document.querySelectorAll(".faq-text li");
for (var i = 0; i < li.length; i++) {
  li[i].addEventListener("click", (e)=>{
    let clickedLi;
    if(e.target.classList.contains("question-arrow")){
      clickedLi = e.target.parentElement;
    }else{
      clickedLi = e.target.parentElement.parentElement;
    }
   clickedLi.classList.toggle("showAnswer");
  });
}