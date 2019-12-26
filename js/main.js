let slideIndex1 = 1;
let slideIndex2 = 1;

showSlides1(slideIndex1,'mySlides',"dott");
showSlides2(slideIndex2,'mySlides2',"dott2");

  
// setInterval(nextSlide(slideIndex), 1000);

var timer = setInterval("plusSlides(1,'mySlides','dott')",5000);
var timer = setInterval("plusSlides(1,'mySlides2','dott2')",5000);
// var timer = setInterval("showSlides(n,'mySlides','dott',)",5000);

// Next/previous controls
function plusSlides(n,name,dotName) {
    if(name == "mySlides"){
        showSlides1(slideIndex1 += n,name,dotName);
    }else{

        showSlides2(slideIndex2 += n,name,dotName);
    }

}
// function nextSlide(){
//     showSlides(slideIndex+1)
// }
// Thumbnail image controls
function currentSlide(n,name,dotName) {
    if(name == "mySlides"){
        showSlides1(slideIndex1 = n,name,dotName);
    }else{

        showSlides2(slideIndex2 = n,name,dotName);
    }
  
}

function showSlides1(n,name,dotName) {

  let i;
  let slides = document.getElementsByClassName(name);
  let dots = document.getElementsByClassName(dotName);
  if (n > slides.length) {slideIndex1 = 1}
  if (n < 1) {slideIndex1 = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activee", "");
  }
  slides[slideIndex1-1].style.display = "block";
  dots[slideIndex1-1].className += " activee";
}
function showSlides2(n,name,dotName) {

    let i;
    let slides = document.getElementsByClassName(name);
    let dots = document.getElementsByClassName(dotName);
    if (n > slides.length) {slideIndex2 = 1}
    if (n < 1) {slideIndex2 = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" activee", "");
    }
    slides[slideIndex2-1].style.display = "block";
    dots[slideIndex2-1].className += " activee";
  }






var options = {
    offset: 50,
    
}
// var header = new Headhesive('.header',options);

